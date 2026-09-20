<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Podcast – glaube-ich.de";

$currentPage = "podcast";

$podcasts = getPodcasts();

$featuredPodcast = $podcasts[0] ?? null;

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
    content="Podcasts, Gedanken und Impulse rund um Glaube, Bibel und christliches Leben."
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
              Podcast
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Hören & entdecken
          </span>

          <h1>
            Podcast
          </h1>

          <p>
            Gedanken, Geschichten und Impulse
            über Glaube, Bibel und christliches Leben.
          </p>

        </div>

      </section>


      <!-- PODCAST INTRO -->

      <section class="page-content">

        <div class="podcast-intro">

          <div>

            <span class="section-kicker">
              glaube-ich.de Podcast
            </span>

            <h2>
              Nimm dir Zeit zum Zuhören
            </h2>

            <p>
              Hier entstehen nach und nach Podcast-Folgen
              zu Glauben, Bibel, Evangelium und den Fragen,
              die uns im Alltag bewegen.
            </p>

          </div>

          <div class="podcast-intro__icon">
            🎙
          </div>

        </div>

      </section>


      <!-- AKTUELLE FOLGE -->

      <?php if ($featuredPodcast): ?>

        <section class="page-content">

          <div class="section-heading">

            <div>

              <span class="section-kicker">
                Aktuelle Folge
              </span>

              <h2>
                Neu im Podcast
              </h2>

            </div>

          </div>

          <article class="podcast-feature">

            <div class="podcast-feature__visual">

              <div class="podcast-cover-symbol">
                🎧
              </div>

            </div>

            <div class="podcast-feature__content">

              <span class="podcast-badge">

                Folge <?= str_pad(
                  (string) $featuredPodcast['episode'],
                  2,
                  '0',
                  STR_PAD_LEFT
                ) ?>

              </span>

              <h3>
                <?= escape($featuredPodcast['title']) ?>
              </h3>

              <p>
                <?= escape($featuredPodcast['description']) ?>
              </p>

              <div class="podcast-meta">

                <span>
                  <?= escape($featuredPodcast['duration']) ?>
                </span>

                <span>·</span>

                <span>
                  <?= escape(formatGermanDate($featuredPodcast['date'])) ?>
                </span>

              </div>

              <?php if (podcastAudioExists($featuredPodcast['audio'])): ?>

                <audio
                  class="podcast-audio-player"
                  controls
                  preload="metadata"
                >

                  <source
                    src="<?= escape($featuredPodcast['audio']) ?>"
                    type="audio/mpeg"
                  >

                  Dein Browser unterstützt die Audiowiedergabe nicht.

                </audio>

              <?php else: ?>

                <div class="podcast-player-placeholder">

                  <div class="audio-player-info">

                    <strong>
                      <?= escape($featuredPodcast['title']) ?>
                    </strong>

                    <span>
                      Noch keine MP3-Datei vorhanden
                    </span>

                  </div>

                </div>

              <?php endif; ?>

            </div>

          </article>

        </section>

      <?php endif; ?>


      <!-- WEITERE FOLGEN -->

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Weitere Folgen
            </span>

            <h2>
              Mehr zum Anhören
            </h2>

          </div>

        </div>

        <div class="podcast-grid">

          <?php foreach (array_slice($podcasts, 1) as $podcast): ?>

            <article class="podcast-card">

              <div class="podcast-card__number">

                <?= str_pad(
                  (string) $podcast['episode'],
                  2,
                  '0',
                  STR_PAD_LEFT
                ) ?>

              </div>

              <span class="section-kicker">
                Podcast
              </span>

              <h3>
                <?= escape($podcast['title']) ?>
              </h3>

              <p>
                <?= escape($podcast['description']) ?>
              </p>

              <div class="podcast-card__meta">

                <?= escape($podcast['duration']) ?>

                ·

                <?= escape(formatGermanDate($podcast['date'])) ?>

              </div>

              <?php if (podcastAudioExists($podcast['audio'])): ?>

                <audio
                  class="podcast-card__audio"
                  controls
                  preload="metadata"
                >

                  <source
                    src="<?= escape($podcast['audio']) ?>"
                    type="audio/mpeg"
                  >

                  Dein Browser unterstützt die Audiowiedergabe nicht.

                </audio>

              <?php else: ?>

                <div class="podcast-card__unavailable">
                  Audio folgt
                </div>

              <?php endif; ?>

            </article>

          <?php endforeach; ?>

        </div>

      </section>


      <!-- WEITER ENTDECKEN -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Weiter entdecken
            </span>

            <h2>
              Dein täglicher Begleiter
            </h2>

          </div>

        </div>

        <div class="tools-grid">

          <article class="tool-card">

            <div class="tool-card__icon">
              📖
            </div>

            <h3>
              Tageslesung
            </h3>

            <p>
              Entdecke die Lesungen
              und das Evangelium des Tages.
            </p>

            <a href="/pages/heute/tageslesung.php">
              Tageslesung öffnen →
            </a>

          </article>

          <article class="tool-card">

            <div class="tool-card__icon">
              ☀
            </div>

            <h3>
              Tagesimpuls
            </h3>

            <p>
              Ein kurzer Gedanke,
              der dich durch den Tag begleitet.
            </p>

            <a href="/pages/heute/tagesimpuls.php">
              Tagesimpuls öffnen →
            </a>

          </article>

          <article class="tool-card">

            <div class="tool-card__icon">
              🎧
            </div>

            <h3>
              Evangelium hören
            </h3>

            <p>
              Lies und höre
              das Evangelium des Tages.
            </p>

            <a href="/pages/heute/evangelium.php">
              Evangelium öffnen →
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