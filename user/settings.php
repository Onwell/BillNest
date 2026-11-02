<?php
$pageId = "settings";
$pageTitle = "Settings";
$pageSubtitle = "Your business profile and invoice defaults.";
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-settings">
                <div class="grid-2">
                    <div class="panel">
                        <div class="panel-head"><div><h2>Business profile</h2><p>How your invoices appear to clients</p></div></div>
                        <div class="panel-body">
                            <div class="health-list">
                                <div class="health-row" style="justify-content:space-between;">
                                    <div><span class="lbl" style="display:block">Business name</span><span style="font-size:0.78rem;color:var(--text-muted)">Zambezi Foods</span></div>
                                    <button class="btn btn-outline btn-sm" onclick="alert('Edit (demo)');">Edit</button>
                                </div>
                                <div class="health-row" style="justify-content:space-between;">
                                    <div><span class="lbl" style="display:block">Billing email</span><span style="font-size:0.78rem;color:var(--text-muted)">billing@zambezi.co</span></div>
                                    <button class="btn btn-outline btn-sm" onclick="alert('Edit (demo)');">Edit</button>
                                </div>
                                <div class="health-row" style="justify-content:space-between;">
                                    <div><span class="lbl" style="display:block">Default currency</span><span style="font-size:0.78rem;color:var(--text-muted)">USD ($)</span></div>
                                    <button class="btn btn-outline btn-sm" onclick="alert('Edit (demo)');">Edit</button>
                                </div>
                                <div class="health-row" style="justify-content:space-between;">
                                    <div><span class="lbl" style="display:block">Invoice logo</span><span style="font-size:0.78rem;color:var(--text-muted)">Uploaded</span></div>
                                    <button class="btn btn-outline btn-sm" onclick="alert('Edit (demo)');">Change</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-head"><div><h2>Invoice settings</h2><p>Defaults for new invoices</p></div></div>
                        <div class="panel-body">
                            <div class="health-list">
                                <div class="health-row" style="justify-content:space-between;">
                                    <div><span class="lbl" style="display:block">Default payment terms</span><span style="font-size:0.78rem;color:var(--text-muted)">Net 14</span></div>
                                    <button class="btn btn-outline btn-sm" onclick="alert('Edit (demo)');">Edit</button>
                                </div>
                                <div class="health-row" style="justify-content:space-between;">
                                    <div><span class="lbl" style="display:block">Automatic reminders</span><span style="font-size:0.78rem;color:var(--text-muted)">3 / 7 / 14 days</span></div>
                                    <span class="badge ok"><span class="d"></span> On</span>
                                </div>
                                <div class="health-row" style="justify-content:space-between;">
                                    <div><span class="lbl" style="display:block">Late fee</span><span style="font-size:0.78rem;color:var(--text-muted)">1.5% per month</span></div>
                                    <span class="badge ok"><span class="d"></span> On</span>
                                </div>
                                <div class="health-row" style="justify-content:space-between;">
                                    <div><span class="lbl" style="display:block">Tax rate</span><span style="font-size:0.78rem;color:var(--text-muted)">15% VAT</span></div>
                                    <button class="btn btn-outline btn-sm" onclick="alert('Edit (demo)');">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
