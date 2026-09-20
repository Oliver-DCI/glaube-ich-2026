<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Krankensalbung – glaube-ich.de";
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
    content="Die Krankensalbung – Bedeutung, Zeichen und geistliche Impulse rund um eines der sieben Sakramente."
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
              Krankensalbung
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Sakrament
          </span>

          <h1>
            Krankensalbung
          </h1>

          <p>
            Ein Zeichen von Nähe,
            Trost, Hoffnung und Stärkung
            in Krankheit und schwierigen Lebenssituationen.
          </p>

        </div>

      </section>


      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Bedeutung
          </span>

          <h2>
            Stärkung in Zeiten von Krankheit
          </h2>

          <p>
            Die Krankensalbung richtet sich an Menschen,
            die schwer erkrankt sind oder sich
            in einer besonderen gesundheitlichen Belastung befinden.
            Sie soll Trost schenken, stärken
            und die Nähe Gottes erfahrbar machen.
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
              Was bei der Krankensalbung wichtig ist
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              🫒
            </div>

            <h3>
              Salbung
            </h3>

            <p>
              Die Salbung mit geweihtem Öl
              ist das zentrale sichtbare Zeichen
              dieses Sakraments.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              ✋
            </div>

            <h3>
              Handauflegung
            </h3>

            <p>
              Die Handauflegung steht für Nähe,
              Segen und die Bitte um Kraft
              und Begleitung.
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
              Im Gebet wird die Situation
              des kranken Menschen bewusst
              vor Gott gebracht.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🕯
            </div>

            <h3>
              Hoffnung
            </h3>

            <p>
              Die Krankensalbung erinnert daran,
              dass Krankheit und Leid
              nicht allein getragen werden müssen.
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
              Gedanken in schwierigen Zeiten
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Wo finde ich Trost?
            </h3>

            <p>
              Welche Menschen, Worte
              oder Erinnerungen geben dir Kraft?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was hilft mir Vertrauen zu bewahren?
            </h3>

            <p>
              Gibt es Gebete,
              Gedanken oder Erfahrungen,
              die dir in schweren Zeiten Halt geben?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Wer begleitet mich?
            </h3>

            <p>
              Gibt es Menschen,
              die dir gerade Nähe,
              Unterstützung oder Ruhe schenken?
            </p>

          </article>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/glauben/busse.php"
          >
            ← Zurück zu Buße & Versöhnung
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/glauben/weihe.php"
          >
            Weiter zur Weihe →
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