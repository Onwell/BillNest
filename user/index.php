<?php
$pageId = "dashboard";
$pageTitle = "Dashboard";
$pageSubtitle = "Welcome back, Grace. Here's your business at a glance.";
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-dashboard">

                <!-- Welcome banner -->
                <div class="welcome">
                    <div class="welcome-text">
                        <h2>Good morning, Grace 👋</h2>
                        <p>You have 3 overdue invoices worth $2,980 and 2 payments to record.</p>
                    </div>
                    <div class="welcome-actions">
                        <button class="btn" onclick="alert('New invoice (demo)');">
                            <svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                            Create invoice
                        </button>
                        <button class="btn btn-outline" onclick="alert('Record payment (demo)');">Record payment</button>
                    </div>
                </div>

                <!-- KPIs -->
                <div class="kpis">
                    <div class="kpi">
                        <div class="kpi-top">
                            <span class="kpi-label">Outstanding</span>
                            <div class="kpi-ico warn"><svg class="icon icon-sm" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                        </div>
                        <div class="kpi-val">$8,450</div>
                        <div class="kpi-sub">6 invoices awaiting payment</div>
                        <div class="kpi-trend down"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"/><polyline points="17 18 23 18 23 12"/></svg> $2,980 overdue</div>
                    </div>

                    <div class="kpi">
                        <div class="kpi-top">
                            <span class="kpi-label">Paid this month</span>
                            <div class="kpi-ico"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                        </div>
                        <div class="kpi-val">$12,340</div>
                        <div class="kpi-sub">14 invoices paid</div>
                        <div class="kpi-trend up"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg> +18% <span>vs last month</span></div>
                    </div>

                    <div class="kpi">
                        <div class="kpi-top">
                            <span class="kpi-label">Total clients</span>
                            <div class="kpi-ico info"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                        </div>
                        <div class="kpi-val">28</div>
                        <div class="kpi-sub">3 added this month</div>
                    </div>

                    <div class="kpi">
                        <div class="kpi-top">
                            <span class="kpi-label">Avg. days to pay</span>
                            <div class="kpi-ico"><svg class="icon icon-sm" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
                        </div>
                        <div class="kpi-val">9.4<small>days</small></div>
                        <div class="kpi-trend up"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg> -1.8 days <span>faster</span></div>
                    </div>
                </div>

                <!-- Quick actions -->
                <div class="quick-grid">
                    <button class="quick" onclick="alert('New invoice (demo)');">
                        <div class="quick-ico"><svg class="icon" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="12" y1="18" x2="12" y2="12"/><line x1="9" y1="15" x2="15" y2="15"/></svg></div>
                        <strong>Create invoice</strong>
                        <span>Send a new bill to a client</span>
                    </button>
                    <button class="quick" onclick="alert('Add client (demo)');">
                        <div class="quick-ico"><svg class="icon" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg></div>
                        <strong>Add client</strong>
                        <span>Store billing details once</span>
                    </button>
                    <button class="quick" onclick="alert('Record payment (demo)');">
                        <div class="quick-ico"><svg class="icon" viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg></div>
                        <strong>Record payment</strong>
                        <span>Mark an invoice as paid</span>
                    </button>
                    <button class="quick" onclick="alert('Send reminder (demo)');">
                        <div class="quick-ico"><svg class="icon" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg></div>
                        <strong>Send reminder</strong>
                        <span>Nudge overdue clients</span>
                    </button>
                </div>

                <!-- Charts -->
                <div class="chart-row">
                    <div class="panel">
                        <div class="panel-head">
                            <div>
                                <h2>Invoices sent vs. paid</h2>
                                <p>Your business · last 12 months</p>
                            </div>
                            <div class="chips">
                                <button class="chip active">12M</button>
                                <button class="chip">6M</button>
                                <button class="chip">30D</button>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="chart-area">
                                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:38%"></div><div class="bar paid" style="height:31%"></div></div><span>Jan</span></div>
                                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:45%"></div><div class="bar paid" style="height:36%"></div></div><span>Feb</span></div>
                                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:52%"></div><div class="bar paid" style="height:42%"></div></div><span>Mar</span></div>
                                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:48%"></div><div class="bar paid" style="height:39%"></div></div><span>Apr</span></div>
                                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:63%"></div><div class="bar paid" style="height:51%"></div></div><span>May</span></div>
                                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:58%"></div><div class="bar paid" style="height:48%"></div></div><span>Jun</span></div>
                                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:71%"></div><div class="bar paid" style="height:58%"></div></div><span>Jul</span></div>
                                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:66%"></div><div class="bar paid" style="height:55%"></div></div><span>Aug</span></div>
                                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:78%"></div><div class="bar paid" style="height:64%"></div></div><span>Sep</span></div>
                                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:74%"></div><div class="bar paid" style="height:62%"></div></div><span>Oct</span></div>
                                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:85%"></div><div class="bar paid" style="height:71%"></div></div><span>Nov</span></div>
                                <div class="chart-col"><div class="chart-bars"><div class="bar sent" style="height:92%"></div><div class="bar paid" style="height:79%"></div></div><span>Dec</span></div>
                            </div>
                            <div class="legend">
                                <div class="legend-item"><span class="swatch" style="background:var(--primary)"></span> Invoices sent</div>
                                <div class="legend-item"><span class="swatch" style="background:#7dd3c0"></span> Invoices paid</div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-head">
                            <div>
                                <h2>Invoice status</h2>
                                <p>Your open book</p>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="rate-wrap">
                                <div class="rate-row"><div class="rate-meta"><strong>Paid</strong><span>42 (61%)</span></div><div class="track"><div class="fill" style="width:61%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Pending</strong><span>16 (23%)</span></div><div class="track"><div class="fill blue" style="width:23%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Overdue</strong><span>6 (9%)</span></div><div class="track"><div class="fill amber" style="width:9%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Draft</strong><span>5 (7%)</span></div><div class="track"><div class="fill teal" style="width:7%"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom grid -->
                <div class="grid-2-wide">
                    <div class="panel">
                        <div class="panel-head">
                            <div>
                                <h2>Recent activity</h2>
                                <p>What's happened in your workspace</p>
                            </div>
                            <a href="#" class="link">View all <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                        </div>
                        <div class="panel-body">
                            <div class="feed">
                                <div class="feed-item">
                                    <div class="feed-ico ok"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                                    <div class="feed-body"><p><strong>Kada Studio</strong> paid invoice <strong>#INV-4821</strong> — $4,500</p><span class="feed-time">2 minutes ago</span></div>
                                </div>
                                <div class="feed-item">
                                    <div class="feed-ico info"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
                                    <div class="feed-body"><p>You sent invoice <strong>#INV-4820</strong> to Accra Consulting — $1,200</p><span class="feed-time">14 minutes ago</span></div>
                                </div>
                                <div class="feed-item">
                                    <div class="feed-ico warn"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg></div>
                                    <div class="feed-body"><p>Reminder sent for <strong>#INV-4798</strong> — 9 days overdue ($440)</p><span class="feed-time">38 minutes ago</span></div>
                                </div>
                                <div class="feed-item">
                                    <div class="feed-ico info"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/></svg></div>
                                    <div class="feed-body"><p>Added new client <strong>Kada Studio</strong></p><span class="feed-time">2 hours ago</span></div>
                                </div>
                                <div class="feed-item">
                                    <div class="feed-ico bad"><svg class="icon icon-sm" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg></div>
                                    <div class="feed-body"><p>Payment failed for <strong>#INV-4788</strong> — card declined</p><span class="feed-time">Yesterday</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-head">
                            <div>
                                <h2>Top overdue</h2>
                                <p>Chase these first</p>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="health-list">
                                <div class="health-row">
                                    <div class="ind bad"></div>
                                    <div style="flex:1">
                                        <span class="lbl" style="display:block;font-size:0.84rem;font-weight:600">#INV-4818 · Kada Studio</span>
                                        <span style="font-size:0.72rem;color:var(--text-muted)">24 days overdue · $950</span>
                                    </div>
                                </div>
                                <div class="health-row">
                                    <div class="ind bad"></div>
                                    <div style="flex:1">
                                        <span class="lbl" style="display:block;font-size:0.84rem;font-weight:600">#INV-4802 · Accra Consulting</span>
                                        <span style="font-size:0.72rem;color:var(--text-muted)">18 days overdue · $2,180</span>
                                    </div>
                                </div>
                                <div class="health-row">
                                    <div class="ind warn"></div>
                                    <div style="flex:1">
                                        <span class="lbl" style="display:block;font-size:0.84rem;font-weight:600">#INV-4798 · Kada Studio</span>
                                        <span style="font-size:0.72rem;color:var(--text-muted)">9 days overdue · $440</span>
                                    </div>
                                </div>
                                <div class="health-row">
                                    <div class="ind warn"></div>
                                    <div style="flex:1">
                                        <span class="lbl" style="display:block;font-size:0.84rem;font-weight:600">#INV-4791 · Miterlian Co.</span>
                                        <span style="font-size:0.72rem;color:var(--text-muted)">6 days overdue · $1,200</span>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-outline btn-sm" style="margin-top:16px;width:100%;" onclick="alert('Send all reminders (demo)');">
                                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg>
                                Send all reminders
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Recent invoices table -->
                <div class="panel">
                    <div class="panel-head">
                        <div>
                            <h2>Recent invoices</h2>
                            <p>Your latest activity</p>
                        </div>
                        <a href="invoices.php" class="link">View all invoices <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead>
                                <tr><th>Invoice</th><th>Client</th><th>Amount</th><th>Issued</th><th>Due</th><th>Status</th><th style="text-align:right">Actions</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>#INV-4821</strong></td>
                                    <td><div class="cell-client"><div class="client-mark m2">KS</div><div><strong>Kada Studio</strong><span>billing@kada.studio</span></div></div></td>
                                    <td><strong>$4,500</strong></td>
                                    <td>Oct 1</td>
                                    <td>Oct 14</td>
                                    <td><span class="badge ok"><span class="d"></span> Paid</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act" title="PDF" onclick="alert('Download PDF (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4820</strong></td>
                                    <td><div class="cell-client"><div class="client-mark m5">AC</div><div><strong>Accra Consulting</strong><span>ops@accraconsult.io</span></div></div></td>
                                    <td><strong>$1,200</strong></td>
                                    <td>Oct 5</td>
                                    <td>Oct 20</td>
                                    <td><span class="badge warn"><span class="d"></span> Pending</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act" title="Remind" onclick="alert('Reminder sent (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4819</strong></td>
                                    <td><div class="cell-client"><div class="client-mark m4">MC</div><div><strong>Miterlian Co.</strong><span>billing@miterlian.com</span></div></div></td>
                                    <td><strong>$2,800</strong></td>
                                    <td>Sep 28</td>
                                    <td>Oct 10</td>
                                    <td><span class="badge ok"><span class="d"></span> Paid</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4818</strong></td>
                                    <td><div class="cell-client"><div class="client-mark m2">KS</div><div><strong>Kada Studio</strong><span>billing@kada.studio</span></div></div></td>
                                    <td><strong>$950</strong></td>
                                    <td>Sep 18</td>
                                    <td>Oct 2</td>
                                    <td><span class="badge bad"><span class="d"></span> Overdue</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act danger" title="Escalate" onclick="alert('Escalated (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4817</strong></td>
                                    <td><div class="cell-client"><div class="client-mark m1">NW</div><div><strong>Northwind Logistics</strong><span>ap@northwind.io</span></div></div></td>
                                    <td><strong>$7,320</strong></td>
                                    <td>Sep 30</td>
                                    <td>Oct 8</td>
                                    <td><span class="badge ok"><span class="d"></span> Paid</span></td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
