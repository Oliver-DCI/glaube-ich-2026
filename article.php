<?php

require_once __DIR__ . '/includes/functions.php';

$slug = $_GET['slug'] ?? '';
$article = getArticleBySlug($slug);

$currentPage = '';

if ($article) {
    $pageTitle = $article['title'] . ' – glaube-ich.de';
} else {
    $pageTitle = 'Beitrag nicht gefunden – glaube-ich.de';
}

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

<?php include __DIR__ . '/includes/sidebar.php'; ?>

<div class="page">

  <?php include __DIR__ . '/includes/header.php'; ?>

  <main>

    <?php if ($article): ?>

      <section
        class="article-hero"
        style="
          background-image:
          linear-gradient(
            90deg,
            rgba(8,31,27,0.88),
            rgba(8,31,27,0.38)
          ),
          url('<?= escape($article['image']) ?>');
        "
      >

        <div class="article-hero__content">

          <nav class="breadcrumb">

            <a href="/index.php">
              Startseite
            </a>

            <span>›</span>

            <span>
              Impulse & Gedanken
            </span>

            <span>›</span>

            <strong>
              <?= escape($article['title']) ?>
            </strong>

          </nav>

          <span class="page-hero__kicker">
            <?= escape($article['category']) ?>
          </span>

          <h1>
            <?= escape($article['title']) ?>
          </h1>

          <p>
            <?= escape($article['description']) ?>
          </p>

          <div class="article-hero__meta">

            <span>
              <?= escape(formatGermanDate($article['date'])) ?>
            </span>

            <span>·</span>

            <span>
              <?= escape($article['reading_time']) ?> Lesezeit
            </span>

          </div>

        </div>

      </section>


      <section class="article-page">

        <article class="article-body">

          <?php foreach ($article['content'] as $paragraph): ?>

            <p>
              <?= escape($paragraph) ?>
            </p>

          <?php endforeach; ?>

        </article>


        <aside class="article-aside">

          <div class="info-card">

            <span class="section-kicker">
              Weiterdenken
            </span>

            <h3>
              Nimm den Gedanken mit
            </h3>

            <p>
              Lass den Beitrag in Ruhe nachwirken
              und nimm einen Gedanken mit in deinen Alltag.
            </p>

          </div>


          <div class="info-card info-card--accent">

            <span class="section-kicker">
              Gebet
            </span>

            <h3>
              Persönlich weitergehen
            </h3>

            <p>
              Formuliere aus diesem Gedanken
              ein persönliches Gebet.
            </p>

            <a
              href="/pages/werkzeuge/gebet-generator.php"
              class="button button--primary"
            >
              Gebet erstellen →
            </a>

          </div>

        </aside>

      </section>

    <?php else: ?>

      <section class="page-content">

        <div class="empty-state">

          <span class="section-kicker">
            Nicht gefunden
          </span>

          <h3>
            Dieser Beitrag existiert nicht.
          </h3>

          <p>
            Der gewünschte Beitrag konnte nicht gefunden werden.
          </p>

          <a
            href="/index.php"
            class="button button--primary"
          >
            Zur Startseite
          </a>

        </div>

      </section>

    <?php endif; ?>

  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

</div>

<script src="/js/navigation.js"></script>
<script src="/js/theme.js"></script>
<script src="/js/main.js"></script>

</body>

</html>