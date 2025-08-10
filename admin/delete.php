<?php require 'auth.php'; ?>
<?php
$id = $_GET['id'];
$dataFile = __DIR__ . "/data/events.json";
$events = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

if (isset($events[$id])) {
    unset($events[$id]);
    file_put_contents($dataFile, json_encode($events, JSON_PRETTY_PRINT));
}
header("Location: admin.php");
exit();
