<?php
$pageId = 'health';
$pageTitle = 'System health';
$pageSubtitle = 'Invoice-critical services and infrastructure load.';
require dirname(__DIR__) . '/db.php';
$userCount = (int) $conn->query('SELECT COUNT(*) AS user_count FROM users')->fetch_assoc()['user_count'];
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-health">
    <div class="grid-2">
        <div class="panel"><div class="panel-head"><div><h2>Service status</h2><p>Invoice-critical services</p></div></div><div class="panel-body"><div class="health-list">
            <div class="health-row"><div class="ind"></div><span class="lbl">Invoice generation API</span><span class="val">—</span></div>
            <div class="health-row"><div class="ind"></div><span class="lbl">PDF rendering service</span><span class="val">—</span></div>
            <div class="health-row"><div class="ind"></div><span class="lbl">Email delivery queue</span><span class="val">—</span></div>
            <div class="health-row"><div class="ind"></div><span class="lbl">Payment webhooks</span><span class="val">—</span></div>
            <div class="health-row"><div class="ind ok"></div><span class="lbl">Database cluster</span><span class="val">Connected · <?= $userCount ?> users</span></div>
            <div class="health-row"><div class="ind"></div><span class="lbl">Search index</span><span class="val">—</span></div>
            <div class="health-row"><div class="ind"></div><span class="lbl">Object storage (S3)</span><span class="val">—</span></div>
        </div></div></div>
        <div class="panel"><div class="panel-head"><div><h2>Resource usage</h2><p>Live load</p></div></div><div class="panel-body"><div class="rate-wrap">
            <div class="rate-row"><div class="rate-meta"><strong>CPU</strong><span>—</span></div><div class="track"><div class="fill" style="width:0%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>Memory</strong><span>—</span></div><div class="track"><div class="fill teal" style="width:0%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>Disk I/O</strong><span>—</span></div><div class="track"><div class="fill blue" style="width:0%"></div></div></div>
            <div class="rate-row"><div class="rate-meta"><strong>Network</strong><span>—</span></div><div class="track"><div class="fill amber" style="width:0%"></div></div></div>
        </div><p style="margin-top:22px">—</p><button class="btn btn-primary btn-sm" style="margin-top:14px;width:100%;" onclick="alert('Scale (demo)');">Scale email workers</button></div></div>
        </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
