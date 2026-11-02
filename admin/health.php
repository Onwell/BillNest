<?php
$pageId = 'health';
$pageTitle = 'System health';
$pageSubtitle = 'Invoice-critical services and infrastructure load.';
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-health">
    <div class="grid-2">
        <div class="panel"><div class="panel-head"><div><h2>Service status</h2><p>Invoice-critical services</p></div></div><div class="panel-body"><div class="health-list">
            <div class="health-row"><div class="ind ok"></div><span class="lbl">Invoice generation API</span><span class="val">42ms · healthy</span></div>
            <div class="health-row"><div class="ind ok"></div><span class="lbl">PDF rendering service</span><span class="val">128ms · healthy</span></div>
            <div class="health-row"><div class="ind warn"></div><span class="lbl">Email delivery queue</span><span class="val">1.2k backlog</span></div>
            <div class="health-row"><div class="ind ok"></div><span class="lbl">Payment webhooks</span><span class="val">100% success</span></div>
            <div class="health-row"><div class="ind ok"></div><span class="lbl">Database cluster</span><span class="val">99.99% uptime</span></div>
            <div class="health-row"><div class="ind warn"></div><span class="lbl">Search index</span><span class="val">lag 4s</span></div>
            <div class="health-row"><div class="ind ok"></div><span class="lbl">Object storage (S3)</span><span class="val">62% used</span></div>
        </div></div></div>
        <div class="panel"><div class="panel-head"><div><h2>Resource usage</h2><p>Live load</p></div></div><div class="panel-body"><div class="rate-wrap">
            <div class="rate-row"><div class="rate-meta"><strong>CPU</strong><span>38%</span></div><div class="track"><div class="fill" style="width:38%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>Memory</strong><span>62%</span></div><div class="track"><div class="fill teal" style="width:62%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>Disk I/O</strong><span>24%</span></div><div class="track"><div class="fill blue" style="width:24%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>Network</strong><span>47%</span></div><div class="track"><div class="fill amber" style="width:47%"></div></div></div>
        </div><p style="margin-top:22px">⚠ Email queue building up. Consider scaling email workers to avoid dunning delays.</p><button class="btn btn-primary btn-sm" style="margin-top:14px;width:100%;" onclick="alert('Scale (demo)');">Scale email workers</button></div></div>
        </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
