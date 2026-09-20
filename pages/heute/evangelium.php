<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Evangelium hören – glaube-ich.de";

$currentPage = "evangelium";

$selectedDate = getSelectedDate();

$reading = getReadingForDate($selectedDate);

$previousDate = getPreviousDate($selectedDate);

$nextDate = getNextDate($selectedDate);

$audioPath = "/audio/evangelium/{$selectedDate}.mp3";

$audioFile = __DIR__ . "/../../audio/evangelium/{$selectedDate}.mp3";

$hasAudio = file_exists($audioFile);

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
    content="Das Evangelium des Tages lesen und anhören."
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

      <!-- HERO -->

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
              Evangelium hören
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Hören. Lesen. Wirken lassen.
          </span>

          <h1>
            Evangelium hören
          </h1>

          <p>
            Nimm dir Zeit für das Evangelium
            des jeweiligen Tages.
          </p>

        </div>

      </section>


      <!-- INHALT -->

      <section class="page-content">

        <div class="reading-header">

          <div>

            <span class="section-kicker">
              Evangelium
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

          <div class="gospel-layout">

            <!-- Hauptbereich -->

            <article class="gospel-main">

              <div class="gospel-player">

  <span class="section-kicker">
    Audio
  </span>

  <h3>
    Das Evangelium anhören
  </h3>

  <?php if ($hasAudio): ?>

    <p>
      Höre hier das Evangelium für
      <?= escape(formatGermanDate($selectedDate)) ?>.
    </p>

    <audio
      class="gospel-audio-player"
      controls
      preload="metadata"
    >
      <source
        src="<?= escape($audioPath) ?>"
        type="audio/mpeg"
      >

      Dein Browser unterstützt die Audiowiedergabe nicht.

    </audio>

  <?php else: ?>

    <p>
      Für dieses Datum ist aktuell noch keine Audioaufnahme verfügbar.
    </p>

    <div class="audio-player-placeholder">

      <div class="audio-player-info">

        <strong>
          <?= escape($reading['gospel']['reference']) ?>
        </strong>

        <span>
          Keine MP3-Datei vorhanden
        </span>

      </div>

    </div>

  <?php endif; ?>

</div>


              <div class="gospel-text">

                <span class="section-kicker">
                  Evangelium lesen
                </span>

                <h3>
                  <?= escape($reading['gospel']['title']) ?>
                </h3>

                <?php if (!empty($reading['gospel']['reference'])): ?>

                  <p class="reading-reference">
                    <?= escape($reading['gospel']['reference']) ?>
                  </p>

                <?php endif; ?>


                <?php foreach ($reading['gospel']['paragraphs'] as $paragraph): ?>

                  <p>
                    <?= escape($paragraph) ?>
                  </p>

                <?php endforeach; ?>


                <?php if (!empty($reading['gospel']['quote'])): ?>

                  <blockquote>
                    „<?= escape($reading['gospel']['quote']) ?>“
                  </blockquote>

                <?php endif; ?>

              </div>

            </article>


            <!-- Seitenleiste -->

            <aside class="reading-sidebar">

              <div class="info-card">

                <span class="section-kicker">
                  Tageslesung
                </span>

                <h3>
                  Alle Lesungen
                </h3>

                <p>
                  Lies die erste Lesung,
                  den Antwortpsalm und das Evangelium.
                </p>

                <a
                  href="/pages/heute/tageslesung.php?date=<?= escape($selectedDate) ?>"
                  class="info-card__link"
                >
                  Tageslesung öffnen →
                </a>

              </div>


              <div class="info-card">

                <span class="section-kicker">
                  Tagesimpuls
                </span>

                <h3>
                  Weiterdenken
                </h3>

                <p>
                  Nimm einen Gedanken aus dem Evangelium
                  mit in deinen Tag.
                </p>

                <a
                  href="/pages/heute/tagesimpuls.php?date=<?= escape($selectedDate) ?>"
                  class="info-card__link"
                >
                  Tagesimpuls öffnen →
                </a>

              </div>


              <div class="info-card info-card--accent">

                <span class="section-kicker">
                  Gebet
                </span>

                <h3>
                  Persönlich weitergehen
                </h3>

                <p>
                  Formuliere aus dem Evangelium
                  ein persönliches Gebet.
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
              Noch kein Evangelium
            </span>

            <h3>
              Für diesen Tag ist noch kein Evangelium hinterlegt.
            </h3>

            <p>
              Wir ergänzen die Inhalte Schritt für Schritt.
            </p>

            <a
              href="/pages/heute/evangelium.php?date=2026-09-19"
              class="button button--primary"
            >
              Zum letzten Testtag
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