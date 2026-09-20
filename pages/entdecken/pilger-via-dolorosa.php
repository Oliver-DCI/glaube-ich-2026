<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Pilgerstation Via Dolorosa – glaube-ich.de";
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
    content="Pilgerstation Via Dolorosa in Jerusalem – der traditionelle Kreuzweg durch die Altstadt."
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
              Via Dolorosa
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Pilgerstation 03
          </span>

          <h1>
            Via Dolorosa
          </h1>

          <p>
            Der traditionelle Kreuzweg
            durch die Jerusalemer Altstadt.
          </p>

        </div>

      </section>


      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Die Station
          </span>

          <h2>
            Ein Weg durch die Altstadt
          </h2>

          <p>
            Die Via Dolorosa führt durch enge Gassen
            der Jerusalemer Altstadt.
            Für viele Pilgerinnen und Pilger ist sie
            ein Weg der Erinnerung an den Leidensweg Jesu
            und zugleich ein Ort des persönlichen Nachdenkens.
          </p>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Auf dem Weg
            </span>

            <h2>
              Was die Via Dolorosa ausmacht
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              ✝
            </div>

            <h3>
              Kreuzweg
            </h3>

            <p>
              Die traditionelle Route verbindet
              verschiedene Stationen des Kreuzwegs.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🚶
            </div>

            <h3>
              Unterwegs sein
            </h3>

            <p>
              Der Weg selbst wird zum Teil
              der Pilgererfahrung:
              Schritt für Schritt durch Jerusalem.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🕯
            </div>

            <h3>
              Erinnerung
            </h3>

            <p>
              Die Stationen laden dazu ein,
              sich mit Leiden, Mitgefühl
              und menschlicher Verletzlichkeit auseinanderzusetzen.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🏛
            </div>

            <h3>
              Lebendige Altstadt
            </h3>

            <p>
              Die Via Dolorosa führt nicht durch einen abgeschlossenen Raum,
              sondern mitten durch das alltägliche Leben Jerusalems.
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
              Gedanken für diesen Weg
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Welche Last trage ich?
            </h3>

            <p>
              Gibt es etwas,
              das dich gerade besonders beschäftigt
              oder Kraft kostet?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Wem kann ich beistehen?
            </h3>

            <p>
              Gibt es einen Menschen,
              der gerade Unterstützung,
              Nähe oder Mitgefühl braucht?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was hilft mir weiterzugehen?
            </h3>

            <p>
              Welche Hoffnung, welcher Glaube
              oder welche Begegnung gibt dir Kraft?
            </p>

          </article>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/pilger-getsemani.php"
          >
            ← Zurück nach Getsemani
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/pilger-grabeskirche.php"
          >
            Weiter zur Grabeskirche →
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