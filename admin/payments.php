<?php
$pageId = 'payments';
$pageTitle = 'Payments';
$pageSubtitle = 'Collected, pending, and failed transactions.';
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-payments">
    <div class="panel">
        <div class="panel-head"><div><h2>Recent payments</h2><p>All collected and failed transactions</p></div><button class="btn btn-outline btn-sm" onclick="alert('Reconcile (demo)');">Reconcile</button></div>
        <div class="tbl-wrap"><table class="tbl">
            <thead><tr><th>Transaction</th><th>Invoice</th><th>Tenant</th><th>Amount</th><th>Method</th><th>Status</th><th>Date</th></tr></thead>
            <tbody>
                <tr><td><strong>TXN-90211</strong></td><td>#INV-4821</td><td>Northwind Logistics</td><td><strong>$4,500</strong></td><td>Bank transfer</td><td><span class="badge ok"><span class="d"></span> Succeeded</span></td><td>Oct 14, 2026</td></tr>
                <tr><td><strong>TXN-90210</strong></td><td>#INV-4819</td><td>Boobab Capital</td><td><strong>$2,800</strong></td><td>Card · Stripe</td><td><span class="badge ok"><span class="d"></span> Succeeded</span></td><td>Oct 10, 2026</td></tr>
                <tr><td><strong>TXN-90209</strong></td><td>#INV-4817</td><td>Accra Consulting</td><td><strong>$7,320</strong></td><td>Bank transfer</td><td><span class="badge ok"><span class="d"></span> Succeeded</span></td><td>Oct 8, 2026</td></tr>
                <tr><td><strong>TXN-90208</strong></td><td>Subscription</td><td>Miterlian Co.</td><td><strong>$39</strong></td><td>Card · Stripe</td><td><span class="badge bad"><span class="d"></span> Failed</span></td><td>Oct 7, 2026</td></tr>
                <tr><td><strong>TXN-90207</strong></td><td>#INV-4815</td><td>Zambezi Foods</td><td><strong>$640</strong></td><td>Card · Stripe</td><td><span class="badge ok"><span class="d"></span> Succeeded</span></td><td>Oct 6, 2026</td></tr>
            </tbody>
        </table></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
