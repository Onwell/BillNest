<?php
$pageId = 'audit';
$pageTitle = 'Audit trail';
$pageSubtitle = 'Immutable record of admin & system events.';
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-audit">
    <div class="panel">
        <div class="panel-head"><div><h2>Audit trail</h2><p>Every admin & system invoice-related event</p></div><button class="btn btn-outline btn-sm" onclick="alert('Export audit (demo)');">Export</button></div>
        <div class="panel-body"><div class="feed">
            <div class="feed-item"><div class="feed-ico ok">✓</div><div class="feed-body"><p><strong>Sarah Adeyemi</strong> escalated invoice <strong>#INV-4818</strong> to collections</p><span class="feed-time">Oct 26, 2026 · 14:32 UTC</span></div></div>
            <div class="feed-item"><div class="feed-ico warn">!</div><div class="feed-body"><p><strong>System</strong> suspended tenant <strong>Miterlian Co.</strong> for 3 failed payments</p><span class="feed-time">Oct 26, 2026 · 13:05 UTC</span></div></div>
            <div class="feed-item"><div class="feed-ico info">＋</div><div class="feed-body"><p><strong>Sarah Adeyemi</strong> bulk-imported 342 invoices for Northwind Logistics</p><span class="feed-time">Oct 26, 2026 · 12:44 UTC</span></div></div>
            <div class="feed-item"><div class="feed-ico info">＋</div><div class="feed-body"><p><strong>Sarah Adeyemi</strong> invited <strong>David Mensah</strong> as platform admin</p><span class="feed-time">Oct 25, 2026 · 09:18 UTC</span></div></div>
            <div class="feed-item"><div class="feed-ico neutral">⚙</div><div class="feed-body"><p>Dunning cadence updated to <strong>3 / 7 / 14 / 30 days</strong> by Sarah Adeyemi</p><span class="feed-time">Oct 24, 2026 · 16:42 UTC</span></div></div>
        </div></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
