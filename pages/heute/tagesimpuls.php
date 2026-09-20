<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Tagesimpuls – glaube-ich.de";
$currentPage = "tagesimpuls";

$selectedDate = getSelectedDate();
$reading = getReadingForDate($selectedDate);

$previousDate = getPreviousDate($selectedDate);
$nextDate = getNextDate($selectedDate);

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
    content="Ein geistlicher Impuls für den heutigen Tag."
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

  <?php
  include __DIR__ . '/../../includes/sidebar.php';
  ?>

  <div class="page">

    <?php
    include __DIR__ . '/../../includes/header.php';
    ?>

    <main>

      <section class="page-hero page-hero--reading">

        <div class="page-hero__overlay"></div>

        <div class="page-hero__content">

          <nav class="breadcrumb">

            <a href="/index.php">
              Startseite
            </a>

            <span>›</span>

            <span>
              Heute
            </span>

            <span>›</span>

            <strong>
              Tagesimpuls
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Ein Gedanke für deinen Tag
          </span>

          <h1>
            Tagesimpuls
          </h1>

          <p>
            Ein kurzer geistlicher Impuls,
            der dich durch den Tag begleiten kann.
          </p>

        </div>

      </section>


      <section class="page-content">

        <div class="reading-header">

          <div>

            <span class="section-kicker">
              Impuls
            </span>

            <h2>
              <?= escape(formatGermanDate($selectedDate)) ?>
            </h2>

          </div>

          <div class="reading-actions">

            <a
              class="secondary-button"
              href="?date=<?= escape($previousDate) ?>"
            >
              ◀ Vorheriger Tag
            </a>

            <a
              class="secondary-button"
              href="?date=<?= escape($nextDate) ?>"
            >
              Nächster Tag ▶
            </a>

          </div>

        </div>


        <?php if ($reading): ?>

          <div class="impulse-layout">

            <article class="impulse-main">

              <span class="section-kicker">
                Gedanke für heute
              </span>

              <h3>
                Nimm dir einen Moment
              </h3>

              <p class="impulse-text">
                <?= escape($reading['impulse']) ?>
              </p>

              <?php if (!empty($reading['gospel']['quote'])): ?>

                <blockquote>
                  „<?= escape($reading['gospel']['quote']) ?>“
                </blockquote>

              <?php endif; ?>

              <div class="impulse-actions">

                <a
                  href="/pages/heute/tageslesung.php?date=<?= escape($selectedDate) ?>"
                  class="button button--primary"
                >
                  Zur Tageslesung →
                </a>

                <a
                  href="/pages/heute/evangelium.php?date=<?= escape($selectedDate) ?>"
                  class="secondary-button"
                >
                  Evangelium hören
                </a>

              </div>

            </article>


            <aside class="reading-sidebar">

              <div class="info-card">

                <span class="section-kicker">
                  Tageslesung
                </span>

                <h3>
                  Gottes Wort lesen
                </h3>

                <p>
                  Entdecke die Lesungen, den Psalm
                  und das Evangelium dieses Tages.
                </p>

                <a
                  href="/pages/heute/tageslesung.php?date=<?= escape($selectedDate) ?>"
                  class="info-card__link"
                >
                  Tageslesung öffnen →
                </a>

              </div>


              <div class="info-card info-card--accent">

                <span class="section-kicker">
                  Gebet
                </span>

                <h3>
                  Aus dem Impuls beten
                </h3>

                <p>
                  Nimm den Gedanken mit
                  in dein persönliches Gebet.
                </p>

                <a
                  href="/pages/werkzeuge/gebet-generator.php"
                  class="button button--primary"
                >
                  Gebet erstellen →
                </a>

              </div>

            </aside>

          </div>

        <?php else: ?>

          <div class="empty-state">

            <span class="section-kicker">
              Noch kein Impuls
            </span>

            <h3>
              Für diesen Tag ist noch kein Tagesimpuls hinterlegt.
            </h3>

            <p>
              Wir ergänzen die Inhalte Schritt für Schritt.
            </p>

            <a
              href="/pages/heute/tagesimpuls.php?date=2026-09-19"
              class="button button--primary"
            >
              Zum letzten Testimpuls
            </a>

          </div>

        <?php endif; ?>

      </section>

    </main>

    <?php
    include __DIR__ . '/../../includes/footer.php';
    ?>

  </div>

  <script src="/js/navigation.js"></script>
  <script src="/js/theme.js"></script>
  <script src="/js/main.js"></script>

</body>

</html>