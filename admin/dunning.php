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
            <tbody>
                <tr><td><strong>#INV-4818</strong></td><td>Kada Studio</td><td><strong style="color:var(--danger)">24 days</strong></td><td>$950</td><td>3</td><td>Escalation · Oct 27</td></tr>
                <tr><td><strong>#INV-4802</strong></td><td>Zambezi Foods</td><td><strong style="color:var(--danger)">18 days</strong></td><td>$2,180</td><td>2</td><td>Reminder · Oct 26</td></tr>
                <tr><td><strong>#INV-4798</strong></td><td>Kada Studio</td><td><strong style="color:var(--warning)">9 days</strong></td><td>$440</td><td>1</td><td>Reminder · Oct 28</td></tr>
                <tr><td><strong>#INV-4791</strong></td><td>Miterlian Co.</td><td><strong style="color:var(--warning)">6 days</strong></td><td>$1,200</td><td>1</td><td>Reminder · Oct 26</td></tr>
            </tbody>
        </table></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
