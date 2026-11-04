<?php
$pageId = 'audit';
$pageTitle = 'Audit trail';
$pageSubtitle = 'User activity across the platform.';
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
require_once dirname(__DIR__) . '/db.php';
require_once dirname(__DIR__) . '/activity_log.php';

if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    if (isset($_SESSION['user_id'])) {
        log_user_activity(
            $conn,
            'audit_export',
            (int) $_SESSION['user_id'],
            $_SESSION['user_name'] ?? null,
            $_SESSION['user_email'] ?? null,
            'Exported the audit trail.'
        );
    }

    $exportRows = $conn->query(
        'SELECT created_at, actor_name, actor_email, event_type, details, ip_address, user_agent
         FROM audit_logs ORDER BY created_at DESC, id DESC'
    );
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="billnest-audit-trail.csv"');
    $output = fopen('php://output', 'w');
    fputcsv($output, ['Date', 'User', 'Email', 'Activity', 'Details', 'IP address', 'User agent']);
    while ($row = $exportRows->fetch_assoc()) {
        fputcsv($output, $row);
    }
    fclose($output);
    exit;
}

require __DIR__ . '/includes/layout-header.php';
$auditRows = $conn->query(
    'SELECT actor_name, actor_email, event_type, details, ip_address, user_agent, created_at
     FROM audit_logs ORDER BY created_at DESC, id DESC'
)->fetch_all(MYSQLI_ASSOC);
?>

<section class="section active" id="sec-audit">
    <div class="panel">
        <div class="panel-head"><div><h2>Audit trail</h2><p>All recorded user activity</p></div><a class="btn btn-outline btn-sm" href="?export=csv">Export</a></div>
        <div class="panel-body"><div class="feed">
            <?php if ($auditRows): ?>
                <?php foreach ($auditRows as $auditRow): ?>
                    <?php
                    $eventLabel = ucwords(str_replace('_', ' ', $auditRow['event_type']));
                    $feedType = $auditRow['event_type'] === 'login' || $auditRow['event_type'] === 'account_registered'
                        ? 'ok'
                        : ($auditRow['event_type'] === 'login_failed' ? 'warn' : 'info');
                    ?>
                    <div class="feed-item">
                        <div class="feed-ico <?= $feedType ?>"><?= $feedType === 'ok' ? '✓' : ($feedType === 'warn' ? '!' : '•') ?></div>
                        <div class="feed-body">
                            <p><strong><?= htmlspecialchars($auditRow['actor_name'] ?: 'Unknown user', ENT_QUOTES, 'UTF-8') ?></strong> · <?= htmlspecialchars($eventLabel, ENT_QUOTES, 'UTF-8') ?> — <?= htmlspecialchars($auditRow['details'], ENT_QUOTES, 'UTF-8') ?></p>
                            <span class="feed-time">
                                <?= htmlspecialchars($auditRow['created_at'], ENT_QUOTES, 'UTF-8') ?>
                                <?php if ($auditRow['actor_email']): ?> · <?= htmlspecialchars($auditRow['actor_email'], ENT_QUOTES, 'UTF-8') ?><?php endif; ?>
                                <?php if ($auditRow['ip_address']): ?> · IP <?= htmlspecialchars($auditRow['ip_address'], ENT_QUOTES, 'UTF-8') ?><?php endif; ?>
                                <?php if ($auditRow['user_agent']): ?> · <?= htmlspecialchars($auditRow['user_agent'], ENT_QUOTES, 'UTF-8') ?><?php endif; ?>
                            </span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No activity has been recorded yet.</p>
            <?php endif; ?>
        </div></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
