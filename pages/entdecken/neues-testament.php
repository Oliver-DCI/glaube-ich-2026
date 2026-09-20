<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Neues Testament – glaube-ich.de";

$currentPage = "bibel";

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
    content="Entdecke die Evangelien, die Apostelgeschichte, Briefe und Offenbarung des Neuen Testaments."
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

  <?php include __DIR__ . '/../../includes/sidebar.php'; ?>

  <div class="page">

    <?php include __DIR__ . '/../../includes/header.php'; ?>

    <main>

      <section class="page-hero page-hero--reading">

        <div class="page-hero__overlay"></div>

        <div class="page-hero__content">

          <nav class="breadcrumb">

            <a href="/index.php">
              Startseite
            </a>

            <span>›</span>

            <a href="/pages/entdecken/bibel.php">
              Bibel
            </a>

            <span>›</span>

            <strong>
              Neues Testament
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Die Bibel entdecken
          </span>

          <h1>
            Neues Testament
          </h1>

          <p>
            Entdecke die Evangelien, die ersten christlichen Gemeinden,
            die Briefe und die Hoffnung des Neuen Testaments.
          </p>

        </div>

      </section>

      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Überblick
          </span>

          <h2>
            Jesus Christus und die ersten Christen
          </h2>

          <p>
            Das Neue Testament erzählt vom Leben und Wirken Jesu,
            von seinem Tod und seiner Auferstehung
            sowie von der Entstehung und Entwicklung
            der ersten christlichen Gemeinden.
          </p>

        </div>

      </section>

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Aufbau
            </span>

            <h2>
              Die wichtigsten Bereiche
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              ✝
            </div>

            <h3>
              Die vier Evangelien
            </h3>

            <p>
              Matthäus, Markus, Lukas und Johannes
              berichten aus unterschiedlichen Perspektiven
              über Jesus Christus.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🕊
            </div>

            <h3>
              Apostelgeschichte
            </h3>

            <p>
              Sie erzählt von den ersten Gemeinden,
              der Ausbreitung des Glaubens
              und dem Wirken der Apostel.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              ✉️
            </div>

            <h3>
              Die Briefe
            </h3>

            <p>
              Die Briefe behandeln Glaubensfragen,
              das Leben in den Gemeinden
              und die Bedeutung der christlichen Botschaft.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🌅
            </div>

            <h3>
              Offenbarung
            </h3>

            <p>
              Das letzte Buch der Bibel arbeitet
              mit starken Bildern von Hoffnung,
              Gericht, Erneuerung und Zukunft.
            </p>

          </article>

        </div>

      </section>

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Themen
            </span>

            <h2>
              Worum geht es im Neuen Testament?
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Jesus Christus
            </h3>

            <p>
              Sein Leben, seine Botschaft
              und seine Bedeutung stehen im Mittelpunkt.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Liebe und Nächstenliebe
            </h3>

            <p>
              Die Liebe zu Gott und zum Mitmenschen
              gehört zu den zentralen Themen.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Hoffnung und Auferstehung
            </h3>

            <p>
              Die Auferstehung Jesu wird
              zum Fundament christlicher Hoffnung.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Gemeinschaft
            </h3>

            <p>
              Das Neue Testament zeigt,
              wie sich die ersten Gemeinden entwickelten
              und miteinander Glauben lebten.
            </p>

          </article>

        </div>

      </section>

      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/altes-testament.php"
          >
            ← Altes Testament
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/bibel.php"
          >
            Zur Bibelübersicht →
          </a>

        </div>

      </section>

    </main>

    <?php include __DIR__ . '/../../includes/footer.php'; ?>

  </div>

  <script src="/js/navigation.js"></script>
  <script src="/js/theme.js"></script>
  <script src="/js/main.js"></script>

</body>

</html>