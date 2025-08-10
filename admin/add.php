<?php require 'auth.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $date = $_POST['date'];
    $content = $_POST['content'];
    $showTOC = isset($_POST['show_toc']) ? true : false;

    $uploadDir = __DIR__ . '/uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir);

    $imagePath = '';
    if (!empty($_FILES['image']['name'])) {
        $imageName = time() . "_" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $imageName);
        $imagePath = 'uploads/' . $imageName;
    }

    $dataFile = __DIR__ . '/data/events.json';
    $events = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

    $id = uniqid();
    $events[$id] = [
        'title' => $title,
        'author' => $author,
        'date' => $date,
        'content' => $content,
        'image' => $imagePath,
    ];

    file_put_contents($dataFile, json_encode($events, JSON_PRETTY_PRINT));
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Event</title>
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        body { font-family: Arial; padding: 20px; }
        input, textarea { width: 100%; padding: 8px; margin-bottom: 10px; }
        label { font-weight: bold; display: block; margin-top: 10px; }
        button { padding: 10px 20px; background: #007BFF; color: white; border: none; }
        .logout { float: right; background-color: #dc3545; color: white; padding: 8px 12px; text-decoration: none; }
    </style>
</head>
<body>
    <a class="logout" href="logout.php">Logout</a>
    <h2>Welcome, blogadmin!</h2>
    <h3>Add New Event</h3>
    <form method="post" enctype="multipart/form-data">
        <label>Title</label>
        <input type="text" name="title" required>

        <label>Author</label>
        <input type="text" name="author">

        <label>Date</label>
        <input type="date" name="date">

        <label>Content</label>
        <textarea name="content" id="editor"></textarea>

        <label>Upload Image</label>
        <input type="file" name="image">

        <div class="checkbox-group">
   
</div>

        <button type="submit">Add Post</button>
    </form>

    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount toc',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media | align lineheight | numlist bullist checklist | emoticons charmap | table | toc | removeformat',
            height: 300
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

    .container {
        background: #fff;
        padding: 25px 30px;
        max-width: 700px; /* 👈 reduced width */
        margin: 0 auto;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        border-radius: 8px;
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
        .container {
            padding: 20px;
        }

        .logout {
            float: none;
            display: inline-block;
            margin-bottom: 15px;
        }
    }
</style>

