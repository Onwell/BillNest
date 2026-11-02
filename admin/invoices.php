<?php
$pageId = 'invoices';
$pageTitle = 'All invoices';
$pageSubtitle = 'Every invoice across every tenant in one place.';
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-invoices">
    <div class="panel">
        <div class="panel-head"><div><h2>All invoices</h2><p>Every invoice across every tenant</p></div><div class="chips"><button class="chip active">All</button><button class="chip">Paid</button><button class="chip">Pending</button><button class="chip">Overdue</button><button class="chip">Draft</button></div></div>
        <div class="tbl-wrap"><table class="tbl">
            <thead><tr><th>Invoice</th><th>Tenant</th><th>Client</th><th>Amount</th><th>Issued</th><th>Due</th><th>Status</th><th>Actions</th></tr></thead>
            <tbody><tr><td colspan="8" style="text-align:center">No invoice data available.</td></tr></tbody>
        </table></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
