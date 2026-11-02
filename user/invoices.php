<?php
$pageId = "invoices";
$pageTitle = "Invoices";
$pageSubtitle = "Every invoice you have created, in one place.";
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-invoices">
                <div class="panel">
                    <div class="panel-head">
                        <div><h2>Your invoices</h2><p>Every invoice you've created</p></div>
                        <div class="chips">
                            <button class="chip active">All</button>
                            <button class="chip">Paid</button>
                            <button class="chip">Pending</button>
                            <button class="chip">Overdue</button>
                            <button class="chip">Draft</button>
                            <button class="btn btn-primary btn-sm" onclick="alert('New invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg> New invoice</button>
                        </div>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead>
                                <tr><th>Invoice</th><th>Client</th><th>Amount</th><th>Issued</th><th>Due</th><th>Status</th><th style="text-align:right">Actions</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>#INV-4821</strong></td>
                                    <td>Kada Studio</td><td><strong>$4,500</strong></td><td>Oct 1</td><td>Oct 14</td>
                                    <td><span class="badge ok"><span class="d"></span> Paid</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act" title="PDF" onclick="alert('PDF (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4820</strong></td>
                                    <td>Accra Consulting</td><td><strong>$1,200</strong></td><td>Oct 5</td><td>Oct 20</td>
                                    <td><span class="badge warn"><span class="d"></span> Pending</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act" title="Remind" onclick="alert('Reminder sent (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4819</strong></td>
                                    <td>Miterlian Co.</td><td><strong>$2,800</strong></td><td>Sep 28</td><td>Oct 10</td>
                                    <td><span class="badge ok"><span class="d"></span> Paid</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4818</strong></td>
                                    <td>Kada Studio</td><td><strong>$950</strong></td><td>Sep 18</td><td>Oct 2</td>
                                    <td><span class="badge bad"><span class="d"></span> Overdue</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act danger" title="Escalate" onclick="alert('Escalated (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4817</strong></td>
                                    <td>Northwind Logistics</td><td><strong>$7,320</strong></td><td>Sep 30</td><td>Oct 8</td>
                                    <td><span class="badge ok"><span class="d"></span> Paid</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4816</strong></td>
                                    <td>Zambezi Foods</td><td><strong>$3,100</strong></td><td>Draft</td><td>—</td>
                                    <td><span class="badge neutral"><span class="d"></span> Draft</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
