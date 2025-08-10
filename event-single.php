<?php
require "common/header.php";

// Load event data
$json_file = 'admin/data/events.json';
if (!file_exists($json_file)) {
    die('Event data file not found.');
}
$json_data = file_get_contents($json_file);
$events = json_decode($json_data, true);

// Determine event ID to use
$event_id = $_GET['id'] ?? array_key_first($events);
$event = $events[$event_id] ?? null;

if (!$event) {
    echo "<h2>Event not found</h2><p>The event you're looking for doesn't exist.</p>";
    require "common/footer.php";
    exit;
}

// Prepare event image handling
$img = $event['image'] ?? '';
$file = basename($img);
if (!empty($img) && file_exists($img)) {
    $src = $img;
} elseif (file_exists("admin/uploads/{$file}")) {
    $src = "admin/uploads/{$file}";
} else {
    $src = "assets/img/default-event.jpg";
}

$title = htmlspecialchars($event['title'] ?? 'No title');

// Clean content paths
$content = $event['content'] ?? '<p>No content available for this event.</p>';

// Replace local file paths with public path
$content = str_replace(
    [
        'file:///C:/xampp/htdocs/nursing-landing/uploads/',
        'file:///C:/xampp/htdocs/nursing-landing/uploads\\'
    ],
    'https://careerbuddycollege.com/admin/uploads/',
    $content
);
?>

<!-- Event Page Layout -->
<div class="body-overlay"></div>
<main>
    <section class="breadcrumb bg_img ul_li" data-background="assets/img/uploads/event-cover.webp">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h2 class="breadcrumb__title"><?= $title ?></h2>
            </div>
        </div>
    </section>

    <section class="event-single pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mt-30">
                    <div class="event-single__content" style="text-align: left;">
                        <!-- Event Image -->
                        <div class="event-single__image mb-60">
                            <img src="<?= $src ?>" alt="<?= $title ?>" style="max-width:700px; height:450px; object-fit:cover; border-radius:8px;">

                        </div>

                        <!-- Event Title -->
                        <h2 class="mb-4"><?= $title ?></h2>

                        <!-- Event Content -->
                        <div class="event-single__description" style="text-align: left;">
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require "common/footer.php"; ?>
