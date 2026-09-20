<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Altes Testament – glaube-ich.de";

$currentPage = "bibel";

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
    content="Entdecke die Bücher, Themen und Hintergründe des Alten Testaments."
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

            <a href="/pages/entdecken/bibel.php">
              Bibel
            </a>

            <span>›</span>

            <strong>
              Altes Testament
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Die Bibel entdecken
          </span>

          <h1>
            Altes Testament
          </h1>

          <p>
            Entdecke die Geschichte Israels,
            die Propheten, Psalmen und Weisheitstexte
            des ersten Teils der Bibel.
          </p>

        </div>

      </section>

      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Überblick
          </span>

          <h2>
            Eine lange Geschichte von Glaube und Vertrauen
          </h2>

          <p>
            Das Alte Testament erzählt von Schöpfung,
            Bund, Hoffnung, Scheitern und Neuanfang.
            Es bildet die Grundlage für viele Themen,
            die später auch im Neuen Testament wieder aufgenommen werden.
          </p>

        </div>

      </section>

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Aufbau
            </span>

            <h2>
              Die wichtigsten Bereiche
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              📜
            </div>

            <h3>
              Die fünf Bücher Mose
            </h3>

            <p>
              Genesis, Exodus, Levitikus,
              Numeri und Deuteronomium bilden
              den grundlegenden Anfang der biblischen Geschichte.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🏛
            </div>

            <h3>
              Geschichtsbücher
            </h3>

            <p>
              Sie erzählen von der Geschichte Israels,
              von Königen, Krisen, Exil und Rückkehr.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🎵
            </div>

            <h3>
              Psalmen und Weisheit
            </h3>

            <p>
              Gebete, Lieder, Lebensweisheiten
              und Fragen nach Sinn, Leid und Hoffnung.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🔥
            </div>

            <h3>
              Propheten
            </h3>

            <p>
              Die Propheten erinnern an Gerechtigkeit,
              Treue und Verantwortung
              und sprechen zugleich von Hoffnung und Zukunft.
            </p>

          </article>

        </div>

      </section>

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Themen
            </span>

            <h2>
              Worum geht es im Alten Testament?
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Schöpfung
            </h3>

            <p>
              Die Frage nach dem Ursprung der Welt,
              des Menschen und seiner Verantwortung.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Bund
            </h3>

            <p>
              Die besondere Beziehung zwischen Gott
              und seinem Volk zieht sich durch viele Texte.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Vertrauen
            </h3>

            <p>
              Immer wieder geht es darum,
              wie Menschen auch in Unsicherheit
              an ihrem Glauben festhalten.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Hoffnung
            </h3>

            <p>
              Selbst in Krisen und Zeiten des Verlustes
              bleibt die Hoffnung auf einen neuen Anfang lebendig.
            </p>

          </article>

        </div>

      </section>

      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/bibel.php"
          >
            ← Zurück zur Bibel
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/neues-testament.php"
          >
            Neues Testament →
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