<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Pilgerstation Grabeskirche – glaube-ich.de";
$currentPage = "pilgerreise";

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
    content="Pilgerstation Grabeskirche in Jerusalem – Kreuzigung, Grab, Auferstehung und geistliche Impulse."
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

            <a href="/pages/entdecken/pilgerreise.php">
              Pilgerreise
            </a>

            <span>›</span>

            <strong>
              Grabeskirche
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Pilgerstation 04
          </span>

          <h1>
            Grabeskirche
          </h1>

          <p>
            Ziel des Pilgerwegs:
            ein Ort von Kreuzigung,
            Grab und Hoffnung auf Auferstehung.
          </p>

        </div>

      </section>


      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Die Station
          </span>

          <h2>
            Ankommen an einem zentralen Ort des Glaubens
          </h2>

          <p>
            Die Grabeskirche ist für viele christliche Pilgerinnen
            und Pilger der Höhepunkt ihres Weges durch Jerusalem.
            In der christlichen Tradition verbindet sich dieser Ort
            mit Kreuzigung, Grab und Auferstehung Jesu.
          </p>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Am Ziel
            </span>

            <h2>
              Was dieser Ort verbindet
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              ✝
            </div>

            <h3>
              Kreuz
            </h3>

            <p>
              Die Grabeskirche erinnert
              an das Leiden und die Kreuzigung Jesu.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🪨
            </div>

            <h3>
              Grab
            </h3>

            <p>
              Der mit dem Grab Jesu verbundene Ort
              steht im Mittelpunkt vieler Gebete
              und Pilgertraditionen.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🌅
            </div>

            <h3>
              Auferstehung
            </h3>

            <p>
              Der Pilgerweg endet nicht bei Leid und Tod,
              sondern bei der christlichen Hoffnung
              auf neues Leben.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🕯
            </div>

            <h3>
              Gebet
            </h3>

            <p>
              Die Kirche lädt dazu ein,
              den zurückgelegten Weg in Stille,
              Dankbarkeit und Gebet abzuschließen.
            </p>

          </article>

        </div>

      </section>


      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Pilgerimpuls
            </span>

            <h2>
              Am Ende des Weges
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Was nehme ich mit?
            </h3>

            <p>
              Welcher Gedanke oder welche Erfahrung
              dieses Pilgerwegs bleibt besonders bei dir?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Wofür bin ich dankbar?
            </h3>

            <p>
              Nimm dir einen Moment,
              um bewusst auf Menschen,
              Erfahrungen und Hoffnung zurückzublicken.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was beginnt neu?
            </h3>

            <p>
              Eine Pilgerreise endet nicht unbedingt
              am Zielort. Vielleicht beginnt hier
              ein neuer Gedanke für deinen Alltag.
            </p>

          </article>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/pilger-via-dolorosa.php"
          >
            ← Zurück zur Via Dolorosa
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/pilgerreise.php"
          >
            Zur Pilgerreise-Übersicht →
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