<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Pilgerstation Getsemani – glaube-ich.de";
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
    content="Pilgerstation Getsemani in Jerusalem – ein Ort des Gebets, der Entscheidung und der Stille."
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
              Getsemani
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Pilgerstation 02
          </span>

          <h1>
            Getsemani
          </h1>

          <p>
            Ein Ort des Gebets,
            der inneren Auseinandersetzung
            und der Entscheidung.
          </p>

        </div>

      </section>


      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Die Station
          </span>

          <h2>
            Ein Garten voller Bedeutung
          </h2>

          <p>
            Getsemani ist in der christlichen Überlieferung
            eng mit den letzten Stunden Jesu vor seiner Gefangennahme verbunden.
            Der Ort steht für Gebet, Angst, Vertrauen
            und die bewusste Annahme eines schweren Weges.
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
              Was Getsemani besonders macht
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              🌿
            </div>

            <h3>
              Garten und Ölbaum
            </h3>

            <p>
              Die Umgebung mit ihren alten Olivenbäumen
              vermittelt bis heute eine besondere Atmosphäre
              von Ruhe und Erinnerung.
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
              Getsemani erinnert daran,
              dass Gebet auch in Momenten von Angst,
              Zweifel und Unsicherheit seinen Platz hat.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🕯
            </div>

            <h3>
              Entscheidung
            </h3>

            <p>
              Der Ort steht sinnbildlich
              für das Ringen mit einem schweren Weg
              und für bewusstes Vertrauen.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🚶
            </div>

            <h3>
              Weitergehen
            </h3>

            <p>
              Nach Getsemani führt die Pilgerreise
              weiter in Richtung Altstadt
              und zur Via Dolorosa.
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
              Fragen für diesen Ort
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Was belastet mich?
            </h3>

            <p>
              Gibt es etwas,
              das du gerade nur schwer tragen kannst?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Wo suche ich Halt?
            </h3>

            <p>
              Welche Menschen,
              Gedanken oder Gebete geben dir Kraft?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Welchen Weg möchte ich gehen?
            </h3>

            <p>
              Gibt es eine Entscheidung,
              die Mut, Vertrauen oder Geduld von dir verlangt?
            </p>

          </article>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/pilger-oelberg.php"
          >
            ← Zurück zum Ölberg
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/pilger-via-dolorosa.php"
          >
            Weiter zur Via Dolorosa →
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