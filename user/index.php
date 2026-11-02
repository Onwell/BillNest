<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BillNest · Dashboard</title>

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
        .user-card {
            display: flex; align-items: center; gap: 10px;
            padding: 8px; border-radius: 10px; cursor: pointer;
            transition: background var(--t);
        }
        .user-card:hover { background: var(--bg-dark-soft); }
        .user-av {
            width: 36px; height: 36px; border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--primary-mid));
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; font-size: 0.8rem; color: white; flex-shrink: 0;
        }
        .user-info { min-width: 0; }
        .user-info strong { display: block; font-size: 0.83rem; font-weight: 600; color: var(--text-dark); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        .user-info span { font-size: 0.7rem; color: var(--text-dark-muted); }

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

        .search { flex: 1; max-width: 360px; position: relative; }
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

        /* =============== CONTENT =============== */
        .content { padding: 26px 28px; display: flex; flex-direction: column; gap: 22px; }
        .section { display: none; flex-direction: column; gap: 22px; }
        .section.active { display: flex; }

        /* =============== WELCOME BANNER =============== */
        .welcome {
            background: linear-gradient(135deg, var(--primary), var(--primary-mid));
            border-radius: var(--radius);
            padding: 28px 30px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            position: relative;
            overflow: hidden;
        }
        .welcome::before {
            content: '';
            position: absolute;
            top: -60%; right: -10%;
            width: 340px; height: 340px;
            background: radial-gradient(circle, rgba(255,255,255,0.12) 0%, rgba(255,255,255,0) 70%);
            border-radius: 50%;
        }
        .welcome-text { position: relative; z-index: 2; }
        .welcome-text h2 { font-size: 1.5rem; font-weight: 800; letter-spacing: -0.4px; margin-bottom: 4px; }
        .welcome-text p { font-size: 0.88rem; opacity: 0.9; }
        .welcome-actions { display: flex; gap: 10px; position: relative; z-index: 2; flex-shrink: 0; }
        .welcome-actions .btn { background: white; color: var(--primary); }
        .welcome-actions .btn:hover { background: #f0f5f3; box-shadow: 0 6px 16px rgba(0,0,0,0.15); }
        .welcome-actions .btn-outline { background: transparent; border-color: rgba(255,255,255,0.4); color: white; }
        .welcome-actions .btn-outline:hover { background: rgba(255,255,255,0.12); }

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

        /* =============== CHARTS =============== */
        .chart-row { display: grid; grid-template-columns: 1.7fr 1fr; gap: 18px; }
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

        .cell-client { display: flex; align-items: center; gap: 11px; }
        .client-mark {
            width: 34px; height: 34px; border-radius: 9px;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; font-size: 0.74rem; color: white; flex-shrink: 0;
        }
        .m1 { background: linear-gradient(135deg,#0d5c4d,#1a8a75); }
        .m2 { background: linear-gradient(135deg,#3b82f6,#6366f1); }
        .m3 { background: linear-gradient(135deg,#f59e0b,#ef4444); }
        .m4 { background: linear-gradient(135deg,#8b5cf6,#d946ef); }
        .m5 { background: linear-gradient(135deg,#10b981,#059669); }
        .cell-client strong { display: block; font-weight: 600; font-size: 0.86rem; }
        .cell-client span { font-size: 0.72rem; color: var(--text-muted); }

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

        /* =============== FEED =============== */
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

        /* =============== GRID =============== */
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
            .welcome { flex-direction: column; align-items: flex-start; }
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
            .welcome-actions { width: 100%; flex-direction: column; }
            .welcome-actions .btn { width: 100%; }
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
                <small>Workspace</small>
            </div>
        </div>

        <nav class="side-nav" id="sideNav">
            <div class="nav-label">Main</div>
            <a class="nav-link active" data-sec="dashboard">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                Dashboard
            </a>
            <a class="nav-link" data-sec="invoices">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                Invoices
            </a>
            <a class="nav-link" data-sec="clients">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                Clients
            </a>
            <a class="nav-link" data-sec="payments">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                Payments
            </a>

            <div class="nav-label">Tools</div>
            <a class="nav-link" data-sec="products">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M20 7l-8-4-8 4v10l8 4 8-4V7z"/><polyline points="4 7 12 11 20 7"/><line x1="12" y1="11" x2="12" y2="21"/></svg>
                Products
            </a>
            <a class="nav-link" data-sec="reminders">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                Reminders
                <span class="pill">3</span>
            </a>
            <a class="nav-link" data-sec="reports">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                Reports
            </a>

            <div class="nav-label">Account</div>
            <a class="nav-link" data-sec="settings">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                Settings
            </a>
        </nav>

        <div class="side-footer">
            <div class="user-card">
                <div class="user-av">GP</div>
                <div class="user-info">
                    <strong>Grace Patel</strong>
                    <span>Zambezi Foods · Pro</span>
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
                    <h1 id="pgTitle">Dashboard</h1>
                    <p id="pgSub">Welcome back, Grace. Here's your business at a glance.</p>
                </div>
            </div>

            <div class="search">
                <svg class="icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                <input type="text" placeholder="Search invoices, clients, invoice #…" aria-label="Search">
            </div>

            <div class="topbar-r">
                <button class="icon-btn" aria-label="Notifications">
                    <svg class="icon" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    <span class="dot"></span>
                </button>
                <button class="icon-btn" aria-label="Help">
                    <svg class="icon" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                </button>
                <button class="btn btn-primary" onclick="alert('New invoice (demo)');">
                    <svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                    New invoice
                </button>
            </div>
        </header>

        <!-- CONTENT -->
        <main class="content">

            <!-- ==================== DASHBOARD ==================== -->
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
                        <a href="#" class="link" data-goto="invoices">View all invoices <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
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

            <!-- ==================== INVOICES ==================== -->
            <section class="section" id="sec-invoices">
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

            <!-- ==================== CLIENTS ==================== -->
            <section class="section" id="sec-clients">
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

            <!-- ==================== PAYMENTS ==================== -->
            <section class="section" id="sec-payments">
                <div class="kpis" style="grid-template-columns: repeat(3, 1fr);">
                    <div class="kpi">
                        <div class="kpi-top"><span class="kpi-label">Collected (30d)</span><div class="kpi-ico"><svg class="icon icon-sm" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div></div>
                        <div class="kpi-val">$12,340</div>
                        <div class="kpi-sub">14 invoices paid</div>
                    </div>
                    <div class="kpi">
                        <div class="kpi-top"><span class="kpi-label">Awaiting payment</span><div class="kpi-ico warn"><svg class="icon icon-sm" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div></div>
                        <div class="kpi-val">$8,450</div>
                        <div class="kpi-sub">6 invoices</div>
                    </div>
                    <div class="kpi">
                        <div class="kpi-top"><span class="kpi-label">Overdue</span><div class="kpi-ico danger"><svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div></div>
                        <div class="kpi-val">$2,980</div>
                        <div class="kpi-sub">3 invoices past due</div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-head">
                        <div><h2>Recent payments</h2><p>Money received</p></div>
                        <button class="btn btn-outline btn-sm" onclick="alert('Record payment (demo)');">
                            <svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
                            Record payment
                        </button>
                    </div>
                    <div class="tbl-wrap">
                        <table class="tbl">
                            <thead><tr><th>Payment</th><th>Invoice</th><th>Client</th><th>Amount</th><th>Method</th><th>Date</th></tr></thead>
                            <tbody>
                                <tr><td><strong>TXN-90211</strong></td><td>#INV-4821</td><td>Kada Studio</td><td><strong>$4,500</strong></td><td>Bank transfer</td><td>Oct 14, 2026</td></tr>
                                <tr><td><strong>TXN-90210</strong></td><td>#INV-4819</td><td>Miterlian Co.</td><td><strong>$2,800</strong></td><td>Card · Stripe</td><td>Oct 10, 2026</td></tr>
                                <tr><td><strong>TXN-90209</strong></td><td>#INV-4817</td><td>Northwind Logistics</td><td><strong>$7,320</strong></td><td>Bank transfer</td><td>Oct 8, 2026</td></tr>
                                <tr><td><strong>TXN-90207</strong></td><td>#INV-4815</td><td>Zambezi Foods</td><td><strong>$640</strong></td><td>Card · Stripe</td><td>Oct 6, 2026</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- ==================== PRODUCTS ==================== -->
            <section class="section" id="sec-products">
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

            <!-- ==================== REMINDERS ==================== -->
            <section class="section" id="sec-reminders">
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

            <!-- ==================== REPORTS ==================== -->
            <section class="section" id="sec-reports">
                <div class="grid-2">
                    <div class="panel">
                        <div class="panel-head"><div><h2>Revenue by month</h2><p>What you've collected</p></div></div>
                        <div class="panel-body">
                            <div class="rate-wrap">
                                <div class="rate-row"><div class="rate-meta"><strong>October 2026</strong><span>$12,340</span></div><div class="track"><div class="fill" style="width:82%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>September 2026</strong><span>$10,420</span></div><div class="track"><div class="fill teal" style="width:69%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>August 2026</strong><span>$11,880</span></div><div class="track"><div class="fill blue" style="width:79%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>July 2026</strong><span>$9,760</span></div><div class="track"><div class="fill purple" style="width:65%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>June 2026</strong><span>$8,340</span></div><div class="track"><div class="fill amber" style="width:55%"></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-head"><div><h2>Top clients by revenue</h2><p>Lifetime value</p></div></div>
                        <div class="panel-body">
                            <div class="rate-wrap">
                                <div class="rate-row"><div class="rate-meta"><strong>Accra Consulting</strong><span>$22,100</span></div><div class="track"><div class="fill" style="width:92%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Northwind Logistics</strong><span>$18,940</span></div><div class="track"><div class="fill teal" style="width:79%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Kada Studio</strong><span>$9,200</span></div><div class="track"><div class="fill blue" style="width:38%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Miterlian Co.</strong><span>$7,800</span></div><div class="track"><div class="fill purple" style="width:32%"></div></div></div>
                                <div class="rate-row"><div class="rate-meta"><strong>Zambezi Foods</strong><span>$3,100</span></div><div class="track"><div class="fill amber" style="width:13%"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================== SETTINGS ==================== -->
            <section class="section" id="sec-settings">
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
        dashboard: { t: 'Dashboard', s: "Welcome back, Grace. Here's your business at a glance." },
        invoices:  { t: 'Invoices', s: 'Every invoice you have created, in one place.' },
        clients:   { t: 'Clients', s: 'Everyone you bill and their history.' },
        payments:  { t: 'Payments', s: 'Money collected, awaiting, and overdue.' },
        products:  { t: 'Products & services', s: 'Reusable line items to speed up invoicing.' },
        reminders: { t: 'Reminders', s: 'Automated nudges to keep overdue invoices moving.' },
        reports:   { t: 'Reports', s: 'Revenue, clients, and business insights.' },
        settings:  { t: 'Settings', s: 'Your business profile and invoice defaults.' }
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