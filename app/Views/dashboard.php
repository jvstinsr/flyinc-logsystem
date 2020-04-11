<div class="container">
    <h3 class="h3 mt-sm-4">Anwesenheit <span class="text-secondary"><?= $day ?></span></h3>
    <div id="user-time" class="container mt-4 mb-2 px-2 py-4 border rounded">
        <canvas id="canvas"></canvas>
    </div>
    <h3 class="h3 mt-sm-4">Wochenstatistik</h3>
    <div id="hour-per-week" class="mt-2 mb-4 px-2 py-4 border rounded">
        CONTENT
    </div>
</div>
<?php
$dates = array();
for ($i = 7; $i >= 1; $i--) {
    array_push($dates, date('d.m.Y', strtotime('-' . $i + 1 . ' days')));
}
?>
<script>
    var dates = <?php echo json_encode($dates); ?>;
</script>