<?php

function log_user_activity(
    mysqli $conn,
    string $eventType,
    ?int $userId,
    ?string $actorName,
    ?string $actorEmail,
    string $details
): void {
    $ipAddress = $_SERVER['REMOTE_ADDR'] ?? null;
    $userAgent = isset($_SERVER['HTTP_USER_AGENT'])
        ? substr($_SERVER['HTTP_USER_AGENT'], 0, 255)
        : null;

    $stmt = $conn->prepare(
        'INSERT INTO audit_logs (user_id, actor_name, actor_email, event_type, details, ip_address, user_agent)
         VALUES (?, ?, ?, ?, ?, ?, ?)'
    );
    $stmt->bind_param(
        'issssss',
        $userId,
        $actorName,
        $actorEmail,
        $eventType,
        $details,
        $ipAddress,
        $userAgent
    );
    $stmt->execute();
    $stmt->close();
}
