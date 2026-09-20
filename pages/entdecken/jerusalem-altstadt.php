<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Jerusalemer Altstadt – glaube-ich.de";

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
    content="Entdecke die Jerusalemer Altstadt und ihre besondere Bedeutung für Geschichte, Glauben und Pilgerreise."
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
              Altstadt
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Jerusalem entdecken
          </span>

          <h1>
            Die Jerusalemer Altstadt
          </h1>

          <p>
            Ein Ort voller Geschichte, Glauben,
            Begegnungen und jahrhundertealter Traditionen.
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
            Eine Stadt mit vielen Geschichten
          </h2>

          <p>
            Die Altstadt von Jerusalem ist geprägt
            von engen Gassen, historischen Bauwerken,
            religiösen Stätten und einer Geschichte,
            die über viele Jahrhunderte hinweg
            verschiedene Kulturen und Glaubenstraditionen
            miteinander verbunden hat.
          </p>

        </div>

      </section>

      <!-- BEREICHE -->

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Entdecken
            </span>

            <h2>
              Was macht die Altstadt besonders?
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              🏛
            </div>

            <h3>
              Geschichte
            </h3>

            <p>
              In der Altstadt begegnen sich Spuren
              unterschiedlicher Epochen und Kulturen.
              Viele Gebäude und Wege erzählen
              von einer langen und wechselvollen Geschichte.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              ✝
            </div>

            <h3>
              Christliche Stätten
            </h3>

            <p>
              Zahlreiche Orte erinnern an Ereignisse
              aus dem Leben Jesu und spielen
              bis heute eine wichtige Rolle
              für Pilgerinnen und Pilger.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🧭
            </div>

            <h3>
              Wege und Gassen
            </h3>

            <p>
              Die engen Straßen und Gassen
              führen durch unterschiedliche Viertel
              und verbinden viele der bedeutenden Orte
              innerhalb der Stadtmauern.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🕯
            </div>

            <h3>
              Pilgerort
            </h3>

            <p>
              Für viele Menschen ist Jerusalem
              nicht nur ein historisches Reiseziel,
              sondern auch ein Ort des Gebets,
              der Besinnung und des Glaubens.
            </p>

          </article>

        </div>

      </section>

      <!-- IMPULSE -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Für deine Reise
            </span>

            <h2>
              Jerusalem bewusst entdecken
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Zeit lassen
            </h3>

            <p>
              Nicht jeder Ort muss schnell besucht werden.
              Oft lohnt es sich, bewusst stehenzubleiben
              und die Atmosphäre wahrzunehmen.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Geschichte verstehen
            </h3>

            <p>
              Die Bedeutung vieler Orte erschließt sich
              besonders gut, wenn man ihren historischen
              und religiösen Hintergrund kennt.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Respekt zeigen
            </h3>

            <p>
              Jerusalem ist für viele Menschen
              ein heiliger Ort. Rücksicht und Respekt
              gegenüber anderen Traditionen gehören
              deshalb zu jedem Besuch.
            </p>

          </article>

        </div>

      </section>

      <!-- NAVIGATION -->

      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/jerusalem.php"
          >
            ← Zurück zu Jerusalem
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/via-dolorosa.php"
          >
            Via Dolorosa →
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