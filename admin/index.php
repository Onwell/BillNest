<?php
$pageId = 'overview';
$pageTitle = 'Command center';
$pageSubtitle = 'Live pulse of invoicing, payments, and tenant billing health.';
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-overview">
    <div class="kpis">
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Invoices Sent (30d)</span></div><div class="kpi-val">—</div></div>
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Invoice Value (30d)</span></div><div class="kpi-val">—</div></div>
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Collected (30d)</span></div><div class="kpi-val">—</div></div>
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Overdue Exposure</span></div><div class="kpi-val">—</div></div>
    </div>
    <div class="quick-grid">
        <button class="quick" onclick="alert('Bulk invoice import (demo)');"><strong>Bulk import invoices</strong><span>Upload CSV for any tenant</span></button>
        <button class="quick" onclick="alert('Trigger dunning run (demo)');"><strong>Trigger dunning run</strong><span>Send reminders to overdue invoices</span></button>
        <button class="quick" onclick="alert('Reconcile payments (demo)');"><strong>Reconcile payments</strong><span>Match bank feed to invoices</span></button>
        <button class="quick" onclick="alert('Export finance report (demo)');"><strong>Export finance report</strong><span>Month-end CSV snapshot</span></button>
    </div>
    <div class="chart-row">
        <div class="panel">
            <div class="panel-head"><div><h2>Invoices sent vs. paid</h2><p>Monthly volume · platform-wide</p></div><div class="chips"><button class="chip active">12M</button><button class="chip">6M</button><button class="chip">30D</button></div></div>
            <div class="panel-body"><div class="chart-area">
                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:0%"></div><div class="bar paid" style="height:0%"></div></div><span>Jan</span></div>
                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:0%"></div><div class="bar paid" style="height:0%"></div></div><span>Mar</span></div>
                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:0%"></div><div class="bar paid" style="height:0%"></div></div><span>May</span></div>
                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:0%"></div><div class="bar paid" style="height:0%"></div></div><span>Jul</span></div>
                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:0%"></div><div class="bar paid" style="height:0%"></div></div><span>Sep</span></div>
                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:0%"></div><div class="bar paid" style="height:0%"></div></div><span>Dec</span></div>
            </div><div class="legend"><div class="legend-item"><span class="swatch" style="background:var(--primary)"></span> Invoices sent</div><div class="legend-item"><span class="swatch" style="background:#7dd3c0"></span> Invoices paid</div></div></div>
        </div>
        <div class="panel">
            <div class="panel-head"><div><h2>Invoice status breakdown</h2><p>Current open book</p></div></div>
            <div class="panel-body"><div class="rate-wrap">
                <div class="rate-row"><div class="rate-meta"><strong>Paid</strong><span>—</span></div><div class="track"><div class="fill" style="width:0%"></div></div></div>
                <div class="rate-row"><div class="rate-meta"><strong>Pending</strong><span>—</span></div><div class="track"><div class="fill blue" style="width:0%"></div></div></div>
                <div class="rate-row"><div class="rate-meta"><strong>Overdue</strong><span>—</span></div><div class="track"><div class="fill amber" style="width:0%"></div></div></div>
                <div class="rate-row"><div class="rate-meta"><strong>Draft</strong><span>—</span></div><div class="track"><div class="fill teal" style="width:0%"></div></div></div>
            </div></div>
        </div>
    </div>
    <div class="grid-2-wide">
        <div class="panel"><div class="panel-head"><div><h2>Invoice activity stream</h2><p>Recent platform activity</p></div><a href="audit.php" class="link">View audit trail</a></div>
            <div class="panel-body"><div class="feed">
                <p>No activity available.</p>
            </div></div>
        </div>
        <div class="panel"><div class="panel-head"><div><h2>Top tenants</h2><p>Invoice value (30d)</p></div></div><div class="panel-body"><div class="rate-wrap">
            <p>No tenant data available.</p>
        </div></div></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
