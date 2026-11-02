<?php
$pageId = "clients";
$pageTitle = "Clients";
$pageSubtitle = "Everyone you bill and their history.";
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-clients">
                <div class="panel">
                    <div class="panel-head">
                        <div><h2>Your clients</h2><p>Everyone you bill</p></div>
                        <div class="chips">
                            <button class="chip active">All</button>
                            <button class="chip">Paying</button>
                            <button class="chip">Overdue</button>
                            <button class="btn btn-primary btn-sm" onclick="alert('Add client (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg> Add client</button>
                        </div>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead><tr><th>Client</th><th>Email</th><th>Invoices</th><th>Outstanding</th><th>Lifetime paid</th><th>Status</th><th style="text-align:right">Actions</th></tr></thead>
                            <tbody>
                                <tr>
                                    <td><div class="cell-client"><div class="client-mark m1">NW</div><div><strong>Northwind Logistics</strong></div></div></td>
                                    <td>ap@northwind.io</td><td>12</td><td><strong>$0</strong></td><td>$18,940</td>
                                    <td><span class="badge ok"><span class="d"></span> Good</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act" title="New invoice" onclick="alert('New invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><div class="cell-client"><div class="client-mark m2">KS</div><div><strong>Kada Studio</strong></div></div></td>
                                    <td>billing@kada.studio</td><td>8</td><td><strong>$950</strong></td><td>$9,200</td>
                                    <td><span class="badge warn"><span class="d"></span> Overdue</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act" title="New invoice" onclick="alert('New invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><div class="cell-client"><div class="client-mark m5">AC</div><div><strong>Accra Consulting</strong></div></div></td>
                                    <td>ops@accraconsult.io</td><td>15</td><td><strong>$3,380</strong></td><td>$22,100</td>
                                    <td><span class="badge warn"><span class="d"></span> Overdue</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act" title="New invoice" onclick="alert('New invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><div class="cell-client"><div class="client-mark m4">MC</div><div><strong>Miterlian Co.</strong></div></div></td>
                                    <td>billing@miterlian.com</td><td>6</td><td><strong>$1,200</strong></td><td>$7,800</td>
                                    <td><span class="badge warn"><span class="d"></span> Overdue</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act" title="New invoice" onclick="alert('New invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><div class="cell-client"><div class="client-mark m3">ZF</div><div><strong>Zambezi Foods</strong></div></div></td>
                                    <td>ops@zambezi.co</td><td>4</td><td><strong>$0</strong></td><td>$3,100</td>
                                    <td><span class="badge ok"><span class="d"></span> Good</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act" title="New invoice" onclick="alert('New invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></button></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
