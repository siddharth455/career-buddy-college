<?php require "common/header.php"; ?>

<?php
// Load blogs
$dataFile = __DIR__ . "/admin/data/blogs.json";
$blogs = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];
$blogs = is_array($blogs) ? array_reverse($blogs) : [];

// Search functionality
$searchQuery = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : '';
if ($searchQuery !== '') {
  $blogs = array_filter($blogs, function ($blog) use ($searchQuery) {
    return strpos(strtolower($blog['title']), $searchQuery) !== false ||
      strpos(strtolower($blog['content']), $searchQuery) !== false ||
      (!empty($blog['tags']) && is_array($blog['tags']) && in_array($searchQuery, array_map('strtolower', $blog['tags'])));
  });
}

// Generate tags dynamically from posted blogs
$tags = [];
foreach ($blogs as $blog) {
  if (!empty($blog['tags']) && is_array($blog['tags'])) {
    foreach ($blog['tags'] as $tag) {
      $tags[$tag] = ($tags[$tag] ?? 0) + 1;
    }
  }
}
arsort($tags);
$popularTags = array_keys($tags);
?>

<style>
  .blog_post_image {
    position: relative;
    width: 100%;
    aspect-ratio: 16/9;
    overflow: hidden;
    border-radius: 10px;
  }

  .blog_post_image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.3s ease;
  }

  .blog_post_image:hover img {
    transform: scale(1.05);
  }

  .blog-slide {
    width: 900px !important;
    margin: 10px auto;
  }

  .main-slide {
    width: 900px !important;
    margin: 10px auto;
  }

  .read-more-btn {
    color: #007bff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 6px;
    font-size: 0.95rem;
    transition: color 0.3s;
  }

  .read-more-btn:hover {
    color: #0056b3;
    text-decoration: underline;
  }
</style>

<main>
  <section class="breadcrumb bg_img ul_li" data-background="assets/img/uploads/blog.webp">
    <div class="container">
      <div class="breadcrumb__content text-center">
        <h2 class="breadcrumb__title"></h2>
        <p class="breadcrumb__desc"></p>
      </div>
    </div>
  </section>

  <section class="blog_section pt-120 pb-120" data-bg-color="#F1F1E9">
    <div class="container">
      <div class="blog_onecol_carousel overflow-hidden main-slide">
        <div class="swiper-wrapper">
          <?php $carousel_count = 0; ?>
          <?php foreach ($blogs as $id => $blog): ?>
            <?php if ($carousel_count++ >= 5) break; ?>
            <?php $imagePath = !empty($blog['image']) ? $blog['image'] : 'assets/img/blog/blog_06.jpg'; ?>
            <div class="swiper-slide blog-slide">
              <div class="blog_post_block content_over_layout">
                <div class="blog_post_image">
                  <a class="image_wrap" href="blog-single.php?id=<?= $id ?>">
                    <img src="<?= htmlspecialchars($imagePath) ?>" alt="Blog Image">
                  </a>
                </div>
                <div class="blog_post_content">
                  <div class="post_meta_wrap">
                    <a class="post_category" href="#">#Blog</a>
                    <ul class="post_meta unordered_list">
                      <li><a href="#"><i class="far fa-clock"></i> <?= htmlspecialchars($blog['date'] ?? date('d/m/Y')) ?></a></li>
                    </ul>
                  </div>
                  <h3 class="blog_post_title border-effect">
                    <a href="blog-single.php?id=<?= $id ?>">
                      <?= htmlspecialchars($blog['title']) ?>
                    </a>
                  </h3>
                  <p><?= htmlspecialchars(substr(strip_tags($blog['content']), 0, 120)) ?>...</p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <button class="b1cc-swiper-button-prev" type="button"></button>
        <button class="b1cc-swiper-button-next" type="button"></button>
        <div class="b1cc-swiper-pagination p-0"></div>
      </div>

      <div class="section_space pb-0">
        <div class="row mt-none-30">
          <div class="col-lg-8 mt-30">
            <?php if (empty($blogs)): ?>
              <p>No blog posts found<?= $searchQuery ? " for \"" . htmlspecialchars($searchQuery) . "\"" : "" ?>.</p>
            <?php else: ?>
              <?php foreach ($blogs as $id => $blog): ?>
                <?php $imagePath = !empty($blog['image']) ? $blog['image'] : 'assets/img/blog/blog_06.jpg'; ?>
                <div class="blog_post_block image_left_layout">
                  <div class="blog_post_image">
                    <a class="image_wrap" href="blog-single.php?id=<?= $id ?>">
                      <img src="<?= htmlspecialchars($imagePath) ?>" alt="Blog Image">
                    </a>
                  </div>
                  <div class="blog_post_content">
                    <div class="post_meta_wrap">
                      <ul class="category_btns_group unordered_list">
                        <li><a href="#">#Blog</a></li>
                      </ul>
                      <ul class="post_meta unordered_list">
                        <li><a href="#"><i class="far fa-clock"></i> <?= htmlspecialchars($blog['date'] ?? date('d/m/Y')) ?></a></li>
                      </ul>
                    </div>
                    <h3 class="blog_post_title border-effect">
                      <a href="blog-single.php?id=<?= $id ?>">
                        <?= htmlspecialchars($blog['title']) ?>
                      </a>
                    </h3>
                    <?php foreach ($blogs as $id => $blog): ?>
                      <a href="blog-single.php?id=<?= urlencode($id) ?>">Read More</a>
                    <?php endforeach; ?>


                    <ul class="post_meta_bottom ul_li">
                      <li><i class="far fa-user"></i> <?= htmlspecialchars($blog['author'] ?? 'Admin') ?></li>
                    </ul>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>

          <div class="col-lg-4 mt-30">
            <aside class="sidebar ps-xl-5">
              <div class="search_form">
                <h3 class="sidebar_widget_title">Search</h3>
                <form method="get" action="">
                  <div class="form-group">
                    <input class="form-control" type="search" name="search" placeholder="Search your keyword" value="<?= htmlspecialchars($searchQuery) ?>">
                    <button type="submit">
                      <img src="assets/img/icon/icon_search.svg" alt="Search Icon">
                    </button>
                  </div>
                </form>
              </div>

              <div class="post_list_block">
                <h3 class="sidebar_widget_title">Recent Posts</h3>
                <ul class="unordered_list_block">
                  <?php $count = 0; ?>
                  <?php foreach ($blogs as $id => $blog): ?>
                    <?php if ($count++ >= 5) break; ?>
                    <?php $imagePath = !empty($blog['image']) ? $blog['image'] : 'assets/img/blog/blog_09.jpg'; ?>
                    <li>
                      <div class="post_image">
                        <a href="blog-single.php?id=<?= $id ?>">
                          <img src="<?= htmlspecialchars($imagePath) ?>" alt="">
                        </a>
                      </div>
                      <div class="post_holder">
                        <h3 class="post_title border-effect-2">
                          <a href="blog-single.php?id=<?= $id ?>"><?= htmlspecialchars($blog['title']) ?></a>
                        </h3>
                        <a class="post_date" href="#"><i class="far fa-clock"></i> <?= htmlspecialchars($blog['date'] ?? date('d/m/Y')) ?></a>
                      </div>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <div class="popular_tags">
                <h3 class="sidebar_widget_title">Popular Tags</h3>
                <?php if (!empty($popularTags)): ?>
                  <ul class="tags_list unordered_list">
                    <?php foreach ($popularTags as $tag): ?>
                      <li><a href="?search=<?= urlencode($tag) ?>"><?= htmlspecialchars($tag) ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                <?php else: ?>
                  <p>No tags available.</p>
                <?php endif; ?>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require "common/footer.php"; ?>