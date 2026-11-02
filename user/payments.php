<?php
$pageId = "payments";
$pageTitle = "Payments";
$pageSubtitle = "Money collected, awaiting, and overdue.";
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-payments">
                <div class="kpis" style="grid-template-columns: repeat(3, 1fr);">
                    <div class="kpi">
                        <div class="kpi-top"><span class="kpi-label">Collected (30d)</span><div class="kpi-ico"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div></div>
                        <div class="kpi-val">$12,340</div>
                        <div class="kpi-sub">14 invoices paid</div>
                    </div>
                    <div class="kpi">
                        <div class="kpi-top"><span class="kpi-label">Awaiting payment</span><div class="kpi-ico warn"><svg class="icon icon-sm" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div></div>
                        <div class="kpi-val">$8,450</div>
                        <div class="kpi-sub">6 invoices</div>
                    </div>
                    <div class="kpi">
                        <div class="kpi-top"><span class="kpi-label">Overdue</span><div class="kpi-ico danger"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div></div>
                        <div class="kpi-val">$2,980</div>
                        <div class="kpi-sub">3 invoices past due</div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-head">
                        <div><h2>Recent payments</h2><p>Money received</p></div>
                        <button class="btn btn-outline btn-sm" onclick="alert('Record payment (demo)');">
                            <svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                            Record payment
                        </button>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead><tr><th>Payment</th><th>Invoice</th><th>Client</th><th>Amount</th><th>Method</th><th>Date</th></tr></thead>
                            <tbody>
                                <tr><td><strong>TXN-90211</strong></td><td>#INV-4821</td><td>Kada Studio</td><td><strong>$4,500</strong></td><td>Bank transfer</td><td>Oct 14, 2026</td></tr>
                                <tr><td><strong>TXN-90210</strong></td><td>#INV-4819</td><td>Miterlian Co.</td><td><strong>$2,800</strong></td><td>Card · Stripe</td><td>Oct 10, 2026</td></tr>
                                <tr><td><strong>TXN-90209</strong></td><td>#INV-4817</td><td>Northwind Logistics</td><td><strong>$7,320</strong></td><td>Bank transfer</td><td>Oct 8, 2026</td></tr>
                                <tr><td><strong>TXN-90207</strong></td><td>#INV-4815</td><td>Zambezi Foods</td><td><strong>$640</strong></td><td>Card · Stripe</td><td>Oct 6, 2026</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
