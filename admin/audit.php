<?php
$pageId = 'audit';
$pageTitle = 'Audit trail';
$pageSubtitle = 'Immutable record of admin & system events.';
require __DIR__ . '/includes/layout-header.php';
?>

<section class="section active" id="sec-audit">
    <div class="panel">
        <div class="panel-head"><div><h2>Audit trail</h2><p>Every admin & system invoice-related event</p></div><button class="btn btn-outline btn-sm" onclick="alert('Export audit (demo)');">Export</button></div>
        <div class="panel-body"><div class="feed"><p>No activity available.</p></div></div>
    </div>
</section>

<?php require __DIR__ . '/includes/layout-footer.php'; ?>
