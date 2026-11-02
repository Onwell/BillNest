<?php
$pageId = "products";
$pageTitle = "Products & services";
$pageSubtitle = "Reusable line items to speed up invoicing.";
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-products">
                <div class="panel">
                    <div class="panel-head">
                        <div><h2>Products & services</h2><p>Reusable line items to speed up invoicing</p></div>
                        <button class="btn btn-primary btn-sm" onclick="alert('Add product (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg> Add product</button>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead><tr><th>Product / service</th><th>Rate</th><th>Unit</th><th>Times invoiced</th><th>Revenue</th><th style="text-align:right">Actions</th></tr></thead>
                            <tbody>
                                <tr><td><strong>Monthly retainer</strong></td><td>$2,500</td><td>month</td><td>32</td><td>$80,000</td><td><div class="row-act"><button class="act" title="Edit" onclick="alert('Edit (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button></div></td></tr>
                                <tr><td><strong>Consulting hour</strong></td><td>$180</td><td>hour</td><td>114</td><td>$20,520</td><td><div class="row-act"><button class="act" title="Edit" onclick="alert('Edit (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button></div></td></tr>
                                <tr><td><strong>Design sprint</strong></td><td>$6,800</td><td>project</td><td>6</td><td>$40,800</td><td><div class="row-act"><button class="act" title="Edit" onclick="alert('Edit (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button></div></td></tr>
                                <tr><td><strong>Support package</strong></td><td>$450</td><td>month</td><td>58</td><td>$26,100</td><td><div class="row-act"><button class="act" title="Edit" onclick="alert('Edit (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg></button></div></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
