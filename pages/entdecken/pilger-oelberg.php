<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Pilgerstation Ölberg – glaube-ich.de";
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
    content="Pilgerstation Ölberg in Jerusalem – Aussicht, biblische Bedeutung und geistliche Impulse."
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
              Ölberg
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Pilgerstation 01
          </span>

          <h1>
            Ölberg
          </h1>

          <p>
            Ein Ort mit weitem Blick über Jerusalem
            und großer Bedeutung für den christlichen Glauben.
          </p>

        </div>

      </section>


      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Die Station
          </span>

          <h2>
            Jerusalem von oben betrachten
          </h2>

          <p>
            Vom Ölberg eröffnet sich ein weiter Blick
            auf die Jerusalemer Altstadt.
            Für viele Pilgerinnen und Pilger ist dieser Ort
            ein besonderer Beginn für den Weg durch Jerusalem.
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
              Was dich hier begleitet
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              👁
            </div>

            <h3>
              Blick auf Jerusalem
            </h3>

            <p>
              Die Aussicht hilft dabei,
              viele spätere Stationen räumlich einzuordnen.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🌿
            </div>

            <h3>
              Biblischer Ort
            </h3>

            <p>
              Der Ölberg ist mit verschiedenen
              Ereignissen aus dem Leben Jesu verbunden.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🙏
            </div>

            <h3>
              Stille und Gebet
            </h3>

            <p>
              Der Ort lädt dazu ein,
              bewusst innezuhalten und den Pilgerweg
              mit einem persönlichen Gedanken zu beginnen.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🚶
            </div>

            <h3>
              Beginn des Weges
            </h3>

            <p>
              Von hier führt der Weg weiter
              in Richtung Getsemani und Altstadt.
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
              Nimm dir einen Moment
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Was sehe ich?
            </h3>

            <p>
              Nimm die Stadt bewusst wahr
              und betrachte den Weg, der vor dir liegt.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was bringe ich mit?
            </h3>

            <p>
              Welche Gedanken, Fragen oder Hoffnungen
              begleiten dich auf diesem Weg?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was möchte ich loslassen?
            </h3>

            <p>
              Vielleicht gibt es etwas,
              das du bewusst in diesen Pilgerweg hineinlegen möchtest.
            </p>

          </article>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/pilgerreise.php"
          >
            ← Zur Pilgerreise
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/pilger-getsemani.php"
          >
            Weiter nach Getsemani →
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