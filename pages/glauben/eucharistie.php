<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Eucharistie – glaube-ich.de";
$currentPage = "sakramente";

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
    content="Die Eucharistie – Bedeutung, Zeichen und geistliche Impulse rund um eines der sieben Sakramente."
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

            <a href="/pages/glauben/sakramente.php">
              Sakramente
            </a>

            <span>›</span>

            <strong>
              Eucharistie
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Sakrament
          </span>

          <h1>
            Eucharistie
          </h1>

          <p>
            Gemeinschaft, Erinnerung,
            Dankbarkeit und die Feier
            der Gegenwart Christi.
          </p>

        </div>

      </section>


      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Bedeutung
          </span>

          <h2>
            Gemeinschaft mit Christus und miteinander
          </h2>

          <p>
            Die Eucharistie steht im Mittelpunkt
            des katholischen Gottesdienstes.
            Sie erinnert an das letzte Abendmahl Jesu
            und verbindet die Feiernden miteinander
            und mit Christus.
          </p>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Zeichen
            </span>

            <h2>
              Was bei der Eucharistie wichtig ist
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              🍞
            </div>

            <h3>
              Brot
            </h3>

            <p>
              Das Brot erinnert an das letzte Abendmahl
              und steht für Gemeinschaft,
              Nahrung und das Teilen.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🍷
            </div>

            <h3>
              Wein
            </h3>

            <p>
              Der Wein gehört zur Feier der Eucharistie
              und erinnert an die Worte Jesu
              beim letzten Abendmahl.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🤝
            </div>

            <h3>
              Gemeinschaft
            </h3>

            <p>
              Menschen kommen zusammen,
              hören das Wort Gottes,
              beten und feiern gemeinsam.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🙏
            </div>

            <h3>
              Dank
            </h3>

            <p>
              Das Wort Eucharistie bedeutet Danksagung.
              Die Feier lädt dazu ein,
              dankbar auf das eigene Leben zu schauen.
            </p>

          </article>

        </div>

      </section>


      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Glaubensimpuls
            </span>

            <h2>
              Fragen zur Eucharistie
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Wofür bin ich dankbar?
            </h3>

            <p>
              Welche Menschen, Erfahrungen
              oder kleinen Dinge in deinem Alltag
              möchtest du bewusst wahrnehmen?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was bedeutet Gemeinschaft für mich?
            </h3>

            <p>
              Wo erlebst du echte Verbundenheit
              und wo kannst du selbst dazu beitragen?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was bin ich bereit zu teilen?
            </h3>

            <p>
              Zeit, Aufmerksamkeit,
              Hilfe oder Hoffnung:
              Was kannst du anderen weitergeben?
            </p>

          </article>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/glauben/firmung.php"
          >
            ← Zurück zur Firmung
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/glauben/busse.php"
          >
            Weiter zu Buße & Versöhnung →
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