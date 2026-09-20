<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Ölberg – glaube-ich.de";

$currentPage = "jerusalem";

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
    content="Entdecke den Ölberg in Jerusalem und seine besondere Bedeutung für Bibel, Gebet und christliche Tradition."
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

      <!-- HERO -->

      <section class="page-hero page-hero--reading">

        <div class="page-hero__overlay"></div>

        <div class="page-hero__content">

          <nav class="breadcrumb">

            <a href="/index.php">
              Startseite
            </a>

            <span>›</span>

            <a href="/pages/entdecken/jerusalem.php">
              Jerusalem
            </a>

            <span>›</span>

            <strong>
              Ölberg
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Jerusalem entdecken
          </span>

          <h1>
            Der Ölberg
          </h1>

          <p>
            Ein Ort mit weitem Blick über Jerusalem
            und großer Bedeutung in der biblischen Überlieferung.
          </p>

        </div>

      </section>

      <!-- INTRO -->

      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Überblick
          </span>

          <h2>
            Ein besonderer Ort östlich der Altstadt
          </h2>

          <p>
            Der Ölberg liegt östlich der Jerusalemer Altstadt.
            Er ist eng mit zahlreichen biblischen Erzählungen
            verbunden und bietet zugleich einen eindrucksvollen
            Blick auf Jerusalem.
          </p>

        </div>

      </section>

      <!-- BEDEUTUNG -->

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Bedeutung
            </span>

            <h2>
              Der Ölberg in Bibel und Tradition
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              🌿
            </div>

            <h3>
              Biblischer Ort
            </h3>

            <p>
              Der Ölberg wird in verschiedenen
              biblischen Zusammenhängen erwähnt
              und ist besonders mit den letzten Tagen
              Jesu in Jerusalem verbunden.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🙏
            </div>

            <h3>
              Gebet
            </h3>

            <p>
              In der christlichen Tradition
              ist die Umgebung des Ölbergs
              eng mit Gebet, Stille und Besinnung verbunden.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              👁
            </div>

            <h3>
              Blick auf Jerusalem
            </h3>

            <p>
              Vom Ölberg aus eröffnet sich
              ein weiter Blick auf die Jerusalemer Altstadt
              und ihre bedeutenden Bauwerke.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🚶
            </div>

            <h3>
              Pilgerweg
            </h3>

            <p>
              Für viele Pilgerinnen und Pilger
              ist der Ölberg eine wichtige Station
              auf dem Weg durch Jerusalem.
            </p>

          </article>

        </div>

      </section>

      <!-- BESUCH -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Für deinen Besuch
            </span>

            <h2>
              Den Ölberg bewusst erleben
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Aussicht genießen
            </h3>

            <p>
              Der Blick auf Jerusalem hilft dabei,
              viele Orte der Altstadt räumlich
              miteinander in Verbindung zu bringen.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Zeit für Stille
            </h3>

            <p>
              Der Ort eignet sich besonders,
              um nach einem intensiven Tag
              in Jerusalem bewusst innezuhalten.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Zusammenhänge entdecken
            </h3>

            <p>
              Vom Ölberg aus lassen sich
              biblische Orte, Landschaft
              und Geschichte besonders gut zusammendenken.
            </p>

          </article>

        </div>

      </section>

      <!-- NAVIGATION -->

      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/grabeskirche.php"
          >
            ← Grabeskirche
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/jerusalem.php"
          >
            Zur Jerusalem-Übersicht →
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