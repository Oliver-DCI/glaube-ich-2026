<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Tageslesung – glaube-ich.de";
$currentPage = "tageslesung";

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
    content="Die Lesungen, Psalmen und das Evangelium des heutigen Tages."
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
            <span>Heute</span>
            <span>›</span>

            <strong>
              Tageslesung
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Gottes Wort für heute
          </span>

          <h1>
            Tageslesung
          </h1>

          <p>
            Die Lesungen, Psalmen und das Evangelium
            des jeweiligen Tages.
          </p>

        </div>

      </section>


      <section class="page-content">

        <div class="reading-header">

          <div>

            <span class="section-kicker">
              Tageslesung
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

          <div class="reading-layout">

            <article class="reading-main">

              <?php
              $sections = [
                  $reading['first_reading'],
                  $reading['psalm'],
                  $reading['second_reading'],
                  $reading['gospel']
              ];
              ?>

              <?php foreach ($sections as $section): ?>

                <section
                  class="reading-block
                  <?= $section['label'] === 'Evangelium'
                      ? 'reading-block--gospel'
                      : '' ?>"
                >

                  <div class="reading-block__label">
                    <?= escape($section['label']) ?>
                  </div>

                  <h3>
                    <?= escape($section['title']) ?>
                  </h3>

                  <?php if (!empty($section['reference'])): ?>

                    <p class="reading-reference">
                      <?= escape($section['reference']) ?>
                    </p>

                  <?php endif; ?>

                  <?php foreach ($section['paragraphs'] as $paragraph): ?>

                    <p>
                      <?= escape($paragraph) ?>
                    </p>

                  <?php endforeach; ?>

                  <?php if (!empty($section['quote'])): ?>

                    <blockquote>
                      „<?= escape($section['quote']) ?>“
                    </blockquote>

                  <?php endif; ?>

                </section>

              <?php endforeach; ?>

            </article>


            <aside class="reading-sidebar">

              <div class="info-card">

                <span class="section-kicker">
                  Evangelium anhören
                </span>

                <h3>
                  Heute als Audio
                </h3>

                <p>
                  Höre das heutige Evangelium
                  in Ruhe an.
                </p>

                <a
                  href="/pages/heute/evangelium.php?date=<?= escape($selectedDate) ?>"
                  class="audio-button"
                >
                  <span>▶</span>
                  Evangelium öffnen
                </a>

              </div>


              <div class="info-card">

                <span class="section-kicker">
                  Impuls
                </span>

                <h3>
                  Gedanke für diesen Tag
                </h3>

                <p>
                  <?= escape($reading['impulse']) ?>
                </p>

                <a
                  href="/pages/heute/tagesimpuls.php?date=<?= escape($selectedDate) ?>"
                  class="info-card__link"
                >
                  Zum Tagesimpuls →
                </a>

              </div>


              <div class="info-card info-card--accent">

                <span class="section-kicker">
                  Gebet
                </span>

                <h3>
                  Mit dem Wort weitergehen
                </h3>

                <p>
                  Lass aus der heutigen Lesung
                  ein persönliches Gebet entstehen.
                </p>

                <a
                  href="/pages/werkzeuge/gebet-generator.php"
                  class="button button--primary"
                >
                  Gebet erstellen →
                </a>

              </div>


              <div class="info-card">

                <span class="section-kicker">
                  Vertiefen
                </span>

                <h3>
                  Bibelstudium
                </h3>

                <p>
                  Entdecke Hintergründe,
                  Zusammenhänge und Erklärungen.
                </p>

                <a
                  href="/pages/entdecken/bibelstudium.php"
                  class="info-card__link"
                >
                  Bibelstudium öffnen →
                </a>

              </div>

            </aside>

          </div>

        <?php else: ?>

          <div class="empty-state">

            <span class="section-kicker">
              Noch keine Inhalte
            </span>

            <h3>
              Für diesen Tag ist noch keine Tageslesung hinterlegt.
            </h3>

            <p>
              Wir ergänzen die Lesungen Schritt für Schritt.
            </p>

            <a
              href="/pages/heute/tageslesung.php?date=2026-09-19"
              class="button button--primary"
            >
              Zur aktuellen Testlesung
            </a>

          </div>

        <?php endif; ?>

      </section>


      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Mehr entdecken
            </span>

            <h2>
              Vertiefe den heutigen Text
            </h2>

          </div>

        </div>

        <div class="tools-grid">

          <article class="tool-card">

            <div class="tool-card__icon">
              🎧
            </div>

            <h3>
              Evangelium hören
            </h3>

            <p>
              Das Evangelium des gewählten Tages
              als Audio anhören.
            </p>

            <a
              href="/pages/heute/evangelium.php?date=<?= escape($selectedDate) ?>"
            >
              Jetzt anhören →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              📖
            </div>

            <h3>
              Bibelstudium
            </h3>

            <p>
              Entdecke Hintergründe,
              Zusammenhänge und Erklärungen.
            </p>

            <a href="/pages/entdecken/bibelstudium.php">
              Bibelstudium öffnen →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              ✦
            </div>

            <h3>
              Persönliches Gebet
            </h3>

            <p>
              Nimm den Text
              mit in dein persönliches Gebet.
            </p>

            <a href="/pages/werkzeuge/gebet-generator.php">
              Gebet erstellen →
            </a>

          </article>

        </div>

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