<?php
$pageId = 'revenue';
$pageTitle = 'Revenue & collections';
$pageSubtitle = 'Platform revenue, collection rates, and receivables aging.';
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-revenue">
    <div class="kpis">
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Platform MRR</span></div><div class="kpi-val">—</div></div>
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Collected (30d)</span></div><div class="kpi-val">—</div></div>
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Avg Days to Pay</span></div><div class="kpi-val">—</div></div>
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Failed Payments</span></div><div class="kpi-val">—</div></div>
    </div>
    <div class="grid-2">
        <div class="panel"><div class="panel-head"><div><h2>Collections by aging bucket</h2><p>Outstanding receivables</p></div></div><div class="panel-body"><div class="rate-wrap">
            <div class="rate-row"><div class="rate-meta"><strong>Current (not due)</strong><span>—</span></div><div class="track"><div class="fill teal" style="width:0%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>1–15 days overdue</strong><span>—</span></div><div class="track"><div class="fill" style="width:0%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>16–30 days overdue</strong><span>—</span></div><div class="track"><div class="fill amber" style="width:0%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>31–60 days overdue</strong><span>—</span></div><div class="track"><div class="fill red" style="width:0%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>60+ days overdue</strong><span>—</span></div><div class="track"><div class="fill red" style="width:0%"></div></div></div>
        </div></div></div>
        <div class="panel"><div class="panel-head"><div><h2>Top invoicing tenants</h2><p>By total invoice value (30d)</p></div></div><div class="panel-body"><div class="rate-wrap">
            <div class="rate-row"><div class="rate-meta"><strong>—</strong><span>—</span></div><div class="track"><div class="fill" style="width:0%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>—</strong><span>—</span></div><div class="track"><div class="fill" style="width:0%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>—</strong><span>—</span></div><div class="track"><div class="fill teal" style="width:0%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>—</strong><span>—</span></div><div class="track"><div class="fill blue" style="width:0%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>—</strong><span>—</span></div><div class="track"><div class="fill purple" style="width:0%"></div></div></div>
        </div></div></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
