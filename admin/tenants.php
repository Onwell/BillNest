<?php
$pageId = 'tenants';
$pageTitle = 'Tenant directory';
$pageSubtitle = 'Every business using BillNest and their billing health.';
require_once dirname(__DIR__) . '/db.php';
$tenants = $conn->query("SELECT business_name, COUNT(*) AS user_count FROM users WHERE business_name IS NOT NULL AND TRIM(business_name) <> '' GROUP BY business_name ORDER BY business_name")->fetch_all(MYSQLI_ASSOC);
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-tenants">
    <div class="panel">
        <div class="panel-head"><div><h2>Tenant directory</h2><p>Every business using BillNest</p></div><div class="chips"><button class="chip active">All</button><button class="chip">Active</button><button class="chip">Trial</button><button class="chip">Suspended</button></div></div>
        <div class="tbl-wrap"><table class="tbl">
            <thead><tr><th>Tenant</th><th>Plan</th><th>Users</th><th>Invoices (30d)</th><th>MRR</th><th>Payment health</th><th>Status</th></tr></thead>
            <tbody>
                <?php if ($tenants): ?>
                    <?php foreach ($tenants as $tenant): ?>
                        <tr>
                            <td><div class="cell-tenant"><div class="tenant-mark m1"><?= htmlspecialchars(strtoupper(substr($tenant['business_name'], 0, 2)), ENT_QUOTES, 'UTF-8') ?></div><div><strong><?= htmlspecialchars($tenant['business_name'], ENT_QUOTES, 'UTF-8') ?></strong></div></div></td>
                            <td>—</td>
                            <td><?= (int) $tenant['user_count'] ?></td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                            <td>—</td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="7" style="text-align:center">No tenant data available.</td></tr>
                <?php endif; ?>
            </tbody>
        </table></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
