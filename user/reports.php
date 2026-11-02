<?php
$pageId = "reports";
$pageTitle = "Reports";
$pageSubtitle = "Revenue, clients, and business insights.";
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-reports">
                <div class="grid-2">
                    <div class="panel">
                        <div class="panel-head"><div><h2>Revenue by month</h2><p>What you've collected</p></div></div>
                        <div class="panel-body">
                            <div class="rate-wrap">
                                <div class="rate-row"><div class="rate-meta"><strong>October 2026</strong><span>$12,340</span></div><div class="track"><div class="fill" style="width:82%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>September 2026</strong><span>$10,420</span></div><div class="track"><div class="fill teal" style="width:69%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>August 2026</strong><span>$11,880</span></div><div class="track"><div class="fill blue" style="width:79%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>July 2026</strong><span>$9,760</span></div><div class="track"><div class="fill purple" style="width:65%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>June 2026</strong><span>$8,340</span></div><div class="track"><div class="fill amber" style="width:55%"></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-head"><div><h2>Top clients by revenue</h2><p>Lifetime value</p></div></div>
                        <div class="panel-body">
                            <div class="rate-wrap">
                                <div class="rate-row"><div class="rate-meta"><strong>Accra Consulting</strong><span>$22,100</span></div><div class="track"><div class="fill" style="width:92%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Northwind Logistics</strong><span>$18,940</span></div><div class="track"><div class="fill teal" style="width:79%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Kada Studio</strong><span>$9,200</span></div><div class="track"><div class="fill blue" style="width:38%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Miterlian Co.</strong><span>$7,800</span></div><div class="track"><div class="fill purple" style="width:32%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Zambezi Foods</strong><span>$3,100</span></div><div class="track"><div class="fill amber" style="width:13%"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
