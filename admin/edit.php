<?php require 'auth.php'; ?>

<?php
$dataFile = __DIR__ . "/data/events.json";
$events = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

$id = $_GET['id'] ?? null;
if (!$id || !isset($events[$id])) exit("Event not found");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $date = $_POST['date'];
    $content = $_POST['content'];

    $events[$id]['title'] = $title;
    $events[$id]['author'] = $author;
    $events[$id]['date'] = $date;
    $events[$id]['content'] = $content;

    if (!empty($_FILES['image']['name'])) {
        $uploadDir = __DIR__ . '/uploads/';
        if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

        $imageName = time() . "_" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $imageName);
        $events[$id]['image'] = 'uploads/' . $imageName;
    }

    file_put_contents($dataFile, json_encode($events, JSON_PRETTY_PRINT));
    header("Location: admin.php");
    exit();
}

// Prepopulate fields
$event = $events[$id];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
<a class="logout" href="logout.php">Logout</a>
<h2>Welcome, blogadmin!</h2>
<h3>Edit Event</h3>

<form method="post" enctype="multipart/form-data">
    <label>Title</label>
    <input type="text" name="title" value="<?= htmlspecialchars($event['title']) ?>" required>

    <label>Author</label>
    <input type="text" name="author" value="<?= htmlspecialchars($event['author'] ?? '') ?>">

    <label>Date</label>
    <input type="date" name="date" value="<?= htmlspecialchars($event['date'] ?? '') ?>">

    <label>Content</label>
    <textarea name="content" id="editor"><?= htmlspecialchars($event['content']) ?></textarea>

    <label>Current Image</label><br>
    <?php if (!empty($event['image'])): ?>
        <img src="<?= htmlspecialchars($event['image']) ?>" alt="Current image" style="max-width: 200px; display: block; margin-bottom: 10px;">
    <?php else: ?>
        <p>No image uploaded yet.</p>
    <?php endif; ?>

    <label>Replace Image</label>
    <input type="file" name="image">

    <button type="submit">Update Post</button>
</form>

<script>
tinymce.init({
    selector: '#editor',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount toc paste',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media | align lineheight | numlist bullist checklist | emoticons charmap | table | toc | removeformat',
    height: 400,
    paste_data_images: true,
    automatic_uploads: true,
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;
        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', 'upload_image.php');
        xhr.onload = function() {
            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status);
                return;
            }
            var json = JSON.parse(xhr.responseText);
            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }
            success(json.location);
        };
        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        xhr.send(formData);
    },
    setup: function (editor) {
        editor.on('NodeChange', function (e) {
            var imgs = editor.getBody().querySelectorAll('img');
            imgs.forEach(function (img) {
                img.style.width = '400px';
                img.style.height = '400px';
                img.style.objectFit = 'cover';
            });
        });
    }
});
</script>
</body>
</html>

<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    padding: 30px;
    max-width: 1200px;
    margin: 10px auto;
}

h2, h3 {
    margin-bottom: 20px;
}

label {
    font-weight: 600;
    margin-top: 15px;
    display: block;
    margin-bottom: 6px;
}

input[type="text"],
input[type="date"],
input[type="file"],
textarea {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 6px;
    margin-bottom: 15px;
    background: #fff;
}

button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    font-size: 1rem;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background 0.2s ease;
}

button:hover {
    background-color: #0056b3;
}

.logout {
    float: right;
    background-color: #dc3545;
    color: white;
    padding: 8px 14px;
    text-decoration: none;
    border-radius: 6px;
    font-size: 0.9rem;
}

.logout:hover {
    background-color: #c82333;
}

@media (max-width: 600px) {
    .logout {
        float: none;
        display: inline-block;
        margin-bottom: 15px;
    }
}
</style>
