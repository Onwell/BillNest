<?php
$pageId = 'overview';
$pageTitle = 'Command center';
$pageSubtitle = 'Live pulse of invoicing, payments, and tenant billing health.';
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-overview">
    <div class="kpis">
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Invoices Sent (30d)</span></div><div class="kpi-val">28,431</div><div class="kpi-trend up">+11.3% <span>vs prev 30d</span></div></div>
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Invoice Value (30d)</span></div><div class="kpi-val">$4.82<small>M</small></div><div class="kpi-trend up">+8.7% <span>vs prev 30d</span></div></div>
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Collected (30d)</span></div><div class="kpi-val">$3.94<small>M</small></div><div class="kpi-sub">81.7% collection rate</div></div>
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Overdue Exposure</span></div><div class="kpi-val">$612<small>K</small></div><div class="kpi-sub">1,247 invoices past due</div></div>
    </div>
    <div class="quick-grid">
        <button class="quick" onclick="alert('Bulk invoice import (demo)');"><strong>Bulk import invoices</strong><span>Upload CSV for any tenant</span></button>
        <button class="quick" onclick="alert('Trigger dunning run (demo)');"><strong>Trigger dunning run</strong><span>Send reminders to 37 past due</span></button>
        <button class="quick" onclick="alert('Reconcile payments (demo)');"><strong>Reconcile payments</strong><span>Match bank feed to invoices</span></button>
        <button class="quick" onclick="alert('Export finance report (demo)');"><strong>Export finance report</strong><span>Month-end CSV snapshot</span></button>
    </div>
    <div class="chart-row">
        <div class="panel">
            <div class="panel-head"><div><h2>Invoices sent vs. paid</h2><p>Monthly volume · platform-wide</p></div><div class="chips"><button class="chip active">12M</button><button class="chip">6M</button><button class="chip">30D</button></div></div>
            <div class="panel-body"><div class="chart-area">
                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:38%"></div><div class="bar paid" style="height:31%"></div></div><span>Jan</span></div>
                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:52%"></div><div class="bar paid" style="height:42%"></div></div><span>Mar</span></div>
                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:63%"></div><div class="bar paid" style="height:51%"></div></div><span>May</span></div>
                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:71%"></div><div class="bar paid" style="height:58%"></div></div><span>Jul</span></div>
                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:78%"></div><div class="bar paid" style="height:64%"></div></div><span>Sep</span></div>
                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:92%"></div><div class="bar paid" style="height:79%"></div></div><span>Dec</span></div>
            </div><div class="legend"><div class="legend-item"><span class="swatch" style="background:var(--primary)"></span> Invoices sent</div><div class="legend-item"><span class="swatch" style="background:#7dd3c0"></span> Invoices paid</div></div></div>
        </div>
        <div class="panel">
            <div class="panel-head"><div><h2>Invoice status breakdown</h2><p>Current open book</p></div></div>
            <div class="panel-body"><div class="rate-wrap">
                <div class="rate-row"><div class="rate-meta"><strong>Paid</strong><span>18,342 (65%)</span></div><div class="track"><div class="fill" style="width:65%"></div></div></div>
                <div class="rate-row"><div class="rate-meta"><strong>Pending</strong><span>6,120 (22%)</span></div><div class="track"><div class="fill blue" style="width:22%"></div></div></div>
                <div class="rate-row"><div class="rate-meta"><strong>Overdue</strong><span>2,241 (8%)</span></div><div class="track"><div class="fill amber" style="width:8%"></div></div></div>
                <div class="rate-row"><div class="rate-meta"><strong>Draft</strong><span>1,180 (4%)</span></div><div class="track"><div class="fill teal" style="width:4%"></div></div></div>
            </div></div>
        </div>
    </div>
    <div class="grid-2-wide">
        <div class="panel"><div class="panel-head"><div><h2>Invoice activity stream</h2><p>Recent platform activity</p></div><a href="audit.php" class="link">View audit trail</a></div>
            <div class="panel-body"><div class="feed">
                <div class="feed-item"><div class="feed-ico ok">✓</div><div class="feed-body"><p><strong>#INV-4821</strong> · $4,500 paid by Kada Studio to <strong>Northwind Logistics</strong></p><span class="feed-time">2 minutes ago · Stripe webhook</span></div></div>
                <div class="feed-item"><div class="feed-ico info">＋</div><div class="feed-body"><p><strong>Zambezi Foods</strong> sent invoice <strong>#INV-4820</strong> for $1,200</p><span class="feed-time">14 minutes ago</span></div></div>
                <div class="feed-item"><div class="feed-ico warn">!</div><div class="feed-body"><p>Reminder sent for <strong>#INV-4818</strong> ($950) — 24 days overdue</p><span class="feed-time">38 minutes ago</span></div></div>
            </div></div>
        </div>
        <div class="panel"><div class="panel-head"><div><h2>Top tenants</h2><p>Invoice value (30d)</p></div></div><div class="panel-body"><div class="rate-wrap">
            <div class="rate-row"><div class="rate-meta"><strong>Northwind Logistics</strong><span>$1.21M</span></div><div class="track"><div class="fill" style="width:92%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>Accra Consulting</strong><span>$986K</span></div><div class="track"><div class="fill blue" style="width:75%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>Zambezi Foods</strong><span>$418K</span></div><div class="track"><div class="fill teal" style="width:32%"></div></div></div>
        </div></div></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
