<?php
$pageId = 'users';
$pageTitle = 'Users & roles';
$pageSubtitle = 'All platform accounts and their permissions.';
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-users">
    <div class="panel">
        <div class="panel-head"><div><h2>Users & roles</h2><p>All accounts across the platform</p></div><div class="chips"><button class="chip active">All</button><button class="chip">Tenant admins</button><button class="chip">Members</button><button class="chip">Viewers</button><button class="chip">Platform admins</button></div></div>
        <div class="tbl-wrap"><table class="tbl">
            <thead><tr><th>User</th><th>Tenant</th><th>Role</th><th>Last active</th><th>Invoices issued</th><th>2FA</th><th>Status</th></tr></thead>
            <tbody>
                <tr><td><div class="cell-tenant"><div class="tenant-mark m1">AA</div><div><strong>Ade Adeyemi</strong><span>ade@northwind.io</span></div></div></td><td>Northwind Logistics</td><td><span class="badge info">Admin</span></td><td>2 min ago</td><td>128</td><td><span class="badge ok">On</span></td><td><span class="badge ok">Active</span></td></tr>
                <tr><td><div class="cell-tenant"><div class="tenant-mark m2">GP</div><div><strong>Grace Patel</strong><span>grace@kada.studio</span></div></div></td><td>Kada Studio</td><td><span class="badge info">Admin</span></td><td>1 hour ago</td><td>42</td><td><span class="badge warn">Off</span></td><td><span class="badge ok">Active</span></td></tr>
                <tr><td><div class="cell-tenant"><div class="tenant-mark m3">SO</div><div><strong>Sam Okafor</strong><span>sam@zambezi.co</span></div></div></td><td>Zambezi Foods</td><td><span class="badge neutral">Member</span></td><td>Yesterday</td><td>71</td><td><span class="badge ok">On</span></td><td><span class="badge warn">Past due</span></td></tr>
                <tr><td><div class="cell-tenant"><div class="tenant-mark m4">TN</div><div><strong>Tomasz Nowak</strong><span>tomasz@boobab.cap</span></div></div></td><td>Boobab Capital</td><td><span class="badge info">Admin</span></td><td>3 hours ago</td><td>156</td><td><span class="badge ok">On</span></td><td><span class="badge ok">Active</span></td></tr>
                <tr><td><div class="cell-tenant"><div class="tenant-mark m5">RK</div><div><strong>Rita Kimani</strong><span>rita@accraconsult.io</span></div></div></td><td>Accra Consulting</td><td><span class="badge neutral">Viewer</span></td><td>2 days ago</td><td>0</td><td><span class="badge ok">On</span></td><td><span class="badge ok">Active</span></td></tr>
            </tbody>
        </table></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
