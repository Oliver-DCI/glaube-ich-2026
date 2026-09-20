<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Die Heilige Schrift – glaube-ich.de";
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
    content="Entdecke die Heilige Schrift, das Alte und Neue Testament und vertiefe biblische Texte."
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
              Entdecken
            </span>

            <span>›</span>

            <strong>
              Die Heilige Schrift
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Gottes Wort entdecken
          </span>

          <h1>
            Die Heilige Schrift
          </h1>

          <p>
            Entdecke das Alte und Neue Testament,
            finde bekannte Bibelstellen und vertiefe
            die Texte Schritt für Schritt.
          </p>

        </div>

      </section>


      <!-- INTRO -->

      <section class="page-content">

        <div class="bible-intro">

          <div>

            <span class="section-kicker">
              Die Bibel
            </span>

            <h2>
              Ein Buch voller Geschichten,
              Hoffnung und Orientierung
            </h2>

            <p>
              Die Bibel erzählt von der Beziehung
              zwischen Gott und den Menschen.
              Sie enthält Geschichten, Gebete,
              Weisheit, Prophetie und die Botschaft
              Jesu Christi.
            </p>

          </div>

          <div class="bible-intro__symbol">
            📖
          </div>

        </div>

      </section>


      <!-- TESTAMENTE -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Entdecken
            </span>

            <h2>
              Die Bibel entdecken
            </h2>

          </div>

        </div>


        <div class="bible-testament-grid">

          <article class="bible-testament-card">

            <div class="bible-testament-card__icon">
              ✦
            </div>

            <span class="section-kicker">
              Altes Testament
            </span>

            <h3>
              Von der Schöpfung
              bis zu den Propheten
            </h3>

            <p>
              Entdecke die Geschichte Israels,
              die Psalmen, Weisheitsbücher
              und die Botschaften der Propheten.
            </p>

            <div class="bible-tags">

              <span>Genesis</span>
              <span>Psalmen</span>
              <span>Jesaja</span>
              <span>Weisheit</span>

            </div>

            <a
              href="/pages/entdecken/altes-testament.php"
              class="button button--primary"
            >
              Altes Testament öffnen →
            </a>

          </article>


          <article class="bible-testament-card bible-testament-card--accent">

            <div class="bible-testament-card__icon">
              ✝
            </div>

            <span class="section-kicker">
              Neues Testament
            </span>

            <h3>
              Jesus Christus
              und die ersten Gemeinden
            </h3>

            <p>
              Lies die Evangelien,
              die Apostelgeschichte,
              die Briefe und die Offenbarung.
            </p>

            <div class="bible-tags">

              <span>Matthäus</span>
              <span>Markus</span>
              <span>Lukas</span>
              <span>Johannes</span>

            </div>

            <a
              href="/pages/entdecken/neues-testament.php"
              class="button button--primary"
            >
              Neues Testament öffnen →
            </a>

          </article>

        </div>

      </section>


      <!-- THEMEN -->

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Nach Themen entdecken
            </span>

            <h2>
              Was bewegt dich?
            </h2>

          </div>

        </div>


        <div class="bible-topic-grid">

          <article class="bible-topic-card">

            <div class="bible-topic-card__icon">
              ♡
            </div>

            <h3>
              Liebe
            </h3>

            <p>
              Bibelstellen über Liebe,
              Nähe und Nächstenliebe.
            </p>

          </article>


          <article class="bible-topic-card">

            <div class="bible-topic-card__icon">
              ☀
            </div>

            <h3>
              Hoffnung
            </h3>

            <p>
              Worte der Hoffnung
              und Zuversicht.
            </p>

          </article>


          <article class="bible-topic-card">

            <div class="bible-topic-card__icon">
              ✦
            </div>

            <h3>
              Vertrauen
            </h3>

            <p>
              Texte über Vertrauen
              und Glauben.
            </p>

          </article>


          <article class="bible-topic-card">

            <div class="bible-topic-card__icon">
              ◇
            </div>

            <h3>
              Gebet
            </h3>

            <p>
              Gebete und Psalmen
              aus der Bibel.
            </p>

          </article>

        </div>

      </section>


      <!-- WEITER -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Weiter vertiefen
            </span>

            <h2>
              Mehr aus der Bibel entdecken
            </h2>

          </div>

        </div>


        <div class="tools-grid">

          <article class="tool-card">

            <div class="tool-card__icon">
              📚
            </div>

            <h3>
              Bibelstudium
            </h3>

            <p>
              Entdecke Hintergründe,
              Zusammenhänge und Erklärungen
              zu biblischen Texten.
            </p>

            <a href="/pages/entdecken/bibelstudium.php">
              Bibelstudium öffnen →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              📖
            </div>

            <h3>
              Tageslesung
            </h3>

            <p>
              Lies die Lesungen
              und das Evangelium des Tages.
            </p>

            <a href="/pages/heute/tageslesung.php">
              Tageslesung öffnen →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              ✦
            </div>

            <h3>
              Gebet erstellen
            </h3>

            <p>
              Lass aus einem Bibeltext
              ein persönliches Gebet entstehen.
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