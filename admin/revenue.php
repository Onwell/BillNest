<?php
$pageId = 'revenue';
$pageTitle = 'Revenue & collections';
$pageSubtitle = 'Platform revenue, collection rates, and receivables aging.';
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-revenue">
    <div class="kpis">
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Platform MRR</span></div><div class="kpi-val">$182.4<small>K</small></div><div class="kpi-trend up">+5.7% <span>MoM</span></div></div>
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Collected (30d)</span></div><div class="kpi-val">$3.94<small>M</small></div><div class="kpi-sub">81.7% of invoiced value</div></div>
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Avg Days to Pay</span></div><div class="kpi-val">14.2<small>days</small></div><div class="kpi-trend up">-2.1 days <span>faster</span></div></div>
        <div class="kpi"><div class="kpi-top"><span class="kpi-label">Failed Payments</span></div><div class="kpi-val">37</div><div class="kpi-sub">$8,540 at risk</div></div>
    </div>
    <div class="grid-2">
        <div class="panel"><div class="panel-head"><div><h2>Collections by aging bucket</h2><p>Outstanding receivables</p></div></div><div class="panel-body"><div class="rate-wrap">
            <div class="rate-row"><div class="rate-meta"><strong>Current (not due)</strong><span>$6.12M</span></div><div class="track"><div class="fill teal" style="width:78%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>1–15 days overdue</strong><span>$892K</span></div><div class="track"><div class="fill" style="width:52%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>16–30 days overdue</strong><span>$418K</span></div><div class="track"><div class="fill amber" style="width:32%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>31–60 days overdue</strong><span>$214K</span></div><div class="track"><div class="fill red" style="width:18%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>60+ days overdue</strong><span>$98K</span></div><div class="track"><div class="fill red" style="width:8%"></div></div></div>
        </div></div></div>
        <div class="panel"><div class="panel-head"><div><h2>Top invoicing tenants</h2><p>By total invoice value (30d)</p></div></div><div class="panel-body"><div class="rate-wrap">
            <div class="rate-row"><div class="rate-meta"><strong>Northwind Logistics</strong><span>$1.21M</span></div><div class="track"><div class="fill" style="width:92%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>Accra Consulting</strong><span>$986K</span></div><div class="track"><div class="fill" style="width:75%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>Boobab Capital</strong><span>$742K</span></div><div class="track"><div class="fill teal" style="width:56%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>Zambezi Foods</strong><span>$418K</span></div><div class="track"><div class="fill blue" style="width:32%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>Kada Studio</strong><span>$128K</span></div><div class="track"><div class="fill purple" style="width:10%"></div></div></div>
        </div></div></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
