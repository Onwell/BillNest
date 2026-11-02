<?php
$pageId = 'dunning';
$pageTitle = 'Reminders & dunning';
$pageSubtitle = 'Automated nudges to keep overdue invoices moving.';
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-dunning">
    <div class="panel">
        <div class="panel-head"><div><h2>Reminders & dunning queue</h2><p>Automated nudges for overdue invoices</p></div><button class="btn btn-primary btn-sm" onclick="alert('Run dunning (demo)');">Run now</button></div>
        <div class="tbl-wrap"><table class="tbl">
            <thead><tr><th>Invoice</th><th>Tenant</th><th>Days overdue</th><th>Amount</th><th>Reminders sent</th><th>Next</th></tr></thead>
            <tbody><tr><td colspan="6" style="text-align:center">No reminder data available.</td></tr></tbody>
        </table></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
