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
            <tbody>
                <tr><td><strong>#INV-4821</strong></td><td>Northwind Logistics</td><td>Kada Studio</td><td><strong>$4,500</strong></td><td>Oct 1</td><td>Oct 14</td><td><span class="badge ok"><span class="d"></span> Paid</span></td><td><button class="act" onclick="alert('View invoice (demo)');">View</button></td></tr>
                <tr><td><strong>#INV-4820</strong></td><td>Zambezi Foods</td><td>Accra Consulting</td><td><strong>$1,200</strong></td><td>Oct 5</td><td>Oct 20</td><td><span class="badge warn"><span class="d"></span> Pending</span></td><td><button class="act" onclick="alert('Reminder (demo)');">Remind</button></td></tr>
                <tr><td><strong>#INV-4819</strong></td><td>Boobab Capital</td><td>Miterlian Co.</td><td><strong>$2,800</strong></td><td>Sep 28</td><td>Oct 10</td><td><span class="badge ok"><span class="d"></span> Paid</span></td><td><button class="act" onclick="alert('View invoice (demo)');">View</button></td></tr>
                <tr><td><strong>#INV-4818</strong></td><td>Kada Studio</td><td>Northwind Logistics</td><td><strong>$950</strong></td><td>Sep 18</td><td>Oct 2</td><td><span class="badge bad"><span class="d"></span> Overdue</span></td><td><button class="act danger" onclick="alert('Escalated (demo)');">Escalate</button></td></tr>
                <tr><td><strong>#INV-4817</strong></td><td>Accra Consulting</td><td>Boobab Capital</td><td><strong>$7,320</strong></td><td>Sep 30</td><td>Oct 8</td><td><span class="badge ok"><span class="d"></span> Paid</span></td><td><button class="act" onclick="alert('View invoice (demo)');">View</button></td></tr>
                <tr><td><strong>#INV-4816</strong></td><td>Northwind Logistics</td><td>Zambezi Foods</td><td><strong>$3,100</strong></td><td>Draft</td><td>—</td><td><span class="badge neutral">Draft</span></td><td><button class="act" onclick="alert('View invoice (demo)');">View</button></td></tr>
            </tbody>
        </table></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
