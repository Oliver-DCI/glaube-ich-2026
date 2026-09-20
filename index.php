<?php

require_once __DIR__ . '/includes/functions.php';

$pageTitle = "glaube-ich.de – Glaube. Leben. Entdecken.";
$currentPage = "home";

$latestArticles = getLatestArticles(5);

$featuredArticle = $latestArticles[0] ?? null;
$smallArticles = array_slice($latestArticles, 1, 4);

?>

<!DOCTYPE html>
<html lang="de">

<head>

  <meta charset="UTF-8">

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >

  <title><?= htmlspecialchars($pageTitle) ?></title>

  <meta
    name="description"
    content="Gedanken, Evangelien, Gebete und Impulse für deinen Glaubensweg."
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

  <link
    rel="stylesheet"
    href="/css/variables.css"
  >

  <link
    rel="stylesheet"
    href="/css/style.css"
  >

  <link
    rel="stylesheet"
    href="/css/responsive.css"
  >

</head>

<body>

  <?php
  include __DIR__ . '/includes/sidebar.php';
  ?>

  <div class="page">

    <?php
    include __DIR__ . '/includes/header.php';
    ?>

    <main>

      <!-- HERO -->

      <section class="hero">

        <div class="hero__overlay"></div>

        <div class="hero__content">

          <p class="hero__eyebrow">
            Glaube. Leben. Entdecken.
          </p>

          <h1>
            Entdecke die Botschaft
            <span>Jesu Christi</span>
          </h1>

          <p class="hero__subtitle">
            Tag für Tag.
          </p>

          <p class="hero__description">
            Gedanken, Evangelien und Impulse
            für deinen Glaubensweg.
          </p>

          <div class="hero__actions">

            <a
              href="/pages/heute/tageslesung.php"
              class="button button--primary"
            >
              Tageslesung entdecken
              <span>→</span>
            </a>

            <a
              href="/pages/heute/evangelium.php"
              class="button button--outline-light"
            >
              <span>▶</span>
              Evangelium anhören
            </a>

          </div>

        </div>

        <blockquote class="hero__quote">

          <p>
            „Dein Wort ist meines Fußes Leuchte
            und ein Licht auf meinem Wege.“
          </p>

          <cite>
            Psalm 119,105
          </cite>

        </blockquote>

      </section>


      <!-- HEUTE FÜR DICH -->

      <section class="section">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Dein täglicher Begleiter
            </span>

            <h2>
              Heute für dich
            </h2>

          </div>

          <p
            class="current-date"
            id="currentDate"
          ></p>

        </div>

        <div class="feature-grid">


          <!-- Tageslesung -->

          <article class="feature-card">

            <div
              class="feature-card__image feature-card__image--bible"
            ></div>

            <div class="feature-card__content">

              <div class="feature-card__icon">
                📖
              </div>

              <h3>
                Tageslesung
              </h3>

              <p>
                Die Lesungen und das Evangelium
                des heutigen Tages.
              </p>

              <a href="/pages/heute/tageslesung.php">
                Jetzt lesen →
              </a>

            </div>

          </article>


          <!-- Evangelium -->

          <article class="feature-card">

            <div
              class="feature-card__image feature-card__image--audio"
            ></div>

            <div class="feature-card__content">

              <div class="feature-card__icon">
                🎧
              </div>

              <h3>
                Evangelium hören
              </h3>

              <p>
                Das heutige Evangelium
                als Audio anhören.
              </p>

              <a href="/pages/heute/evangelium.php">
                Jetzt anhören →
              </a>

            </div>

          </article>


          <!-- Gebet -->

          <article class="feature-card">

            <div
              class="feature-card__image feature-card__image--prayer"
            ></div>

            <div class="feature-card__content">

              <div class="feature-card__icon">
                ♡
              </div>

              <h3>
                Gebet erstellen
              </h3>

              <p>
                Finde Worte für das,
                was dich bewegt.
              </p>

              <a href="/pages/werkzeuge/gebet-generator.php">
                Gebet erstellen →
              </a>

            </div>

          </article>

        </div>

      </section>


<!-- IMPULSE UND GEDANKEN -->

<section class="section section--soft">

  <div class="section-heading">

    <div>
      <span class="section-kicker">
        Lesen & entdecken
      </span>

      <h2>
        Impulse & Gedanken
      </h2>
    </div>

    <a
      href="/pages/impulse.php"
      class="section-link"
    >
      Alle Beiträge ansehen →
    </a>

  </div>

  <?php if ($featuredArticle): ?>

    <div class="article-layout">

      <article class="article-feature">

        <div
          class="article-feature__image"
          style="
            background-image:
              linear-gradient(
                rgba(15, 52, 46, 0.06),
                rgba(15, 52, 46, 0.06)
              ),
              url('<?= escape($featuredArticle['image']) ?>');
          "
        ></div>

        <div class="article-feature__content">

          <span class="article-label">
            Aktueller Beitrag
          </span>

          <h3>
            <?= escape($featuredArticle['title']) ?>
          </h3>

          <p>
            <?= escape($featuredArticle['description']) ?>
          </p>

          <div class="article-meta">
            <?= escape($featuredArticle['reading_time']) ?> Lesezeit
            ·
            <?= escape($featuredArticle['category']) ?>
          </div>

          <a
            href="/article.php?slug=<?= urlencode($featuredArticle['slug']) ?>"
            class="button button--primary"
          >
            Beitrag lesen →
          </a>

        </div>

      </article>

      <div class="article-list">

        <?php foreach ($smallArticles as $article): ?>

          <a
            href="/article.php?slug=<?= urlencode($article['slug']) ?>"
            class="article-list__item"
          >

            <strong>
              <?= escape($article['title']) ?>
            </strong>

            <span>
              <?= escape($article['description']) ?>
            </span>

          </a>

        <?php endforeach; ?>

      </div>

    </div>

  <?php else: ?>

    <div class="empty-state">

      <span class="section-kicker">
        Noch keine Beiträge
      </span>

      <h3>
        Es sind noch keine Impulse hinterlegt.
      </h3>

    </div>

  <?php endif; ?>

</section>


      <!-- WERKZEUGE -->

      <section class="section">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Hilfen & Inspiration
            </span>

            <h2>
              Werkzeuge für deinen Glaubensweg
            </h2>

          </div>

        </div>


        <div class="tools-grid">


          <!-- Gebetsgenerator -->

          <article class="tool-card">

            <div class="tool-card__icon">
              🌱
            </div>

            <h3>
              Gebets-Generator
            </h3>

            <p>
              Erstelle ein persönliches Gebet
              zu einem bestimmten Thema
              oder einer Bibelstelle.
            </p>

            <a href="/pages/werkzeuge/gebet-generator.php">
              Gebet erstellen →
            </a>

          </article>


          <!-- Predigtgenerator -->

          <article class="tool-card">

            <div class="tool-card__icon">
              ▤
            </div>

            <h3>
              Predigt-Generator
            </h3>

            <p>
              Lass dir eine Predigt
              zu einem Evangelium
              oder Thema erstellen.
            </p>

            <a href="/pages/werkzeuge/predigt-generator.php">
              Predigt erstellen →
            </a>

          </article>


          <!-- Heilige Schrift -->

          <article class="tool-card">

            <div class="tool-card__icon">
              📖
            </div>

            <h3>
              Die Heilige Schrift
            </h3>

            <p>
              Entdecke das Alte und Neue Testament
              mit Erklärungen und Impulsen.
            </p>

            <a href="/pages/entdecken/bibel.php">
              Bibel öffnen →
            </a>

          </article>

        </div>

      </section>


      <!-- JERUSALEM -->

      <section class="section">

        <div class="jerusalem-banner">

          <div class="jerusalem-banner__content">

            <span class="section-kicker">
              Geschichte. Glaube. Inspiration.
            </span>

            <h2>
              Jerusalem erleben
            </h2>

            <p>
              Entdecke die Stadt,
              ihre Geschichte und ihre besondere
              Bedeutung für den Glauben.
            </p>

          </div>

          <a
            href="/pages/entdecken/jerusalem.php"
            class="button button--primary"
          >
            Zur Jerusalem-Seite →
          </a>

        </div>

      </section>

    </main>


    <?php
    include __DIR__ . '/includes/footer.php';
    ?>

  </div>


  <script src="/js/navigation.js"></script>
  <script src="/js/theme.js"></script>
  <script src="/js/main.js"></script>

</body>

</html>