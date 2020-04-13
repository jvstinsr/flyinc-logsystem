<div class="container">
    <h3 class="h3 mt-sm-4">Anwesenheit von <span class="text-secondary"><?= $lastWeekDay ?></span> bis <span class="text-secondary"><?= $currentDay ?></span></h3>
    <div id="user-time" class="container mt-4 mb-2 p-2 border rounded d-block mx-auto">
        <canvas id="canvas"></canvas>
    </div>
</div>
<div class="container">
    <h3 class="h3 mt-sm-4">Wochenstatistik</h3>
    <div id="hour-per-week" class="mt-2 mb-4 px-2 py-4 border rounded">
        User: <?= print_r($user) ?><br>
        Datum: <?= print_r($dates) ?><br><br><br>
        JOIN: <?= print_r($testArray)?>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
<script>
    let dateDB = <?php echo json_encode($dates); ?>;
    //let user = <?php echo json_encode($user); ?>;
    //alert(user);
    //let test = <?php echo json_encode($testArray); ?>;
    alert(dateDB);
</script>
