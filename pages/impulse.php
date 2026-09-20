<?php

require_once __DIR__ . '/../includes/functions.php';

$pageTitle = "Impulse & Gedanken – glaube-ich.de";
$currentPage = "";

$articles = getArticles();

?>

<!DOCTYPE html>
<html lang="de">

<head>

  <meta charset="UTF-8">

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >

  <title><?= escape($pageTitle) ?></title>

  <meta
    name="description"
    content="Impulse, Gedanken und Beiträge rund um Glaube, Bibel und christliches Leben."
  >

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin
  >

  <link
    href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  >

  <link rel="stylesheet" href="/css/variables.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/responsive.css">
  <link rel="stylesheet" href="/css/pages.css">

</head>

<body>

  <?php
  include __DIR__ . '/../includes/sidebar.php';
  ?>

  <div class="page">

    <?php
    include __DIR__ . '/../includes/header.php';
    ?>

    <main>

      <!-- HERO -->

      <section class="page-hero page-hero--reading">

        <div class="page-hero__overlay"></div>

        <div class="page-hero__content">

          <nav class="breadcrumb">

            <a href="/index.php">
              Startseite
            </a>

            <span>›</span>

            <strong>
              Impulse & Gedanken
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Lesen & entdecken
          </span>

          <h1>
            Impulse & Gedanken
          </h1>

          <p>
            Geschichten, Gedanken und Inspirationen
            für deinen Glaubensweg.
          </p>

        </div>

      </section>


      <!-- ARTIKEL -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Alle Beiträge
            </span>

            <h2>
              Entdecke unsere Impulse
            </h2>

          </div>

          <p class="article-count">
            <?= count($articles) ?> Beiträge
          </p>

        </div>


        <?php if (!empty($articles)): ?>

          <div class="articles-grid">

            <?php foreach ($articles as $article): ?>

              <article class="article-card">

                <a
                  href="/article.php?slug=<?= urlencode($article['slug']) ?>"
                  class="article-card__image"
                  style="
                    background-image:
                      linear-gradient(
                        rgba(15, 52, 46, 0.05),
                        rgba(15, 52, 46, 0.05)
                      ),
                      url('<?= escape($article['image']) ?>');
                  "
                >

                  <span class="article-card__category">
                    <?= escape($article['category']) ?>
                  </span>

                </a>


                <div class="article-card__content">

                  <div class="article-card__meta">

                    <span>
                      <?= escape(formatGermanDate($article['date'])) ?>
                    </span>

                    <span>·</span>

                    <span>
                      <?= escape($article['reading_time']) ?>
                    </span>

                  </div>


                  <h3>

                    <a
                      href="/article.php?slug=<?= urlencode($article['slug']) ?>"
                    >
                      <?= escape($article['title']) ?>
                    </a>

                  </h3>


                  <p>
                    <?= escape($article['description']) ?>
                  </p>


                  <a
                    href="/article.php?slug=<?= urlencode($article['slug']) ?>"
                    class="article-card__link"
                  >
                    Beitrag lesen →
                  </a>

                </div>

              </article>

            <?php endforeach; ?>

          </div>

        <?php else: ?>

          <div class="empty-state">

            <span class="section-kicker">
              Noch keine Beiträge
            </span>

            <h3>
              Aktuell sind noch keine Beiträge vorhanden.
            </h3>

          </div>

        <?php endif; ?>

      </section>

    </main>


    <?php
    include __DIR__ . '/../includes/footer.php';
    ?>

  </div>


  <script src="/js/navigation.js"></script>
  <script src="/js/theme.js"></script>
  <script src="/js/main.js"></script>

</body>

</html>