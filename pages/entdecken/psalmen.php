<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Psalmen – Bibelstudium – glaube-ich.de";

$currentPage = "bibelstudium";

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
    content="Entdecke die Psalmen als Gebete, Lieder und Texte über Vertrauen, Klage, Hoffnung und Dank."
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

            <a href="/pages/entdecken/bibelstudium.php">
              Bibelstudium
            </a>

            <span>›</span>

            <strong>
              Psalmen
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Bibelstudium
          </span>

          <h1>
            Die Psalmen
          </h1>

          <p>
            Gebete und Lieder über Vertrauen,
            Freude, Klage, Hoffnung und Dank.
          </p>

        </div>

      </section>

      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Einführung
          </span>

          <h2>
            Worte für viele Lebenssituationen
          </h2>

          <p>
            Die Psalmen gehören zu den bekanntesten
            und persönlichsten Texten der Bibel.
            Sie geben ganz unterschiedlichen Erfahrungen Raum:
            Freude, Angst, Dankbarkeit, Zweifel,
            Vertrauen und Hoffnung.
          </p>

        </div>

      </section>

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Formen
            </span>

            <h2>
              Verschiedene Arten von Psalmen
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              🙏
            </div>

            <h3>
              Gebet
            </h3>

            <p>
              Viele Psalmen wenden sich unmittelbar an Gott
              und bringen persönliche Gedanken und Gefühle
              in Worte.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🌧
            </div>

            <h3>
              Klage
            </h3>

            <p>
              Leid, Angst und Zweifel werden nicht verschwiegen,
              sondern offen ausgesprochen.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              ☀
            </div>

            <h3>
              Dank und Lob
            </h3>

            <p>
              Andere Psalmen drücken Freude,
              Dankbarkeit und Staunen über Gott
              und die Schöpfung aus.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🕯
            </div>

            <h3>
              Vertrauen
            </h3>

            <p>
              Viele Texte sprechen davon,
              auch in schwierigen Situationen
              auf Gottes Nähe zu vertrauen.
            </p>

          </article>

        </div>

      </section>

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Bibelstudium
            </span>

            <h2>
              Fragen beim Lesen eines Psalms
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Welche Stimmung hat der Psalm?
            </h3>

            <p>
              Ist der Text von Freude, Angst,
              Dankbarkeit, Klage oder Hoffnung geprägt?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Welche Bilder werden verwendet?
            </h3>

            <p>
              Achte auf Bilder aus Natur, Alltag
              und menschlicher Erfahrung.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Welche Zeile spricht mich besonders an?
            </h3>

            <p>
              Oft kann ein einzelner Satz
              zum persönlichen Gebet oder Gedanken werden.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Wo finde ich mich selbst wieder?
            </h3>

            <p>
              Überlege, welche Erfahrungen des Psalms
              zu deiner eigenen Lebenssituation passen.
            </p>

          </article>

        </div>

      </section>

      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/evangelien.php"
          >
            ← Evangelien
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/gleichnisse.php"
          >
            Gleichnisse entdecken →
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