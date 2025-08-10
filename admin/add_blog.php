<?php require 'auth.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $author = trim($_POST['author']);
    $date = trim($_POST['date']);
    $content = trim($_POST['content']);
    $tagsInput = $_POST['tags'] ?? '';
    $tagsArray = array_filter(array_map('trim', explode(',', $tagsInput)));

    $uploadDir = __DIR__ . '/uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir);

    $imagePath = '';
    if (!empty($_FILES['image']['name'])) {
        $imageName = time() . "_" . basename($_FILES['image']['name']);
        $targetPath = $uploadDir . $imageName;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            $imagePath = 'admin/uploads/' . $imageName; // ✅ Public relative path for front display
        }
    }

    $dataFile = __DIR__ . '/admin/data/blogs.json';
    $blogs = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

    $id = uniqid();
    $blogs[$id] = [
        'title' => $title,
        'author' => $author,
        'date' => $date,
        'content' => $content,
        'image' => $imagePath,
        'tags' => $tagsArray
    ];

    file_put_contents($dataFile, json_encode($blogs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Blog Post</title>
    <script src="https://cdn.jsdelivr.net/npm/tinymce@6.8.3/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f4f6f8; }
        .container { background: #fff; padding: 25px; max-width: 1100px; margin: 20px auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; margin-bottom: 20px; }
        input, textarea { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; font-size: 1rem; }
        label { font-weight: 600; display: block; margin-bottom: 5px; }
        button { padding: 10px 20px; background: #007BFF; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 1rem; }
        button:hover { background: #0056b3; }
        .logout { float: right; background-color: #dc3545; color: white; padding: 8px 12px; text-decoration: none; border-radius: 6px; font-size: 0.9rem; }
        .logout:hover { background-color: #c82333; }
    </style>
</head>
<body>
    <div class="container">
        <a class="logout" href="logout.php">Logout</a>
        <h2>Add New Blog Post</h2>
        <form method="post" enctype="multipart/form-data">
            <label>Title</label>
            <input type="text" name="title" required>

            <label>Author</label>
            <input type="text" name="author">

            <label>Date</label>
            <input type="date" name="date">

            <label>Tags (comma separated)</label>
            <input type="text" name="tags" placeholder="e.g. Education, Scholarships">

            <label>Content</label>
            <textarea name="content" id="editor"></textarea>

            <label>Upload Image</label>
            <input type="file" name="image">

            <button type="submit">Add Post</button>
        </form>
    </div>

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
