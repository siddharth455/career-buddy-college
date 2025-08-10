<?php require 'auth.php'; ?>

<?php
// Load Events
$dataFileEvents = __DIR__ . "/data/events.json";
$events = (file_exists($dataFileEvents) && is_array(json_decode(file_get_contents($dataFileEvents), true)))
    ? json_decode(file_get_contents($dataFileEvents), true)
    : [];

// Load Blog Posts
$dataFileBlogs = __DIR__ . "/data/blogs.json";
$blogs = (file_exists($dataFileBlogs) && is_array(json_decode(file_get_contents($dataFileBlogs), true)))
    ? json_decode(file_get_contents($dataFileBlogs), true)
    : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1000px;
            margin: 30px auto;
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
        }
        .actions {
            text-align: center;
            margin-bottom: 20px;
        }
        .actions a {
            background-color: #007bff;
            color: #fff;
            padding: 10px 16px;
            margin: 5px;
            text-decoration: none;
            border-radius: 6px;
            transition: background 0.2s ease;
            display: inline-block;
        }
        .actions a:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .action-links a {
            color: #007bff;
            margin-right: 10px;
        }
        .action-links a:hover {
            text-decoration: underline;
        }
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }
            table, thead, tbody, th, td, tr {
                display: block;
            }
            tr {
                margin-bottom: 15px;
            }
            th {
                background-color: transparent;
                color: #333;
            }
            td {
                border: none;
                padding: 8px 0;
                text-align: right;
                position: relative;
            }
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 15px;
                font-weight: bold;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Dashboard</h2>
        <div class="actions">
            <a href="add.php">Add Event</a>
            <a href="add_blog.php">Add Blog Post</a>
            <a href="logout.php" style="background:#dc3545;">Logout</a>
        </div>

        <h3>Events</h3>
        <?php if (empty($events)): ?>
            <p>No events found. Click "Add Event" to create one.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr><th>Title</th><th>Date</th><th>Actions</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($events as $id => $event): ?>
                    <tr>
                        <td data-label="Title"><?= htmlspecialchars($event['title']) ?></td>
                        <td data-label="Date"><?= htmlspecialchars($event['date'] ?? 'N/A') ?></td>
                        <td data-label="Actions" class="action-links">
                            <a href="edit.php?id=<?= $id ?>">Edit</a>
                            <a href="delete.php?id=<?= $id ?>" onclick="return confirm('Delete this event?')">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <h3 style="margin-top:40px;">Blog Posts</h3>
        <?php if (empty($blogs)): ?>
            <p>No blog posts found. Click "Add Blog Post" to create one.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr><th>Title</th><th>Date</th><th>Actions</th></tr>
                </thead>
                <tbody>
                    <?php foreach ($blogs as $id => $blog): ?>
                    <tr>
                        <td data-label="Title"><?= htmlspecialchars($blog['title']) ?></td>
                        <td data-label="Date"><?= htmlspecialchars($blog['date'] ?? 'N/A') ?></td>
                        <td data-label="Actions" class="action-links">
                            <a href="edit_blog.php?id=<?= $id ?>">Edit</a>
                            <a href="delete_blog.php?id=<?= $id ?>" onclick="return confirm('Delete this blog post?')">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>