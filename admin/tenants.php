<?php
$pageId = 'tenants';
$pageTitle = 'Tenant directory';
$pageSubtitle = 'Every business using BillNest and their billing health.';
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-tenants">
    <div class="panel">
        <div class="panel-head"><div><h2>Tenant directory</h2><p>Every business using BillNest</p></div><div class="chips"><button class="chip active">All</button><button class="chip">Active</button><button class="chip">Trial</button><button class="chip">Suspended</button></div></div>
        <div class="tbl-wrap"><table class="tbl">
            <thead><tr><th>Tenant</th><th>Plan</th><th>Users</th><th>Invoices (30d)</th><th>MRR</th><th>Payment health</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td><div class="cell-tenant"><div class="tenant-mark m1">NW</div><div><strong>Northwind Logistics</strong><span>northwind.io</span></div></div></td><td><span class="badge info">Business</span></td><td>24</td><td>312</td><td><strong>$936</strong></td><td><span class="badge ok">100%</span></td><td><span class="badge ok">Active</span></td></tr>
                <tr><td><div class="cell-tenant"><div class="tenant-mark m2">KS</div><div><strong>Kada Studio</strong><span>kada.studio</span></div></div></td><td><span class="badge neutral">Starter</span></td><td>3</td><td>18</td><td><strong>$0</strong></td><td><span class="badge ok">95%</span></td><td><span class="badge ok">Active</span></td></tr>
                <tr><td><div class="cell-tenant"><div class="tenant-mark m3">ZF</div><div><strong>Zambezi Foods</strong><span>zambezi.co</span></div></div></td><td><span class="badge info">Pro</span></td><td>12</td><td>96</td><td><strong>$228</strong></td><td><span class="badge warn">62%</span></td><td><span class="badge warn">Past due</span></td></tr>
                <tr><td><div class="cell-tenant"><div class="tenant-mark m4">BC</div><div><strong>Boobab Capital</strong><span>boobab.cap</span></div></div></td><td><span class="badge info">Pro</span></td><td>18</td><td>245</td><td><strong>$342</strong></td><td><span class="badge ok">98%</span></td><td><span class="badge ok">Active</span></td></tr>
                <tr><td><div class="cell-tenant"><div class="tenant-mark m5">MC</div><div><strong>Miterlian Co.</strong><span>miterlian.com</span></div></div></td><td><span class="badge neutral">Starter</span></td><td>2</td><td>4</td><td><strong>$0</strong></td><td><span class="badge bad">34%</span></td><td><span class="badge bad">Suspended</span></td></tr>
            </tbody>
        </table></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
