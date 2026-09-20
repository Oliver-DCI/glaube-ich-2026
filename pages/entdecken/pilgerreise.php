<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Pilgerreise – glaube-ich.de";
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
    content="Eine digitale Pilgerreise durch Jerusalem und zu bedeutenden Orten des christlichen Glaubens."
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

      <section class="jerusalem-hero">

        <div class="jerusalem-hero__overlay"></div>

        <div class="jerusalem-hero__content">

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
              Pilgerreise
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Auf den Spuren des Glaubens
          </span>

          <h1>
            Pilgerreise
          </h1>

          <p>
            Begib dich Schritt für Schritt
            auf eine geistliche Reise
            zu bedeutenden Orten in Jerusalem.
          </p>

        </div>

      </section>


      <!-- INTRO -->

      <section class="page-content">

        <div class="pilgrimage-intro">

          <div>

            <span class="section-kicker">
              Unterwegs sein
            </span>

            <h2>
              Mehr als nur eine Reise
            </h2>

            <p>
              Eine Pilgerreise verbindet äußeren Weg
              und inneren Weg miteinander.
              Orte, Geschichten und Gebete laden dazu ein,
              den eigenen Glauben neu zu betrachten.
            </p>

            <p>
              Diese digitale Pilgerreise führt dich
              durch ausgewählte Stationen in Jerusalem.
            </p>

          </div>

          <div class="pilgrimage-intro__symbol">
            ◇
          </div>

        </div>

      </section>


      <!-- STATIONEN -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Stationen
            </span>

            <h2>
              Dein Weg durch Jerusalem
            </h2>

          </div>

        </div>


        <div class="pilgrimage-timeline">

          <article class="pilgrimage-stop">

            <div class="pilgrimage-stop__marker">
              01
            </div>

            <div class="pilgrimage-stop__content">

              <span class="section-kicker">
                Beginn
              </span>

              <h3>
                Der Ölberg
              </h3>

              <p>
                Beginne deine Reise mit dem Blick
                über Jerusalem.
                Der Ölberg ist mit vielen Ereignissen
                aus dem Leben Jesu verbunden.
              </p>

              <a href="/pages/entdecken/pilger-oelberg.php">
                Station entdecken →
              </a>

            </div>

          </article>


          <article class="pilgrimage-stop">

            <div class="pilgrimage-stop__marker">
              02
            </div>

            <div class="pilgrimage-stop__content">

              <span class="section-kicker">
                Erinnerung
              </span>

              <h3>
                Garten Getsemani
              </h3>

              <p>
                Ein Ort der Stille,
                des Gebets und der Entscheidung.
                Hier erinnert die christliche Tradition
                an Jesu Gebet vor seiner Verhaftung.
              </p>

              <a href="/pages/entdecken/pilger-getsemani.php">
                Station entdecken →
              </a>

            </div>

          </article>


          <article class="pilgrimage-stop">

            <div class="pilgrimage-stop__marker">
              03
            </div>

            <div class="pilgrimage-stop__content">

              <span class="section-kicker">
                Weg
              </span>

              <h3>
                Via Dolorosa
              </h3>

              <p>
                Die Via Dolorosa führt durch die Altstadt
                und erinnert an Jesu Weg
                zur Kreuzigung.
              </p>

              <a href="/pages/entdecken/pilger-via-dolorosa.php">
                Station entdecken →
              </a>

            </div>

          </article>


          <article class="pilgrimage-stop">

            <div class="pilgrimage-stop__marker">
              04
            </div>

            <div class="pilgrimage-stop__content">

              <span class="section-kicker">
                Hoffnung
              </span>

              <h3>
                Grabeskirche
              </h3>

              <p>
                Für Christen verbindet sich dieser Ort
                mit Kreuzigung, Grab und Auferstehung Jesu.
              </p>

              <a href="/pages/entdecken/pilger-grabeskirche.php">
                Station entdecken →
              </a>

            </div>

          </article>

        </div>

      </section>


      <!-- REFLEXION -->

      <section class="page-content page-content--soft">

        <div class="pilgrimage-reflection">

          <div>

            <span class="section-kicker">
              Innehalten
            </span>

            <h2>
              Was nimmst du mit?
            </h2>

            <p>
              Pilgern bedeutet nicht nur,
              von einem Ort zum nächsten zu gehen.
              Es bedeutet auch, aufmerksam zu werden:
              für die eigene Geschichte,
              für Fragen und für die Spuren Gottes im eigenen Leben.
            </p>

          </div>

          <blockquote>
            „Zeige mir, Herr, deine Wege,
            lehre mich deine Pfade.“
            <span>Psalm 25</span>
          </blockquote>

        </div>

      </section>


      <!-- WEITER -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Weiter entdecken
            </span>

            <h2>
              Mehr rund um Jerusalem
            </h2>

          </div>

        </div>


        <div class="tools-grid">

          <article class="tool-card">

            <div class="tool-card__icon">
              ◎
            </div>

            <h3>
              Jerusalem
            </h3>

            <p>
              Entdecke Geschichte,
              Orte und Bedeutung der Stadt.
            </p>

            <a href="/pages/entdecken/jerusalem.php">
              Jerusalem entdecken →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              📖
            </div>

            <h3>
              Heilige Schrift
            </h3>

            <p>
              Lies Texte,
              die mit Jerusalem verbunden sind.
            </p>

            <a href="/pages/entdecken/bibel.php">
              Bibel öffnen →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              ✦
            </div>

            <h3>
              Gebet
            </h3>

            <p>
              Nimm deine Gedanken
              mit in ein persönliches Gebet.
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