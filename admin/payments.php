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
            <tbody><tr><td colspan="7" style="text-align:center">No payment data available.</td></tr></tbody>
        </table></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
