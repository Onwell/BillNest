<?php
session_start();
header('Content-Type: application/json');
require __DIR__ . '/db.php';
require_once __DIR__ . '/activity_log.php';

// Where users are sent after authenticating.
const ADMIN_DASHBOARD = 'admin/index.php';
const USER_DASHBOARD  = 'user/index.php';

function respond($success, $message, $extra = []) {
    echo json_encode(array_merge(['success' => $success, 'message' => $message], $extra));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Invalid request.');
}

$action = $_POST['action'] ?? '';

/* ---------- REGISTER ---------- */
if ($action === 'register') {
    $name     = trim($_POST['name'] ?? '');
    $email    = strtolower(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';

    if ($name === '' || $email === '' || $password === '') {
        respond(false, 'Please fill in all fields.');
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        respond(false, 'Please enter a valid email address.');
    }
    if (strlen($password) < 8) {
        respond(false, 'Password must be at least 8 characters.');
    }

    $stmt = $conn->prepare('SELECT id FROM users WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        respond(false, 'An account with this email already exists.');
    }
    $stmt->close();

    $hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare('INSERT INTO users (full_name, email, password_hash) VALUES (?, ?, ?)');
    $stmt->bind_param('sss', $name, $email, $hash);
    $stmt->execute();
    $userId = (int) $conn->insert_id;
    log_user_activity($conn, 'account_registered', $userId, $name, $email, 'Account registered.');

    respond(true, 'Account created successfully. Please sign in.');
}

/* ---------- LOGIN ---------- */
if ($action === 'login') {
    $email    = strtolower(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';

    if ($email === '' || $password === '') {
        respond(false, 'Please enter your email and password.');
    }

    $stmt = $conn->prepare('SELECT id, full_name, password_hash, role FROM users WHERE email = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();

    if (!$user || !password_verify($password, $user['password_hash'])) {
        log_user_activity(
            $conn,
            'login_failed',
            $user ? (int) $user['id'] : null,
            $user['full_name'] ?? null,
            $email,
            'Failed sign-in attempt.'
        );
        respond(false, 'Incorrect email or password.');
    }

    session_regenerate_id(true);
    $_SESSION['user_id']   = $user['id'];
    $_SESSION['user_name'] = $user['full_name'];
    $_SESSION['user_email'] = $email;
    $_SESSION['user_role'] = $user['role'];
    log_user_activity($conn, 'login', (int) $user['id'], $user['full_name'], $email, 'Signed in.');

    $redirect = ($user['role'] === 'admin') ? ADMIN_DASHBOARD : USER_DASHBOARD;
    respond(true, 'Signed in successfully! Redirecting…', ['redirect' => $redirect]);
}

/* ---------- LOGOUT ---------- */
if ($action === 'logout') {
    if (isset($_SESSION['user_id'])) {
        log_user_activity(
            $conn,
            'logout',
            (int) $_SESSION['user_id'],
            $_SESSION['user_name'] ?? null,
            $_SESSION['user_email'] ?? null,
            'Signed out.'
        );
    }
    $_SESSION = [];
    session_destroy();
    respond(true, 'You have been logged out.');
}

respond(false, 'Unknown action.');
