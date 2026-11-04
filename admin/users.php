<?php
$pageId = 'users';
$pageTitle = 'Users & roles';
$pageSubtitle = 'All platform accounts and their permissions.';
require_once dirname(__DIR__) . '/db.php';
$users = $conn->query('SELECT full_name, email, business_name, role FROM users ORDER BY full_name')->fetch_all(MYSQLI_ASSOC);
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-users">
    <div class="panel">
        <div class="panel-head"><div><h2>Users & roles</h2><p>All accounts across the platform</p></div><div class="chips"><button class="chip active">All</button><button class="chip">Tenant admins</button><button class="chip">Members</button><button class="chip">Viewers</button><button class="chip">Platform admins</button></div></div>
        <div class="tbl-wrap"><table class="tbl">
            <thead><tr><th>User</th><th>Tenant</th><th>Role</th><th>Last active</th><th>Invoices issued</th><th>2FA</th><th>Status</th></tr></thead>
            <tbody>
                <?php if ($users): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><div class="cell-tenant"><div class="tenant-mark m1"><?= htmlspecialchars(strtoupper(substr($user['full_name'], 0, 2)), ENT_QUOTES, 'UTF-8') ?></div><div><strong><?= htmlspecialchars($user['full_name'], ENT_QUOTES, 'UTF-8') ?></strong><span><?= htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8') ?></span></div></div></td>
                            <td><?= htmlspecialchars($user['business_name'] ?: '—', ENT_QUOTES, 'UTF-8') ?></td>
                            <td><span class="badge <?= $user['role'] === 'admin' ? 'info' : 'neutral' ?>"><?= htmlspecialchars(ucfirst($user['role']), ENT_QUOTES, 'UTF-8') ?></span></td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td><span class="badge neutral">—</span></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="7" style="text-align:center">No user data available.</td></tr>
                <?php endif; ?>
            </tbody>
        </table></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
