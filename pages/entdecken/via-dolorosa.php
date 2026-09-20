<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Via Dolorosa – glaube-ich.de";

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
    content="Entdecke die Via Dolorosa in Jerusalem und ihre Bedeutung als traditioneller Kreuzweg."
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
              Via Dolorosa
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Jerusalem entdecken
          </span>

          <h1>
            Via Dolorosa
          </h1>

          <p>
            Der traditionelle Kreuzweg durch
            die Jerusalemer Altstadt.
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
            Ein Weg der Erinnerung und Besinnung
          </h2>

          <p>
            Die Via Dolorosa ist der traditionelle Weg,
            auf dem Christinnen und Christen an den Leidensweg
            Jesu erinnern. Sie führt durch die Altstadt
            von Jerusalem bis zur Grabeskirche.
          </p>

        </div>

      </section>

      <!-- BEREICHE -->

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Der Kreuzweg
            </span>

            <h2>
              Stationen des Erinnerns
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              ✝
            </div>

            <h3>
              Der Weg
            </h3>

            <p>
              Die Via Dolorosa führt durch enge Gassen
              der Altstadt und verbindet mehrere traditionelle
              Stationen des Kreuzwegs.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🕯
            </div>

            <h3>
              Gebet und Stille
            </h3>

            <p>
              Viele Pilger nutzen den Weg,
              um bewusst innezuhalten,
              zu beten und über das Leiden Jesu nachzudenken.
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
              Bis heute gehen Menschen aus vielen Ländern
              diesen Weg allein oder in Gruppen.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🏛
            </div>

            <h3>
              Historischer Ort
            </h3>

            <p>
              Die heutige Route ist vor allem
              eine gewachsene religiöse Tradition
              innerhalb der Jerusalemer Altstadt.
            </p>

          </article>

        </div>

      </section>

      <!-- IMPULSE -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Für deinen Besuch
            </span>

            <h2>
              Die Via Dolorosa bewusst erleben
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Langsam gehen
            </h3>

            <p>
              Der Weg lässt sich besser erfahren,
              wenn man sich Zeit nimmt und nicht nur
              von Station zu Station eilt.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Die Umgebung wahrnehmen
            </h3>

            <p>
              Die Via Dolorosa ist Teil einer lebendigen Stadt.
              Märkte, Bewohner, Pilger und Besucher
              begegnen sich hier unmittelbar.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Raum für persönliche Gedanken
            </h3>

            <p>
              Für viele Menschen ist der Kreuzweg
              nicht nur historisch interessant,
              sondern auch ein persönlicher Glaubensweg.
            </p>

          </article>

        </div>

      </section>

      <!-- NAVIGATION -->

      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/jerusalem-altstadt.php"
          >
            ← Altstadt
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/grabeskirche.php"
          >
            Grabeskirche →
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