<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BillNest · Super Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #0d5c4d;
            --primary-hover: #0a473b;
            --primary-soft: #e6f2ef;
            --primary-mid: #1a8a75;
            --bg-light: #f8f9fa;
            --bg-white: #ffffff;
            --bg-dark: #0f172a;
            --bg-dark-soft: #1e293b;
            --text: #111827;
            --text-muted: #6b7280;
            --text-dark: #e2e8f0;
            --text-dark-muted: #94a3b8;
            --border: #e5e7eb;
            --border-dark: #1e293b;
            --success: #10b981;
            --success-soft: #d1fae5;
            --warning: #f59e0b;
            --warning-soft: #fef3c7;
            --danger: #ef4444;
            --danger-soft: #fee2e2;
            --info: #3b82f6;
            --info-soft: #dbeafe;
            --purple: #8b5cf6;
            --purple-soft: #ede9fe;
            --font: 'Poppins', sans-serif;
            --radius: 12px;
            --sidebar-w: 252px;
            --t: 0.22s ease;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: var(--font);
            background: var(--bg-light);
            color: var(--text);
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }
        a { text-decoration: none; color: inherit; }
        ul { list-style: none; }
        button { font-family: inherit; }

        .icon { width: 20px; height: 20px; stroke: currentColor; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; fill: none; flex-shrink: 0; }
        .icon-sm { width: 16px; height: 16px; }
        .icon-lg { width: 24px; height: 24px; }

        /* =============== LAYOUT =============== */
        .layout { display: flex; min-height: 100vh; }

        /* =============== SIDEBAR =============== */
        .sidebar {
            width: var(--sidebar-w);
            background: var(--bg-dark);
            color: var(--text-dark);
            display: flex; flex-direction: column;
            position: fixed; inset: 0 auto 0 0;
            z-index: 50;
            transition: transform var(--t);
        }
        .brand {
            display: flex; align-items: center; gap: 10px;
            padding: 22px 22px;
            border-bottom: 1px solid var(--border-dark);
        }
        .brand-mark {
            width: 34px; height: 34px;
            background: var(--primary);
            border-radius: 9px;
            display: flex; align-items: center; justify-content: center;
            color: white;
        }
        .brand-text { line-height: 1.15; }
        .brand-text strong { font-weight: 800; font-size: 1.1rem; letter-spacing: -0.3px; display: block; }
        .brand-text small {
            font-size: 0.62rem; font-weight: 600; letter-spacing: 1.4px;
            color: var(--text-dark-muted); text-transform: uppercase;
        }

        .side-nav { flex: 1; padding: 18px 12px; overflow-y: auto; }
        .nav-label {
            font-size: 0.65rem; font-weight: 700; letter-spacing: 1.3px;
            text-transform: uppercase; color: var(--text-dark-muted);
            padding: 16px 12px 8px;
        }
        .nav-link {
            display: flex; align-items: center; gap: 11px;
            padding: 10px 12px; border-radius: 8px;
            font-size: 0.88rem; font-weight: 500;
            color: var(--text-dark-muted);
            margin-bottom: 2px; cursor: pointer;
            transition: all var(--t);
        }
        .nav-link:hover { background: var(--bg-dark-soft); color: var(--text-dark); }
        .nav-link.active {
            background: var(--primary); color: white; font-weight: 600;
            box-shadow: 0 4px 12px rgba(13,92,77,0.35);
        }
        .nav-link .pill {
            margin-left: auto; font-size: 0.62rem; font-weight: 700;
            padding: 2px 7px; border-radius: 10px;
            background: var(--danger); color: white;
        }
        .nav-link.active .pill { background: rgba(255,255,255,0.25); }

        .side-footer { padding: 14px; border-top: 1px solid var(--border-dark); }
        .admin-card {
            display: flex; align-items: center; gap: 10px;
            padding: 8px; border-radius: 10px; cursor: pointer;
            transition: background var(--t);
        }
        .admin-card:hover { background: var(--bg-dark-soft); }
        .admin-av {
            width: 36px; height: 36px; border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--primary-mid));
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; font-size: 0.8rem; color: white; flex-shrink: 0;
        }
        .admin-info { min-width: 0; }
        .admin-info strong { display: block; font-size: 0.83rem; font-weight: 600; color: var(--text-dark); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        .admin-info span { font-size: 0.7rem; color: var(--text-dark-muted); }

        /* =============== MAIN =============== */
        .main { flex: 1; margin-left: var(--sidebar-w); display: flex; flex-direction: column; min-width: 0; }

        /* =============== TOPBAR =============== */
        .topbar {
            height: 68px; background: var(--bg-white);
            border-bottom: 1px solid var(--border);
            display: flex; align-items: center; justify-content: space-between;
            padding: 0 28px; gap: 16px;
            position: sticky; top: 0; z-index: 40;
        }
        .topbar-l { display: flex; align-items: center; gap: 14px; min-width: 0; }
        .burger {
            display: none; background: none; border: none; cursor: pointer;
            padding: 8px; border-radius: 8px; color: var(--text);
        }
        .burger:hover { background: var(--bg-light); }
        .page-head h1 { font-size: 1.1rem; font-weight: 700; letter-spacing: -0.3px; }
        .page-head p { font-size: 0.76rem; color: var(--text-muted); }

        .search {
            flex: 1; max-width: 360px; position: relative;
        }
        .search .icon { position: absolute; left: 13px; top: 50%; transform: translateY(-50%); color: var(--text-muted); width: 16px; height: 16px; }
        .search input {
            width: 100%; padding: 9px 13px 9px 38px;
            border: 1.5px solid var(--border); border-radius: 9px;
            font-family: inherit; font-size: 0.85rem;
            background: var(--bg-light); outline: none; color: var(--text);
            transition: all var(--t);
        }
        .search input:focus { border-color: var(--primary); background: white; box-shadow: 0 0 0 3px rgba(13,92,77,0.08); }

        .topbar-r { display: flex; align-items: center; gap: 6px; }
        .icon-btn {
            position: relative; background: none; border: none;
            width: 38px; height: 38px; border-radius: 9px;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; color: var(--text-muted);
            transition: all var(--t);
        }
        .icon-btn:hover { background: var(--bg-light); color: var(--text); }
        .icon-btn .dot { position: absolute; top: 8px; right: 8px; width: 8px; height: 8px; background: var(--danger); border-radius: 50%; border: 2px solid white; }
        .env-badge {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 5px 11px; border-radius: 20px;
            background: var(--warning-soft); color: #92400e;
            font-size: 0.68rem; font-weight: 700; letter-spacing: 0.3px; text-transform: uppercase;
        }
        .env-badge .pulse { width: 6px; height: 6px; background: var(--warning); border-radius: 50%; animation: pulse 1.8s infinite; }
        @keyframes pulse { 0%{box-shadow:0 0 0 0 rgba(245,158,11,.5);} 70%{box-shadow:0 0 0 6px rgba(245,158,11,0);} 100%{box-shadow:0 0 0 0 rgba(245,158,11,0);} }

        /* =============== CONTENT =============== */
        .content { padding: 26px 28px; display: flex; flex-direction: column; gap: 22px; }
        .section { display: none; flex-direction: column; gap: 22px; }
        .section.active { display: flex; }

        /* =============== KPI =============== */
        .kpis { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
        .kpi {
            background: white; border: 1px solid var(--border);
            border-radius: var(--radius); padding: 20px;
            transition: all var(--t); position: relative; overflow: hidden;
        }
        .kpi:hover { transform: translateY(-2px); box-shadow: 0 10px 30px -10px rgba(0,0,0,0.1); border-color: var(--primary-soft); }
        .kpi-top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; }
        .kpi-label { font-size: 0.72rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.6px; }
        .kpi-ico {
            width: 36px; height: 36px; border-radius: 10px;
            background: var(--primary-soft); color: var(--primary);
            display: flex; align-items: center; justify-content: center;
        }
        .kpi-ico.warn { background: var(--warning-soft); color: #b45309; }
        .kpi-ico.info { background: var(--info-soft); color: #1e40af; }
        .kpi-ico.danger { background: var(--danger-soft); color: #991b1b; }
        .kpi-ico.purple { background: var(--purple-soft); color: #6d28d9; }
        .kpi-val { font-size: 1.85rem; font-weight: 800; letter-spacing: -0.9px; line-height: 1.05; }
        .kpi-val small { font-size: 0.85rem; font-weight: 600; color: var(--text-muted); letter-spacing: 0; margin-left: 2px; }
        .kpi-sub { font-size: 0.76rem; color: var(--text-muted); margin-top: 4px; }
        .kpi-trend { display: inline-flex; align-items: center; gap: 4px; font-size: 0.76rem; font-weight: 600; margin-top: 8px; }
        .kpi-trend.up { color: var(--success); }
        .kpi-trend.down { color: var(--danger); }
        .kpi-trend span { color: var(--text-muted); font-weight: 500; }

        /* =============== PANEL =============== */
        .panel {
            background: white; border: 1px solid var(--border);
            border-radius: var(--radius); overflow: hidden;
        }
        .panel-head {
            display: flex; align-items: center; justify-content: space-between;
            padding: 18px 22px; border-bottom: 1px solid var(--border);
            gap: 14px; flex-wrap: wrap;
        }
        .panel-head h2 { font-size: 0.98rem; font-weight: 700; letter-spacing: -0.2px; }
        .panel-head p { font-size: 0.76rem; color: var(--text-muted); margin-top: 2px; }
        .panel-body { padding: 22px; }
        .link {
            font-size: 0.78rem; font-weight: 600; color: var(--primary);
            display: inline-flex; align-items: center; gap: 4px;
            transition: gap var(--t);
        }
        .link:hover { gap: 8px; }

        /* =============== CHART AREA =============== */
        .chart-row { display: grid; grid-template-columns: 1.7fr 1fr; gap: 18px; }

        /* Bar chart with grouped bars */
        .chart-area { height: 200px; display: flex; align-items: flex-end; gap: 10px; padding-top: 8px; }
        .chart-col { flex: 1; display: flex; flex-direction: column; align-items: center; gap: 6px; height: 100%; justify-content: flex-end; }
        .chart-bars { display: flex; gap: 3px; align-items: flex-end; height: 100%; width: 100%; justify-content: center; }
        .bar { width: 11px; border-radius: 4px 4px 0 0; transition: height 0.6s cubic-bezier(0.16,1,0.3,1), opacity var(--t); }
        .bar.sent { background: linear-gradient(180deg, var(--primary), var(--primary-mid)); }
        .bar.paid { background: linear-gradient(180deg, #7dd3c0, #b8e6dc); }
        .chart-col:hover .bar { opacity: 0.85; }
        .chart-col > span { font-size: 0.62rem; font-weight: 600; color: var(--text-muted); }
        .legend { display: flex; gap: 18px; margin-top: 14px; padding-top: 14px; border-top: 1px solid var(--border); flex-wrap: wrap; }
        .legend-item { display: flex; align-items: center; gap: 7px; font-size: 0.76rem; color: var(--text-muted); font-weight: 500; }
        .swatch { width: 10px; height: 10px; border-radius: 3px; }

        /* Collection rate / donut-ish */
        .rate-wrap { display: flex; flex-direction: column; gap: 14px; }
        .rate-row { display: flex; flex-direction: column; gap: 6px; }
        .rate-meta { display: flex; justify-content: space-between; align-items: baseline; font-size: 0.83rem; }
        .rate-meta strong { font-weight: 600; }
        .rate-meta span { font-size: 0.78rem; color: var(--text-muted); }
        .track { height: 8px; background: var(--bg-light); border-radius: 6px; overflow: hidden; }
        .fill { height: 100%; border-radius: 6px; background: var(--primary); transition: width 0.8s cubic-bezier(0.16,1,0.3,1); }
        .fill.teal { background: #7dd3c0; }
        .fill.amber { background: var(--warning); }
        .fill.blue { background: var(--info); }
        .fill.red { background: var(--danger); }
        .fill.purple { background: var(--purple); }

        /* =============== TABLE =============== */
        .tbl-wrap { overflow-x: auto; }
        table.tbl { width: 100%; border-collapse: collapse; font-size: 0.83rem; min-width: 700px; }
        .tbl thead th {
            text-align: left; padding: 11px 22px;
            background: var(--bg-light); color: var(--text-muted);
            font-size: 0.68rem; font-weight: 700; text-transform: uppercase;
            letter-spacing: 0.6px; border-bottom: 1px solid var(--border);
            white-space: nowrap;
        }
        .tbl tbody td { padding: 14px 22px; border-bottom: 1px solid var(--border); vertical-align: middle; }
        .tbl tbody tr { transition: background var(--t); }
        .tbl tbody tr:hover { background: #fafbfc; }
        .tbl tbody tr:last-child td { border-bottom: none; }

        .cell-tenant { display: flex; align-items: center; gap: 11px; }
        .tenant-mark {
            width: 34px; height: 34px; border-radius: 9px;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; font-size: 0.74rem; color: white; flex-shrink: 0;
        }
        .m1 { background: linear-gradient(135deg,#0d5c4d,#1a8a75); }
        .m2 { background: linear-gradient(135deg,#3b82f6,#6366f1); }
        .m3 { background: linear-gradient(135deg,#f59e0b,#ef4444); }
        .m4 { background: linear-gradient(135deg,#8b5cf6,#d946ef); }
        .m5 { background: linear-gradient(135deg,#10b981,#059669); }
        .cell-tenant strong { display: block; font-weight: 600; font-size: 0.86rem; }
        .cell-tenant span { font-size: 0.72rem; color: var(--text-muted); }

        .badge {
            display: inline-flex; align-items: center; gap: 5px;
            padding: 3px 9px; border-radius: 20px;
            font-size: 0.7rem; font-weight: 600; white-space: nowrap;
        }
        .badge .d { width: 6px; height: 6px; border-radius: 50%; }
        .badge.ok { background: var(--success-soft); color: #065f46; }
        .badge.ok .d { background: var(--success); }
        .badge.warn { background: var(--warning-soft); color: #92400e; }
        .badge.warn .d { background: var(--warning); }
        .badge.bad { background: var(--danger-soft); color: #991b1b; }
        .badge.bad .d { background: var(--danger); }
        .badge.info { background: var(--info-soft); color: #1e40af; }
        .badge.info .d { background: var(--info); }
        .badge.neutral { background: var(--bg-light); color: var(--text-muted); }
        .badge.neutral .d { background: var(--text-muted); }

        .row-act { display: flex; gap: 5px; justify-content: flex-end; }
        .act {
            background: none; border: 1px solid var(--border);
            width: 30px; height: 30px; border-radius: 7px;
            display: flex; align-items: center; justify-content: center;
            cursor: pointer; color: var(--text-muted);
            transition: all var(--t);
        }
        .act:hover { background: var(--primary-soft); border-color: var(--primary); color: var(--primary); }
        .act.danger:hover { background: var(--danger-soft); border-color: var(--danger); color: var(--danger); }

        /* =============== ACTIVITY FEED =============== */
        .feed { display: flex; flex-direction: column; }
        .feed-item { display: flex; gap: 12px; padding: 13px 0; border-bottom: 1px solid var(--border); }
        .feed-item:first-child { padding-top: 0; }
        .feed-item:last-child { border-bottom: none; padding-bottom: 0; }
        .feed-ico {
            width: 32px; height: 32px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center; flex-shrink: 0;
        }
        .feed-ico.ok { background: var(--success-soft); color: #065f46; }
        .feed-ico.warn { background: var(--warning-soft); color: #b45309; }
        .feed-ico.info { background: var(--info-soft); color: #1e40af; }
        .feed-ico.bad { background: var(--danger-soft); color: #991b1b; }
        .feed-ico.neutral { background: var(--bg-light); color: var(--text-muted); }
        .feed-body { flex: 1; min-width: 0; }
        .feed-body p { font-size: 0.83rem; line-height: 1.45; }
        .feed-body p strong { font-weight: 600; }
        .feed-time { font-size: 0.7rem; color: var(--text-muted); margin-top: 2px; display: block; }

        /* =============== HEALTH =============== */
        .health-list { display: flex; flex-direction: column; gap: 14px; }
        .health-row { display: flex; align-items: center; gap: 12px; }
        .ind { width: 10px; height: 10px; border-radius: 50%; flex-shrink: 0; }
        .ind.ok { background: var(--success); box-shadow: 0 0 0 4px rgba(16,185,129,0.15); }
        .ind.warn { background: var(--warning); box-shadow: 0 0 0 4px rgba(245,158,11,0.15); }
        .ind.bad { background: var(--danger); box-shadow: 0 0 0 4px rgba(239,68,68,0.15); }
        .health-row .lbl { flex: 1; font-size: 0.84rem; font-weight: 500; }
        .health-row .val { font-size: 0.78rem; color: var(--text-muted); font-weight: 600; }

        /* =============== QUICK ACTIONS =============== */
        .quick-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px; }
        .quick {
            background: white; border: 1.5px dashed var(--border);
            border-radius: var(--radius); padding: 18px;
            display: flex; flex-direction: column; gap: 9px;
            cursor: pointer; transition: all var(--t); text-align: left;
        }
        .quick:hover { border-color: var(--primary); background: #fbfdfc; transform: translateY(-2px); }
        .quick-ico {
            width: 38px; height: 38px; border-radius: 10px;
            background: var(--primary-soft); color: var(--primary);
            display: flex; align-items: center; justify-content: center;
        }
        .quick strong { font-size: 0.88rem; font-weight: 600; }
        .quick span { font-size: 0.75rem; color: var(--text-muted); }

        /* =============== BUTTONS =============== */
        .btn {
            display: inline-flex; align-items: center; justify-content: center;
            gap: 7px; padding: 9px 16px; border-radius: 9px;
            font-weight: 600; font-size: 0.82rem; cursor: pointer;
            transition: all var(--t); border: none; font-family: inherit; white-space: nowrap;
        }
        .btn-primary { background: var(--primary); color: white; }
        .btn-primary:hover { background: var(--primary-hover); transform: translateY(-1px); box-shadow: 0 6px 16px rgba(13,92,77,0.25); }
        .btn-outline { background: transparent; border: 1.5px solid var(--border); color: var(--text); }
        .btn-outline:hover { background: var(--bg-light); border-color: #d1d5db; }
        .btn-sm { padding: 7px 13px; font-size: 0.78rem; }

        /* =============== CHIPS =============== */
        .chips { display: flex; gap: 8px; flex-wrap: wrap; align-items: center; }
        .chip {
            padding: 5px 13px; border-radius: 20px;
            border: 1.5px solid var(--border); background: transparent;
            font-size: 0.75rem; font-weight: 600; color: var(--text-muted);
            cursor: pointer; transition: all var(--t); font-family: inherit;
        }
        .chip:hover { border-color: #d1d5db; color: var(--text); }
        .chip.active { background: var(--primary); border-color: var(--primary); color: white; }

        /* =============== GRID HELPERS =============== */
        .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; }
        .grid-2-wide { display: grid; grid-template-columns: 1.7fr 1fr; gap: 18px; }

        /* =============== OVERLAY =============== */
        .sb-overlay {
            display: none; position: fixed; inset: 0;
            background: rgba(0,0,0,0.4); z-index: 45; opacity: 0;
            transition: opacity var(--t);
        }
        .sb-overlay.show { display: block; opacity: 1; }

        /* =============== RESPONSIVE =============== */
        @media (max-width: 1200px) {
            .kpis { grid-template-columns: repeat(2, 1fr); }
            .quick-grid { grid-template-columns: repeat(2, 1fr); }
            .chart-row { grid-template-columns: 1fr; }
            .grid-2-wide { grid-template-columns: 1fr; }
        }
        @media (max-width: 992px) {
            .sidebar { transform: translateX(-100%); }
            .sidebar.open { transform: translateX(0); }
            .main { margin-left: 0; }
            .burger { display: flex; }
            .topbar { padding: 0 18px; }
            .content { padding: 20px 18px; }
            .search { display: none; }
        }
        @media (max-width: 768px) {
            .kpis { grid-template-columns: 1fr; }
            .grid-2 { grid-template-columns: 1fr; }
            .quick-grid { grid-template-columns: 1fr; }
            .page-head p { display: none; }
            .content { padding: 18px 14px; }
            .panel-head { padding: 14px 16px; }
            .panel-body { padding: 16px; }
            .tbl thead th, .tbl tbody td { padding: 11px 14px; }
        }
    </style>
</head>
<body>

<div class="layout">

    <!-- ============ SIDEBAR ============ -->
    <aside class="sidebar" id="sidebar">
        <div class="brand">
            <div class="brand-mark">
                <svg class="icon" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            </div>
            <div class="brand-text">
                <strong>BillNest</strong>
                <small>Super Admin</small>
            </div>
        </div>

        <nav class="side-nav" id="sideNav">
            <div class="nav-label">Overview</div>
            <a class="nav-link active" data-sec="overview">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                Command Center
            </a>
            <a class="nav-link" data-sec="revenue">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                Revenue & Collections
            </a>

            <div class="nav-label">Invoice Ops</div>
            <a class="nav-link" data-sec="invoices">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                All Invoices
            </a>
            <a class="nav-link" data-sec="payments">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                Payments
            </a>
            <a class="nav-link" data-sec="dunning">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                Reminders & Dunning
                <span class="pill">37</span>
            </a>

            <div class="nav-label">Tenants</div>
            <a class="nav-link" data-sec="tenants">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M3 21h18M5 21V7l7-4 7 4v14"/></svg>
                Tenant Directory
            </a>
            <a class="nav-link" data-sec="users">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                Users & Roles
            </a>

            <div class="nav-label">Platform</div>
            <a class="nav-link" data-sec="health">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                System Health
            </a>
            <a class="nav-link" data-sec="audit">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                Audit Trail
            </a>
        </nav>

        <div class="side-footer">
            <div class="admin-card">
                <div class="admin-av">SA</div>
                <div class="admin-info">
                    <strong>Sarah Adeyemi</strong>
                    <span>Super Admin</span>
                </div>
            </div>
        </div>
    </aside>

    <div class="sb-overlay" id="sbOverlay"></div>

    <!-- ============ MAIN ============ -->
    <div class="main">

        <!-- TOPBAR -->
        <header class="topbar">
            <div class="topbar-l">
                <button class="burger" id="burger" aria-label="Menu">
                    <svg class="icon" viewBox="0 0 24 24"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                </button>
                <div class="page-head">
                    <h1 id="pgTitle">Command center</h1>
                    <p id="pgSub">Live pulse of invoicing, payments, and tenant billing health.</p>
                </div>
            </div>

            <div class="search">
                <svg class="icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                <input type="text" placeholder="Search invoices, tenants, invoice #…" aria-label="Search">
            </div>

            <div class="topbar-r">
                <div class="env-badge"><span class="pulse"></span> Production</div>
                <button class="icon-btn" aria-label="Alerts">
                    <svg class="icon" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    <span class="dot"></span>
                </button>
                <button class="icon-btn" aria-label="Help">
                    <svg class="icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                </button>
            </div>
        </header>

        <!-- CONTENT -->
        <main class="content">

            <!-- ==================== OVERVIEW / COMMAND CENTER ==================== -->
            <section class="section active" id="sec-overview">

                <!-- KPIs -->
                <div class="kpis">
                    <div class="kpi">
                        <div class="kpi-top">
                            <span class="kpi-label">Invoices Sent (30d)</span>
                            <div class="kpi-ico"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
                        </div>
                        <div class="kpi-val">28,431</div>
                        <div class="kpi-trend up"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg> +11.3% <span>vs prev 30d</span></div>
                    </div>

                    <div class="kpi">
                        <div class="kpi-top">
                            <span class="kpi-label">Invoice Value (30d)</span>
                            <div class="kpi-ico info"><svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div>
                        </div>
                        <div class="kpi-val">$4.82<small>M</small></div>
                        <div class="kpi-trend up"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg> +8.7% <span>vs prev 30d</span></div>
                    </div>

                    <div class="kpi">
                        <div class="kpi-top">
                            <span class="kpi-label">Collected (30d)</span>
                            <div class="kpi-ico"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                        </div>
                        <div class="kpi-val">$3.94<small>M</small></div>
                        <div class="kpi-sub">81.7% collection rate</div>
                        <div class="kpi-trend up"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg> +2.1 pts</div>
                    </div>

                    <div class="kpi">
                        <div class="kpi-top">
                            <span class="kpi-label">Overdue Exposure</span>
                            <div class="kpi-ico danger"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
                        </div>
                        <div class="kpi-val">$612<small>K</small></div>
                        <div class="kpi-sub">1,247 invoices past due</div>
                        <div class="kpi-trend down"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"/><polyline points="17 18 23 18 23 12"/></svg> -4.3% <span>vs prev 30d</span></div>
                    </div>
                </div>

                <!-- Quick actions -->
                <div class="quick-grid">
                    <button class="quick" onclick="alert('Bulk invoice import (demo)');">
                        <div class="quick-ico"><svg class="icon" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg></div>
                        <strong>Bulk import invoices</strong>
                        <span>Upload CSV for any tenant</span>
                    </button>
                    <button class="quick" onclick="alert('Trigger dunning run (demo)');">
                        <div class="quick-ico"><svg class="icon" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg></div>
                        <strong>Trigger dunning run</strong>
                        <span>Send reminders to 37 past due</span>
                    </button>
                    <button class="quick" onclick="alert('Reconcile payments (demo)');">
                        <div class="quick-ico"><svg class="icon" viewBox="0 0 24 24"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg></div>
                        <strong>Reconcile payments</strong>
                        <span>Match bank feed to invoices</span>
                    </button>
                    <button class="quick" onclick="alert('Export finance report (demo)');">
                        <div class="quick-ico"><svg class="icon" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg></div>
                        <strong>Export finance report</strong>
                        <span>Month-end CSV snapshot</span>
                    </button>
                </div>

                <!-- Charts row -->
                <div class="chart-row">
                    <div class="panel">
                        <div class="panel-head">
                            <div>
                                <h2>Invoices sent vs. paid</h2>
                                <p>Monthly volume · platform-wide</p>
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
                                <h2>Invoice status breakdown</h2>
                                <p>Current open book</p>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="rate-wrap">
                                <div class="rate-row">
                                    <div class="rate-meta"><strong>Paid</strong><span>18,342 (65%)</span></div>
                                    <div class="track"><div class="fill" style="width:65%"></div></div>
                                </div>
                                <div class="rate-row">
                                    <div class="rate-meta"><strong>Pending (not due)</strong><span>6,120 (22%)</span></div>
                                    <div class="track"><div class="fill blue" style="width:22%"></div></div>
                                </div>
                                <div class="rate-row">
                                    <div class="rate-meta"><strong>Overdue</strong><span>2,241 (8%)</span></div>
                                    <div class="track"><div class="fill amber" style="width:8%"></div></div>
                                </div>
                                <div class="rate-row">
                                    <div class="rate-meta"><strong>Draft</strong><span>1,180 (4%)</span></div>
                                    <div class="track"><div class="fill teal" style="width:4%"></div></div>
                                </div>
                                <div class="rate-row">
                                    <div class="rate-meta"><strong>Disputed</strong><span>282 (1%)</span></div>
                                    <div class="track"><div class="fill red" style="width:1%"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom grid: activity + tenant billing health -->
                <div class="grid-2-wide">
                    <div class="panel">
                        <div class="panel-head">
                            <div>
                                <h2>Invoice activity stream</h2>
                                <p>Real-time events across all tenants</p>
                            </div>
                            <a href="#" class="link">View audit trail <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                        </div>
                        <div class="panel-body">
                            <div class="feed">
                                <div class="feed-item">
                                    <div class="feed-ico ok"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
                                    <div class="feed-body">
                                        <p><strong>#INV-4821</strong> · $4,500 paid by Kada Studio to <strong>Northwind Logistics</strong></p>
                                        <span class="feed-time">2 minutes ago · Stripe webhook</span>
                                    </div>
                                </div>
                                <div class="feed-item">
                                    <div class="feed-ico info"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg></div>
                                    <div class="feed-body">
                                        <p><strong>Zambezi Foods</strong> sent invoice <strong>#INV-4820</strong> for $1,200 to Accra Consulting</p>
                                        <span class="feed-time">14 minutes ago</span>
                                    </div>
                                </div>
                                <div class="feed-item">
                                    <div class="feed-ico warn"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
                                    <div class="feed-body">
                                        <p>Reminder sent for <strong>#INV-4818</strong> ($950) — 24 days overdue to Northwind Logistics</p>
                                        <span class="feed-time">38 minutes ago · dunning rule #3</span>
                                    </div>
                                </div>
                                <div class="feed-item">
                                    <div class="feed-ico bad"><svg class="icon icon-sm" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg></div>
                                    <div class="feed-body">
                                        <p>Payment failed for <strong>Miterlian Co.</strong> subscription — card declined ($39 Business)</p>
                                        <span class="feed-time">1 hour ago · Stripe</span>
                                    </div>
                                </div>
                                <div class="feed-item">
                                    <div class="feed-ico info"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
                                    <div class="feed-body">
                                        <p><strong>Boobab Capital</strong> invited a new client and issued 12 invoices this week</p>
                                        <span class="feed-time">3 hours ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-head">
                            <div>
                                <h2>Tenant billing health</h2>
                                <p>Payment reliability</p>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="health-list">
                                <div class="health-row">
                                    <div class="ind ok"></div>
                                    <span class="lbl">Northwind Logistics</span>
                                    <span class="val">100% on time</span>
                                </div>
                                <div class="health-row">
                                    <div class="ind ok"></div>
                                    <span class="lbl">Kada Studio</span>
                                    <span class="val">95% on time</span>
                                </div>
                                <div class="health-row">
                                    <div class="ind warn"></div>
                                    <span class="lbl">Zambezi Foods</span>
                                    <span class="val">62% · 1 past due</span>
                                </div>
                                <div class="health-row">
                                    <div class="ind ok"></div>
                                    <span class="lbl">Boobab Capital</span>
                                    <span class="val">98% on time</span>
                                </div>
                                <div class="health-row">
                                    <div class="ind bad"></div>
                                    <span class="lbl">Miterlian Co.</span>
                                    <span class="val">34% · 3 failed</span>
                                </div>
                                <div class="health-row">
                                    <div class="ind ok"></div>
                                    <span class="lbl">Accra Consulting</span>
                                    <span class="val">99% on time</span>
                                </div>
                            </div>
                            <button class="btn btn-outline btn-sm" style="margin-top: 16px; width: 100%;" onclick="alert('Open full tenant billing report (demo)');">
                                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                Full tenant billing report
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Recent invoices table -->
                <div class="panel">
                    <div class="panel-head">
                        <div>
                            <h2>Latest invoices across the platform</h2>
                            <p>Most recently issued or updated</p>
                        </div>
                        <a href="#" class="link" data-goto="invoices">View all invoices <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Tenant</th>
                                    <th>Client</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Due date</th>
                                    <th style="text-align:right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>#INV-4821</strong></td>
                                    <td><div class="cell-tenant"><div class="tenant-mark m1">NW</div><div><strong>Northwind Logistics</strong><span>Business</span></div></div></td>
                                    <td>Kada Studio</td>
                                    <td><strong>$4,500</strong></td>
                                    <td><span class="badge ok"><span class="d"></span> Paid</span></td>
                                    <td>Oct 14, 2026</td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act" title="Download PDF" onclick="alert('Download PDF (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4820</strong></td>
                                    <td><div class="cell-tenant"><div class="tenant-mark m3">ZF</div><div><strong>Zambezi Foods</strong><span>Pro</span></div></div></td>
                                    <td>Accra Consulting</td>
                                    <td><strong>$1,200</strong></td>
                                    <td><span class="badge warn"><span class="d"></span> Pending</span></td>
                                    <td>Oct 20, 2026</td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act" title="Send reminder" onclick="alert('Send reminder (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4819</strong></td>
                                    <td><div class="cell-tenant"><div class="tenant-mark m4">BC</div><div><strong>Boobab Capital</strong><span>Pro</span></div></div></td>
                                    <td>Miterlian Co.</td>
                                    <td><strong>$2,800</strong></td>
                                    <td><span class="badge ok"><span class="d"></span> Paid</span></td>
                                    <td>Oct 10, 2026</td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4818</strong></td>
                                    <td><div class="cell-tenant"><div class="tenant-mark m2">KS</div><div><strong>Kada Studio</strong><span>Starter</span></div></div></td>
                                    <td>Northwind Logistics</td>
                                    <td><strong>$950</strong></td>
                                    <td><span class="badge bad"><span class="d"></span> Overdue</span></td>
                                    <td>Oct 2, 2026</td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act danger" title="Escalate" onclick="alert('Escalate (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4817</strong></td>
                                    <td><div class="cell-tenant"><div class="tenant-mark m5">AC</div><div><strong>Accra Consulting</strong><span>Business</span></div></div></td>
                                    <td>Boobab Capital</td>
                                    <td><strong>$7,320</strong></td>
                                    <td><span class="badge ok"><span class="d"></span> Paid</span></td>
                                    <td>Oct 8, 2026</td>
                                    <td><div class="row-act"><button class="act" title="View" onclick="alert('View invoice (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- ==================== REVENUE ==================== -->
            <section class="section" id="sec-revenue">
                <div class="kpis">
                    <div class="kpi">
                        <div class="kpi-top"><span class="kpi-label">Platform MRR</span><div class="kpi-ico"><svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg></div></div>
                        <div class="kpi-val">$182.4<small>K</small></div>
                        <div class="kpi-trend up"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg> +5.7% <span>MoM</span></div>
                    </div>
                    <div class="kpi">
                        <div class="kpi-top"><span class="kpi-label">Collected (30d)</span><div class="kpi-ico"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div></div>
                        <div class="kpi-val">$3.94<small>M</small></div>
                        <div class="kpi-sub">81.7% of invoiced value</div>
                    </div>
                    <div class="kpi">
                        <div class="kpi-top"><span class="kpi-label">Avg Days to Pay</span><div class="kpi-ico info"><svg class="icon icon-sm" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div></div>
                        <div class="kpi-val">14.2<small>days</small></div>
                        <div class="kpi-trend up"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg> -2.1 days <span>faster</span></div>
                    </div>
                    <div class="kpi">
                        <div class="kpi-top"><span class="kpi-label">Failed Payments</span><div class="kpi-ico danger"><svg class="icon icon-sm" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg></div></div>
                        <div class="kpi-val">37</div>
                        <div class="kpi-sub">$8,540 at risk</div>
                        <div class="kpi-trend down"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"/><polyline points="17 18 23 18 23 12"/></svg> -12%</div>
                    </div>
                </div>

                <div class="grid-2">
                    <div class="panel">
                        <div class="panel-head">
                            <div><h2>Collections by aging bucket</h2><p>Outstanding receivables</p></div>
                        </div>
                        <div class="panel-body">
                            <div class="rate-wrap">
                                <div class="rate-row"><div class="rate-meta"><strong>Current (not due)</strong><span>$6.12M</span></div><div class="track"><div class="fill teal" style="width:78%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>1–15 days overdue</strong><span>$892K</span></div><div class="track"><div class="fill" style="width:52%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>16–30 days overdue</strong><span>$418K</span></div><div class="track"><div class="fill amber" style="width:32%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>31–60 days overdue</strong><span>$214K</span></div><div class="track"><div class="fill red" style="width:18%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>60+ days overdue</strong><span>$98K</span></div><div class="track"><div class="fill red" style="width:8%"></div></div></div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-head">
                            <div><h2>Top invoicing tenants</h2><p>By total invoice value (30d)</p></div>
                        </div>
                        <div class="panel-body">
                            <div class="rate-wrap">
                                <div class="rate-row"><div class="rate-meta"><strong>Northwind Logistics</strong><span>$1.21M</span></div><div class="track"><div class="fill" style="width:92%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Accra Consulting</strong><span>$986K</span></div><div class="track"><div class="fill" style="width:75%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Boobab Capital</strong><span>$742K</span></div><div class="track"><div class="fill teal" style="width:56%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Zambezi Foods</strong><span>$418K</span></div><div class="track"><div class="fill blue" style="width:32%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Kada Studio</strong><span>$128K</span></div><div class="track"><div class="fill purple" style="width:10%"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== INVOICES ==================== -->
            <section class="section" id="sec-invoices">
                <div class="panel">
                    <div class="panel-head">
                        <div><h2>All invoices</h2><p>Every invoice across every tenant</p></div>
                        <div class="chips">
                            <button class="chip active">All</button>
                            <button class="chip">Paid</button>
                            <button class="chip">Pending</button>
                            <button class="chip">Overdue</button>
                            <button class="chip">Draft</button>
                            <button class="btn btn-primary btn-sm" onclick="alert('Bulk import (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg> Import</button>
                        </div>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead>
                                <tr><th>Invoice</th><th>Tenant</th><th>Client</th><th>Amount</th><th>Issued</th><th>Due</th><th>Status</th><th style="text-align:right">Actions</th></tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>#INV-4821</strong></td>
                                    <td>Northwind Logistics</td><td>Kada Studio</td><td><strong>$4,500</strong></td><td>Oct 1</td><td>Oct 14</td>
                                    <td><span class="badge ok"><span class="d"></span> Paid</span></td>
                                    <td><div class="row-act"><button class="act" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4820</strong></td>
                                    <td>Zambezi Foods</td><td>Accra Consulting</td><td><strong>$1,200</strong></td><td>Oct 5</td><td>Oct 20</td>
                                    <td><span class="badge warn"><span class="d"></span> Pending</span></td>
                                    <td><div class="row-act"><button class="act" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act" title="Remind" onclick="alert('Reminder (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4819</strong></td>
                                    <td>Boobab Capital</td><td>Miterlian Co.</td><td><strong>$2,800</strong></td><td>Sep 28</td><td>Oct 10</td>
                                    <td><span class="badge ok"><span class="d"></span> Paid</span></td>
                                    <td><div class="row-act"><button class="act" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4818</strong></td>
                                    <td>Kada Studio</td><td>Northwind Logistics</td><td><strong>$950</strong></td><td>Sep 18</td><td>Oct 2</td>
                                    <td><span class="badge bad"><span class="d"></span> Overdue</span></td>
                                    <td><div class="row-act"><button class="act" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button><button class="act danger" title="Escalate" onclick="alert('Escalated (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4817</strong></td>
                                    <td>Accra Consulting</td><td>Boobab Capital</td><td><strong>$7,320</strong></td><td>Sep 30</td><td>Oct 8</td>
                                    <td><span class="badge ok"><span class="d"></span> Paid</span></td>
                                    <td><div class="row-act"><button class="act" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><strong>#INV-4816</strong></td>
                                    <td>Northwind Logistics</td><td>Zambezi Foods</td><td><strong>$3,100</strong></td><td>Draft</td><td>—</td>
                                    <td><span class="badge neutral"><span class="d"></span> Draft</span></td>
                                    <td><div class="row-act"><button class="act" onclick="alert('View (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- ==================== PAYMENTS ==================== -->
            <section class="section" id="sec-payments">
                <div class="panel">
                    <div class="panel-head">
                        <div><h2>Recent payments</h2><p>All collected and failed transactions</p></div>
                        <button class="btn btn-outline btn-sm" onclick="alert('Reconcile (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg> Reconcile</button>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead><tr><th>Transaction</th><th>Invoice</th><th>Tenant</th><th>Amount</th><th>Method</th><th>Status</th><th>Date</th></tr></thead>
                            <tbody>
                                <tr><td><strong>TXN-90211</strong></td><td>#INV-4821</td><td>Northwind Logistics</td><td><strong>$4,500</strong></td><td>Bank transfer</td><td><span class="badge ok"><span class="d"></span> Succeeded</span></td><td>Oct 14, 2026</td></tr>
                                <tr><td><strong>TXN-90210</strong></td><td>#INV-4819</td><td>Boobab Capital</td><td><strong>$2,800</strong></td><td>Card · Stripe</td><td><span class="badge ok"><span class="d"></span> Succeeded</span></td><td>Oct 10, 2026</td></tr>
                                <tr><td><strong>TXN-90209</strong></td><td>#INV-4817</td><td>Accra Consulting</td><td><strong>$7,320</strong></td><td>Bank transfer</td><td><span class="badge ok"><span class="d"></span> Succeeded</span></td><td>Oct 8, 2026</td></tr>
                                <tr><td><strong>TXN-90208</strong></td><td>Sub-Miterlian</td><td>Miterlian Co.</td><td><strong>$39</strong></td><td>Card · Stripe</td><td><span class="badge bad"><span class="d"></span> Failed</span></td><td>Oct 7, 2026</td></tr>
                                <tr><td><strong>TXN-90207</strong></td><td>#INV-4815</td><td>Zambezi Foods</td><td><strong>$640</strong></td><td>Card · Stripe</td><td><span class="badge ok"><span class="d"></span> Succeeded</span></td><td>Oct 6, 2026</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- ==================== DUNNING ==================== -->
            <section class="section" id="sec-dunning">
                <div class="panel">
                    <div class="panel-head">
                        <div><h2>Reminders & dunning queue</h2><p>Automated nudges for overdue invoices</p></div>
                        <button class="btn btn-primary btn-sm" onclick="alert('Run dunning (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/></svg> Run now</button>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead><tr><th>Invoice</th><th>Tenant</th><th>Days overdue</th><th>Amount</th><th>Reminders sent</th><th>Next</th></tr></thead>
                            <tbody>
                                <tr><td><strong>#INV-4818</strong></td><td>Kada Studio</td><td><strong style="color:var(--danger)">24 days</strong></td><td>$950</td><td>3</td><td>Escalation · Oct 27</td></tr>
                                <tr><td><strong>#INV-4802</strong></td><td>Zambezi Foods</td><td><strong style="color:var(--danger)">18 days</strong></td><td>$2,180</td><td>2</td><td>Reminder · Oct 26</td></tr>
                                <tr><td><strong>#INV-4798</strong></td><td>Kada Studio</td><td><strong style="color:var(--warning)">9 days</strong></td><td>$440</td><td>1</td><td>Reminder · Oct 28</td></tr>
                                <tr><td><strong>#INV-4791</strong></td><td>Miterlian Co.</td><td><strong style="color:var(--warning)">6 days</strong></td><td>$1,200</td><td>1</td><td>Reminder · Oct 26</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- ==================== TENANTS ==================== -->
            <section class="section" id="sec-tenants">
                <div class="panel">
                    <div class="panel-head">
                        <div><h2>Tenant directory</h2><p>Every business using BillNest</p></div>
                        <div class="chips">
                            <button class="chip active">All</button>
                            <button class="chip">Active</button>
                            <button class="chip">Trial</button>
                            <button class="chip">Suspended</button>
                            <button class="btn btn-primary btn-sm" onclick="alert('Invite tenant (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg> Invite</button>
                        </div>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead><tr><th>Tenant</th><th>Plan</th><th>Users</th><th>Invoices (30d)</th><th>MRR</th><th>Payment health</th><th>Status</th><th style="text-align:right">Actions</th></tr></thead>
                            <tbody>
                                <tr>
                                    <td><div class="cell-tenant"><div class="tenant-mark m1">NW</div><div><strong>Northwind Logistics</strong><span>northwind.io</span></div></div></td>
                                    <td><span class="badge info">Business</span></td><td>24</td><td>312</td><td><strong>$936</strong></td>
                                    <td><span class="badge ok"><span class="d"></span> 100%</span></td>
                                    <td><span class="badge ok"><span class="d"></span> Active</span></td>
                                    <td><div class="row-act"><button class="act" title="Impersonate" onclick="alert('Impersonate (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><div class="cell-tenant"><div class="tenant-mark m2">KS</div><div><strong>Kada Studio</strong><span>kada.studio</span></div></div></td>
                                    <td><span class="badge neutral">Starter</span></td><td>3</td><td>18</td><td><strong>$0</strong></td>
                                    <td><span class="badge ok"><span class="d"></span> 95%</span></td>
                                    <td><span class="badge ok"><span class="d"></span> Active</span></td>
                                    <td><div class="row-act"><button class="act" onclick="alert('Impersonate (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><div class="cell-tenant"><div class="tenant-mark m3">ZF</div><div><strong>Zambezi Foods</strong><span>zambezi.co</span></div></div></td>
                                    <td><span class="badge info">Pro</span></td><td>12</td><td>96</td><td><strong>$228</strong></td>
                                    <td><span class="badge warn"><span class="d"></span> 62%</span></td>
                                    <td><span class="badge warn"><span class="d"></span> Past due</span></td>
                                    <td><div class="row-act"><button class="act" onclick="alert('Impersonate (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><div class="cell-tenant"><div class="tenant-mark m4">BC</div><div><strong>Boobab Capital</strong><span>boobab.cap</span></div></div></td>
                                    <td><span class="badge info">Pro</span></td><td>18</td><td>245</td><td><strong>$342</strong></td>
                                    <td><span class="badge ok"><span class="d"></span> 98%</span></td>
                                    <td><span class="badge ok"><span class="d"></span> Active</span></td>
                                    <td><div class="row-act"><button class="act" onclick="alert('Impersonate (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" y1="12" x2="3" y2="12"/></svg></button></div></td>
                                </tr>
                                <tr>
                                    <td><div class="cell-tenant"><div class="tenant-mark m5">MC</div><div><strong>Miterlian Co.</strong><span>miterlian.com</span></div></div></td>
                                    <td><span class="badge neutral">Starter</span></td><td>2</td><td>4</td><td><strong>$0</strong></td>
                                    <td><span class="badge bad"><span class="d"></span> 34%</span></td>
                                    <td><span class="badge bad"><span class="d"></span> Suspended</span></td>
                                    <td><div class="row-act"><button class="act danger" title="Reactivate" onclick="alert('Reactivate (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="23 4 23 10 17 10"/><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"/></svg></button></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- ==================== USERS ==================== -->
            <section class="section" id="sec-users">
                <div class="panel">
                    <div class="panel-head">
                        <div><h2>Users & roles</h2><p>All accounts across the platform</p></div>
                        <div class="chips">
                            <button class="chip active">All</button>
                            <button class="chip">Tenant admins</button>
                            <button class="chip">Members</button>
                            <button class="chip">Viewers</button>
                            <button class="chip">Platform admins</button>
                        </div>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead><tr><th>User</th><th>Tenant</th><th>Role</th><th>Last active</th><th>Invoices issued</th><th>2FA</th><th>Status</th></tr></thead>
                            <tbody>
                                <tr><td><div class="cell-tenant"><div class="tenant-mark m1">AA</div><div><strong>Ade Adeyemi</strong><span>ade@northwind.io</span></div></div></td><td>Northwind Logistics</td><td><span class="badge info">Admin</span></td><td>2 min ago</td><td>128</td><td><span class="badge ok">On</span></td><td><span class="badge ok"><span class="d"></span> Active</span></td></tr>
                                <tr><td><div class="cell-tenant"><div class="tenant-mark m2">GP</div><div><strong>Grace Patel</strong><span>grace@kada.studio</span></div></div></td><td>Kada Studio</td><td><span class="badge info">Admin</span></td><td>1 hour ago</td><td>42</td><td><span class="badge warn">Off</span></td><td><span class="badge ok"><span class="d"></span> Active</span></td></tr>
                                <tr><td><div class="cell-tenant"><div class="tenant-mark m3">SO</div><div><strong>Sam Okafor</strong><span>sam@zambezi.co</span></div></div></td><td>Zambezi Foods</td><td><span class="badge neutral">Member</span></td><td>Yesterday</td><td>71</td><td><span class="badge ok">On</span></td><td><span class="badge warn"><span class="d"></span> Past due</span></td></tr>
                                <tr><td><div class="cell-tenant"><div class="tenant-mark m4">TN</div><div><strong>Tomasz Nowak</strong><span>tomasz@boobab.cap</span></div></div></td><td>Boobab Capital</td><td><span class="badge info">Admin</span></td><td>3 hours ago</td><td>156</td><td><span class="badge ok">On</span></td><td><span class="badge ok"><span class="d"></span> Active</span></td></tr>
                                <tr><td><div class="cell-tenant"><div class="tenant-mark m5">RK</div><div><strong>Rita Kimani</strong><span>rita@accraconsult.io</span></div></div></td><td>Accra Consulting</td><td><span class="badge neutral">Viewer</span></td><td>2 days ago</td><td>0</td><td><span class="badge ok">On</span></td><td><span class="badge ok"><span class="d"></span> Active</span></td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- ==================== HEALTH ==================== -->
            <section class="section" id="sec-health">
                <div class="grid-2">
                    <div class="panel">
                        <div class="panel-head"><div><h2>Service status</h2><p>Invoice-critical services</p></div></div>
                        <div class="panel-body">
                            <div class="health-list">
                                <div class="health-row"><div class="ind ok"></div><span class="lbl">Invoice generation API</span><span class="val">42ms · healthy</span></div>
                                <div class="health-row"><div class="ind ok"></div><span class="lbl">PDF rendering service</span><span class="val">128ms · healthy</span></div>
                                <div class="health-row"><div class="ind warn"></div><span class="lbl">Email delivery queue</span><span class="val">1.2k backlog</span></div>
                                <div class="health-row"><div class="ind ok"></div><span class="lbl">Payment webhooks</span><span class="val">100% success</span></div>
                                <div class="health-row"><div class="ind ok"></div><span class="lbl">Database cluster</span><span class="val">99.99% uptime</span></div>
                                <div class="health-row"><div class="ind warn"></div><span class="lbl">Search index</span><span class="val">lag 4s</span></div>
                                <div class="health-row"><div class="ind ok"></div><span class="lbl">Object storage (S3)</span><span class="val">62% used</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-head"><div><h2>Resource usage</h2><p>Live load</p></div></div>
                        <div class="panel-body">
                            <div class="rate-wrap">
                                <div class="rate-row"><div class="rate-meta"><strong>CPU</strong><span>38%</span></div><div class="track"><div class="fill" style="width:38%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Memory</strong><span>62%</span></div><div class="track"><div class="fill teal" style="width:62%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Disk I/O</strong><span>24%</span></div><div class="track"><div class="fill blue" style="width:24%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Network</strong><span>47%</span></div><div class="track"><div class="fill amber" style="width:47%"></div></div></div>
                            </div>
                            <div style="margin-top:22px;padding:14px;background:var(--bg-light);border-radius:10px;font-size:0.8rem;color:var(--text-muted);">
                                <strong style="color:var(--text);display:block;margin-bottom:4px;">⚠ Email queue building up</strong>
                                Reminder emails for overdue invoices are queued. Consider scaling email workers to avoid dunning delays.
                            </div>
                            <button class="btn btn-primary btn-sm" style="margin-top:14px;width:100%;" onclick="alert('Scale (demo)');">Scale email workers</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== AUDIT ==================== -->
            <section class="section" id="sec-audit">
                <div class="panel">
                    <div class="panel-head">
                        <div><h2>Audit trail</h2><p>Every admin & system invoice-related event</p></div>
                        <button class="btn btn-outline btn-sm" onclick="alert('Export audit (demo)');"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg> Export</button>
                    </div>
                    <div class="panel-body">
                        <div class="feed">
                            <div class="feed-item"><div class="feed-ico ok"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div><div class="feed-body"><p><strong>Sarah Adeyemi</strong> escalated invoice <strong>#INV-4818</strong> to collections</p><span class="feed-time">Oct 26, 2026 · 14:32 UTC · IP 41.203.xx.xx</span></div></div>
                            <div class="feed-item"><div class="feed-ico warn"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/></svg></div><div class="feed-body"><p><strong>System</strong> suspended tenant <strong>Miterlian Co.</strong> for 3 failed payments</p><span class="feed-time">Oct 26, 2026 · 13:05 UTC · automated</span></div></div>
                            <div class="feed-item"><div class="feed-ico info"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/></svg></div><div class="feed-body"><p><strong>Sarah Adeyemi</strong> bulk-imported 342 invoices for Northwind Logistics</p><span class="feed-time">Oct 26, 2026 · 12:44 UTC · IP 41.203.xx.xx</span></div></div>
                            <div class="feed-item"><div class="feed-ico info"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/></svg></div><div class="feed-body"><p><strong>Sarah Adeyemi</strong> invited <strong>David Mensah</strong> as platform admin</p><span class="feed-time">Oct 25, 2026 · 09:18 UTC</span></div></div>
                            <div class="feed-item"><div class="feed-ico neutral"><svg class="icon icon-sm" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg></div><div class="feed-body"><p>Dunning cadence updated to <strong>3 / 7 / 14 / 30 days</strong> by Sarah Adeyemi</p><span class="feed-time">Oct 24, 2026 · 16:42 UTC</span></div></div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {

    // ============= NAV / SECTION SWITCH =============
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.section');
    const pgTitle = document.getElementById('pgTitle');
    const pgSub = document.getElementById('pgSub');

    const meta = {
        overview: { t: 'Command center', s: 'Live pulse of invoicing, payments, and tenant billing health.' },
        revenue:  { t: 'Revenue & collections', s: 'Platform revenue, collection rates, and receivables aging.' },
        invoices: { t: 'All invoices', s: 'Every invoice across every tenant in one place.' },
        payments: { t: 'Payments', s: 'Collected, pending, and failed transactions.' },
        dunning:  { t: 'Reminders & dunning', s: 'Automated nudges to keep overdue invoices moving.' },
        tenants:  { t: 'Tenant directory', s: 'Every business using BillNest and their billing health.' },
        users:    { t: 'Users & roles', s: 'All platform accounts and their permissions.' },
        health:   { t: 'System health', s: 'Invoice-critical services and infrastructure load.' },
        audit:    { t: 'Audit trail', s: 'Immutable record of admin & system events.' }
    };

    function activate(id) {
        navLinks.forEach(n => n.classList.toggle('active', n.dataset.sec === id));
        sections.forEach(s => s.classList.toggle('active', s.id === 'sec-' + id));
        const m = meta[id];
        if (m) { pgTitle.textContent = m.t; pgSub.textContent = m.s; }
        if (window.innerWidth <= 992) closeSidebar();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    navLinks.forEach(n => n.addEventListener('click', () => activate(n.dataset.sec)));

    document.querySelectorAll('[data-goto]').forEach(link => {
        link.addEventListener('click', (e) => { e.preventDefault(); activate(link.dataset.goto); });
    });

    // ============= MOBILE SIDEBAR =============
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sbOverlay');
    const burger = document.getElementById('burger');

    function openSidebar() { sidebar.classList.add('open'); overlay.classList.add('show'); }
    function closeSidebar() { sidebar.classList.remove('open'); overlay.classList.remove('show'); }

    burger.addEventListener('click', () => sidebar.classList.contains('open') ? closeSidebar() : openSidebar());
    overlay.addEventListener('click', closeSidebar);

    // ============= CHIPS =============
    document.querySelectorAll('.chips').forEach(group => {
        const chips = group.querySelectorAll('.chip');
        chips.forEach(c => c.addEventListener('click', () => {
            chips.forEach(x => x.classList.remove('active'));
            c.classList.add('active');
        }));
    });

    // ============= ANIMATE CHART BARS =============
    document.querySelectorAll('.bar').forEach(bar => {
        const h = bar.style.height;
        bar.style.height = '0%';
        requestAnimationFrame(() => setTimeout(() => { bar.style.height = h; }, 60));
    });

    // ============= ESC =============
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeSidebar(); });

    // ============= SEARCH ENTER =============
    const search = document.querySelector('.search input');
    if (search) search.addEventListener('keydown', e => {
        if (e.key === 'Enter') { e.preventDefault(); alert(`Search demo: "${search.value}"`); }
    });
});
</script>

</body>
</html>