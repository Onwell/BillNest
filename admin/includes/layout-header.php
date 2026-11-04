<?php
if (!isset($pageId, $pageTitle, $pageSubtitle)) {
    throw new RuntimeException('Admin page metadata is required.');
}
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
require_once dirname(__DIR__, 2) . '/db.php';
require_once dirname(__DIR__, 2) . '/activity_log.php';
$adminName = trim((string) ($_SESSION['user_name'] ?? 'Administrator'));
$adminNameParts = preg_split('/\s+/', $adminName, -1, PREG_SPLIT_NO_EMPTY);
$adminInitials = strtoupper(substr($adminNameParts[0] ?? 'A', 0, 1) . (count($adminNameParts) > 1 ? substr(end($adminNameParts), 0, 1) : ''));
$adminRole = ucfirst((string) ($_SESSION['user_role'] ?? 'admin'));
if (isset($_SESSION['user_id'])) {
    log_user_activity(
        $conn,
        'page_view',
        (int) $_SESSION['user_id'],
        $_SESSION['user_name'] ?? null,
        $_SESSION['user_email'] ?? null,
        'Viewed admin page: ' . $pageTitle
    );
}
?>
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
            <a class="nav-link<?= $pageId === 'overview' ? ' active' : '' ?>" href="index.php">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                Command Center
            </a>
            <a class="nav-link<?= $pageId === 'revenue' ? ' active' : '' ?>" href="revenue.php">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
                Revenue & Collections
            </a>

            <div class="nav-label">Invoice Ops</div>
            <a class="nav-link<?= $pageId === 'invoices' ? ' active' : '' ?>" href="invoices.php">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                All Invoices
            </a>
            <a class="nav-link<?= $pageId === 'payments' ? ' active' : '' ?>" href="payments.php">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                Payments
            </a>
            <a class="nav-link<?= $pageId === 'dunning' ? ' active' : '' ?>" href="dunning.php">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                Reminders & Dunning
                <span class="pill">37</span>
            </a>

            <div class="nav-label">Tenants</div>
            <a class="nav-link<?= $pageId === 'tenants' ? ' active' : '' ?>" href="tenants.php">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M3 21h18M5 21V7l7-4 7 4v14"/></svg>
                Tenant Directory
            </a>
            <a class="nav-link<?= $pageId === 'users' ? ' active' : '' ?>" href="users.php">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                Users & Roles
            </a>

            <div class="nav-label">Platform</div>
            <a class="nav-link<?= $pageId === 'health' ? ' active' : '' ?>" href="health.php">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                System Health
            </a>
            <a class="nav-link<?= $pageId === 'audit' ? ' active' : '' ?>" href="audit.php">
                <svg class="icon icon-sm" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                Audit Trail
            </a>
        </nav>

        <div class="side-footer">
            <div class="admin-card">
                <div class="admin-av"><?= htmlspecialchars($adminInitials, ENT_QUOTES, 'UTF-8') ?></div>
                <div class="admin-info">
                    <strong><?= htmlspecialchars($adminName, ENT_QUOTES, 'UTF-8') ?></strong>
                    <span><?= htmlspecialchars($adminRole, ENT_QUOTES, 'UTF-8') ?></span>
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
                    <h1 id="pgTitle"><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></h1>
                    <p id="pgSub"><?= htmlspecialchars($pageSubtitle, ENT_QUOTES, 'UTF-8') ?></p>
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
                <button class="btn btn-outline btn-sm" type="button" id="logoutBtn">Logout</button>
            </div>
        </header>

        <!-- CONTENT -->
        <main class="content">

            