<?php require "common/header.php";

// Load JSON
$dataFile = __DIR__ . "/admin/data/blogs.json";
$blogs = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];
$id = isset($_GET['id']) ? $_GET['id'] : null;
$blog = ($id && isset($blogs[$id])) ? $blogs[$id] : null;
$searchQuery = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : '';

$filteredBlogs = [];
if ($searchQuery !== '') {
  foreach ($blogs as $blogId => $b) {
    if (
      strpos(strtolower($b['title']), $searchQuery) !== false ||
      strpos(strtolower(strip_tags($b['content'])), $searchQuery) !== false ||
      in_array($searchQuery, array_map('strtolower', $b['tags']))
    ) {
      $filteredBlogs[$blogId] = $b;
    }
  }
} else {
  $filteredBlogs = $blogs;
}

// Prepare related posts (next 3)
$blogKeys = array_keys($blogs);
$currentIndex = array_search($id, $blogKeys);
$related = [];
if ($currentIndex !== false) {
  for ($i = $currentIndex + 1; $i < $currentIndex + 4 && $i < count($blogKeys); $i++) {
    $related[$blogKeys[$i]] = $blogs[$blogKeys[$i]];
  }
}
?>

<div class="body-overlay"></div>
<main>
<section class="breadcrumb bg_img ul_li" data-background="assets/img/uploads/blog-cover.webp">
    <div class="container">
        <div class="breadcrumb__content text-center">
            <h2 class="breadcrumb__title">
                <?= $blog ? htmlspecialchars($blog['title']) : 'Blog Not Found' ?>
            </h2>
            <p class="breadcrumb__desc">
                <?= $blog && !empty($blog['short_desc']) ? htmlspecialchars($blog['short_desc']) : '' ?>
            </p>
        </div>
    </div>
</section>


  <section class="blog_details_section section_space" data-bg-color="#F1F1E9">
    <div class="container">
      <div class="row mt-none-30">
        <div class="col-lg-8 mt-30">
          <?php if (!$blog): ?>
            <p>No blog found.</p>
          <?php else: ?>
            <div class="details_item_image">
              <img src="<?= htmlspecialchars($blog['image']) ?>" alt="">
            </div>
            <div class="post_meta_wrap mb-4">
              <ul class="category_btns_group unordered_list">
                <?php foreach ($blog['tags'] as $tag): ?>
                  <li><a href="?search=<?= urlencode($tag) ?>">#<?= htmlspecialchars($tag) ?></a></li>
                <?php endforeach; ?>
              </ul>
              <ul class="post_meta unordered_list">
                <li><a href="#!"><i class="far fa-clock"></i> <?= htmlspecialchars($blog['date']) ?></a></li>
              </ul>
            </div>
            <h2 class="details_item_title"><?= htmlspecialchars($blog['title']) ?></h2>
            <div class="details_item_content">
              <?= $blog['content'] ?>
            </div>
          <?php endif; ?>
        </div>

        <div class="col-lg-4 mt-30">
          <aside class="sidebar ps-xl-5">
            <div class="search_form">
              <h3 class="sidebar_widget_title">Search</h3>
              <form method="get">
                <div class="form-group">
                  <input class="form-control" type="search" name="search" placeholder="Search your keyword" value="<?= htmlspecialchars($searchQuery) ?>">
                  <button type="submit"><img src="assets/img/icon/icon_search.svg" alt="Search Icon"></button>
                </div>
              </form>
            </div>

            <div class="post_list_block">
              <h3 class="sidebar_widget_title">Related Posts</h3>
              <ul class="unordered_list_block">
                <?php if (!empty($related)): ?>
                  <?php foreach ($related as $rid => $r): ?>
                    <li>
                      <div class="post_image">
                        <a href="blog-single.php?id=<?= urlencode($rid) ?>">
                          <img src="<?= htmlspecialchars($r['image']) ?>" alt="">
                        </a>
                      </div>
                      <div class="post_holder">
                        <h3 class="post_title border-effect-2">
                          <a href="blog-single.php?id=<?= urlencode($rid) ?>"> <?= htmlspecialchars($r['title']) ?> </a>
                        </h3>
                        <a class="post_date" href="#!"><i class="far fa-clock"></i> <?= htmlspecialchars($r['date']) ?></a>
                      </div>
                    </li>
                  <?php endforeach; ?>
                <?php else: ?>
                  <p>No related posts found.</p>
                <?php endif; ?>
              </ul>
            </div>

            <div class="popular_tags">
              <h3 class="sidebar_widget_title">Popular Tags</h3>
              <ul class="tags_list unordered_list">
                <?php
                $allTags = [];
                foreach ($blogs as $b) {
                  foreach ($b['tags'] as $tag) {
                    $allTags[$tag] = ($allTags[$tag] ?? 0) + 1;
                  }
                }
                arsort($allTags);
                foreach (array_keys($allTags) as $tag): ?>
                  <li>
                    <a href="blog.php?search=<?= urlencode($tag) ?>"> <?= htmlspecialchars($tag) ?> </a>
                  </li>
                <?php endforeach; ?>
              </ul>

            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require "common/footer.php"; ?>