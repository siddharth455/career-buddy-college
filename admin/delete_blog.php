<?php require 'auth.php';

$dataFile = __DIR__ . "/data/blogs.json";
$blogs = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

$id = $_GET['id'] ?? '';
if (isset($blogs[$id])) {
    unset($blogs[$id]);
    file_put_contents($dataFile, json_encode($blogs, JSON_PRETTY_PRINT));
}

header("Location: admin.php");
exit();
?>
