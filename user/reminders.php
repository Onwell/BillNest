<?php
$pageId = "reminders";
$pageTitle = "Reminders";
$pageSubtitle = "Automated nudges to keep overdue invoices moving.";
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-reminders">
                <div class="panel">
                    <div class="panel-head">
                        <div><h2>Payment reminders</h2><p>Automated nudges keep your cash flow moving</p></div>
                        <button class="btn btn-primary btn-sm" onclick="alert('Send all reminders (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg> Send all</button>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead><tr><th>Invoice</th><th>Client</th><th>Days overdue</th><th>Amount</th><th>Reminders sent</th><th>Next</th><th style="text-align:right">Actions</th></tr></thead>
                            <tbody>
                                <tr>
                                    <td><strong>#INV-4818</strong></td><td>Kada Studio</td>
                                    <td><strong style="color:var(--danger)">24 days</strong></td><td>$950</td><td>3</td><td>Escalation · Oct 27</td>
                                    <td><div class="row-act"><button class="act" title="Send reminder" onclick="alert('Reminder sent (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4802</strong></td><td>Accra Consulting</td>
                                    <td><strong style="color:var(--danger)">18 days</strong></td><td>$2,180</td><td>2</td><td>Reminder · Oct 26</td>
                                    <td><div class="row-act"><button class="act" title="Send reminder" onclick="alert('Reminder sent (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4798</strong></td><td>Kada Studio</td>
                                    <td><strong style="color:var(--warning)">9 days</strong></td><td>$440</td><td>1</td><td>Reminder · Oct 28</td>
                                    <td><div class="row-act"><button class="act" title="Send reminder" onclick="alert('Reminder sent (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4791</strong></td><td>Miterlian Co.</td>
                                    <td><strong style="color:var(--warning)">6 days</strong></td><td>$1,200</td><td>1</td><td>Reminder · Oct 26</td>
                                    <td><div class="row-act"><button class="act" title="Send reminder" onclick="alert('Reminder sent (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg></button></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
