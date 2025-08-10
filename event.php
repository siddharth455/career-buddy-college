<?php require "common/header.php"; ?>
<div class="body-overlay"></div>

<main>
    <!-- breadcrumb start -->
    <section class="breadcrumb bg_img ul_li" data-background="assets/img/uploads/event.webp">
        <div class="container">
            <div class="breadcrumb__content text-center">
                <h2 class="breadcrumb__title"></h2>
                <p class="breadcrumb__desc"></p>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- event start -->
    <section class="event pt-120 pb-120" data-bg-color="#F1F1E9">
        <div class="container">
            <div class="row mt-none-30">
                <?php
                $json_path = 'admin/data/events.json';
                if (!file_exists($json_path)) {
                    echo "<p class='text-danger'>Error: events.json not found.</p>";
                    $events = [];
                } else {
                    $events = json_decode(file_get_contents($json_path), true);
                    if (!is_array($events)) {
                        echo "<p class='text-danger'>Error: Invalid JSON.</p>";
                        $events = [];
                    }
                }

                foreach ($events as $id => $ev):

                    $img = $ev['image'] ?? '';
                    $file = basename($img);
                    if (!empty($img) && file_exists($img)) {
                        $src = $img;
                    } elseif (file_exists("admin/uploads/{$file}")) {
                        $src = "admin/uploads/{$file}";
                    } else {
                        $src = "assets/img/default-event.jpg";
                    }

                    $title = htmlspecialchars($ev['title'] ?? 'No title');
                    $date  = !empty($ev['date'])
                        ? date('d, M Y', strtotime($ev['date']))
                        : 'Date N/A';
                ?>
                    <div class="col-lg-6 event-card">
                        <div class="xb-event-item">
                            <div class="xb-item--img">
                                <a href="event-single.php?id=<?= urlencode($id) ?>">
                                    <img src="<?= $src ?>" alt="<?= $title ?>" class="event-img-fixed">
                                </a>
                            </div>
                            <div class="ul_li xb-item--wrap">
                                <div class="xb-item--content">
                                    <h2 class="xb-item--title border-effect">
                                        <a href="event-single.php?id=<?= urlencode($id) ?>">
                                            <?= $title ?>
                                        </a>
                                    </h2>
                                    <div class="xb-event-btn pt-15">
                                        <a class="thm-btn" href="event-single.php?id=<?= urlencode($id) ?>">
                                            Read More
                                            <span class="icon">
                                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.4795 21C9.10959 21 7.81507 20.7539..."
                                                        fill="#170006" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="xb-item--date-inner text-center">
                                    <div class="xb-item--icon">
                                        <img src="assets/img/icon/note-book.svg" alt="date icon">
                                    </div>
                                    <span class="xb-item--date"><?= $date ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- event end -->
</main>
<?php require "common/footer.php"; ?>
<style>
    .event-img-fixed {
    height: 350px;
    object-fit: cover;
    width: 100%;
    border-radius: 8px;
}

.event-card {
    margin-bottom: 30px; /* vertical gap between cards */
}

</style>