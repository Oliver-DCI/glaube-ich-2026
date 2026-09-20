<?php

require_once __DIR__ . '/../includes/functions.php';

$pageTitle = "Über uns – glaube-ich.de";
$currentPage = "ueber-uns";

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
    content="Erfahre mehr über glaube-ich.de, unsere Idee und unser Ziel, Glauben verständlich, offen und alltagsnah zugänglich zu machen."
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
  include __DIR__ . '/../includes/sidebar.php';
  ?>

  <div class="page">

    <?php
    include __DIR__ . '/../includes/header.php';
    ?>

    <main>

      <!-- HERO -->

      <section class="about-hero">

        <div class="about-hero__overlay"></div>

        <div class="about-hero__content">

          <nav class="breadcrumb">

            <a href="/index.php">
              Startseite
            </a>

            <span>›</span>

            <strong>
              Über uns
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Glauben. Leben. Entdecken.
          </span>

          <h1>
            Über glaube-ich.de
          </h1>

          <p>
            Ein Ort für Menschen,
            die Glauben entdecken,
            vertiefen oder einfach Fragen stellen möchten.
          </p>

        </div>

      </section>


      <!-- INTRO -->

      <section class="page-content">

        <div class="about-intro">

          <div>

            <span class="section-kicker">
              Unsere Idee
            </span>

            <h2>
              Glauben verständlich und zugänglich machen
            </h2>

            <p>
              glaube-ich.de möchte christliche Inhalte
              übersichtlich, verständlich und alltagsnah
              zugänglich machen.
            </p>

            <p>
              Dabei geht es nicht darum,
              fertige Antworten auf jede Frage zu geben.
              Vielmehr soll die Seite dazu einladen,
              selbst zu entdecken, nachzudenken
              und den eigenen Glaubensweg zu gestalten.
            </p>

          </div>

          <div class="about-intro__symbol">
            ✦
          </div>

        </div>

      </section>


      <!-- WAS WIR BIETEN -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Was du hier findest
            </span>

            <h2>
              Inhalte für deinen Glaubensweg
            </h2>

          </div>

        </div>


        <div class="about-feature-grid">

          <article class="about-feature-card">

            <div class="about-feature-card__icon">
              ☀
            </div>

            <h3>
              Impulse für den Alltag
            </h3>

            <p>
              Tagesimpulse,
              Lesungen und kurze Gedanken,
              die dich durch den Tag begleiten können.
            </p>

          </article>


          <article class="about-feature-card">

            <div class="about-feature-card__icon">
              📖
            </div>

            <h3>
              Bibel entdecken
            </h3>

            <p>
              Texte, Hintergründe
              und Zusammenhänge rund um
              die Heilige Schrift.
            </p>

          </article>


          <article class="about-feature-card">

            <div class="about-feature-card__icon">
              ♡
            </div>

            <h3>
              Gebet und Spiritualität
            </h3>

            <p>
              Grundgebete,
              persönliche Gebetsimpulse
              und praktische Werkzeuge.
            </p>

          </article>


          <article class="about-feature-card">

            <div class="about-feature-card__icon">
              ◎
            </div>

            <h3>
              Orte des Glaubens
            </h3>

            <p>
              Jerusalem,
              Pilgerwege und Orte,
              die mit der biblischen Geschichte
              verbunden sind.
            </p>

          </article>


          <article class="about-feature-card">

            <div class="about-feature-card__icon">
              ?
            </div>

            <h3>
              Fragen dürfen sein
            </h3>

            <p>
              Raum für Zweifel,
              Fragen und Gedanken
              rund um Glauben und Kirche.
            </p>

          </article>


          <article class="about-feature-card">

            <div class="about-feature-card__icon">
              ✎
            </div>

            <h3>
              Digitale Werkzeuge
            </h3>

            <p>
              Moderne Funktionen,
              die beim Beten,
              Nachdenken und Vorbereiten helfen können.
            </p>

          </article>

        </div>

      </section>


      <!-- HALTUNG -->

      <section class="page-content page-content--soft">

        <div class="about-values">

          <div>

            <span class="section-kicker">
              Unsere Haltung
            </span>

            <h2>
              Offen. Verständlich. Persönlich.
            </h2>

            <p>
              Glaube ist für viele Menschen
              etwas sehr Persönliches.
              Deshalb soll auch der Zugang dazu
              offen und respektvoll sein.
            </p>

          </div>


          <div class="about-values__list">

            <article class="about-value">

              <span>
                01
              </span>

              <div>

                <h3>
                  Offen für Fragen
                </h3>

                <p>
                  Zweifel und Fragen
                  sind kein Hindernis,
                  sondern können Teil
                  eines Glaubensweges sein.
                </p>

              </div>

            </article>


            <article class="about-value">

              <span>
                02
              </span>

              <div>

                <h3>
                  Verständliche Sprache
                </h3>

                <p>
                  Inhalte sollen zugänglich sein,
                  ohne unnötig kompliziert
                  oder distanziert zu wirken.
                </p>

              </div>

            </article>


            <article class="about-value">

              <span>
                03
              </span>

              <div>

                <h3>
                  Glaube im Alltag
                </h3>

                <p>
                  Christlicher Glaube
                  soll nicht nur erklärt,
                  sondern mit dem Leben
                  in Verbindung gebracht werden.
                </p>

              </div>

            </article>


            <article class="about-value">

              <span>
                04
              </span>

              <div>

                <h3>
                  Respektvoller Umgang
                </h3>

                <p>
                  Unterschiedliche Erfahrungen
                  und Glaubenswege
                  verdienen Respekt
                  und einen offenen Austausch.
                </p>

              </div>

            </article>

          </div>

        </div>

      </section>


      <!-- ZITAT -->

      <section class="page-content">

        <div class="about-quote">

          <div class="about-quote__mark">
            “
          </div>

          <blockquote>
            Glaube beginnt nicht immer
            mit einer Antwort.
            Manchmal beginnt er mit einer Frage.
          </blockquote>

        </div>

      </section>


      <!-- CTA -->

      <section class="page-content">

        <div class="about-cta">

          <div>

            <span class="section-kicker">
              Entdecke deinen Weg
            </span>

            <h2>
              Wo möchtest du beginnen?
            </h2>

            <p>
              Starte mit einem Tagesimpuls,
              einer Bibelstelle
              oder einer Frage,
              die dich gerade beschäftigt.
            </p>

          </div>

          <div class="about-cta__actions">

            <a
              href="/pages/heute/tagesimpuls.php"
              class="button button--primary"
            >
              Tagesimpuls lesen →
            </a>

            <a
              href="/pages/glauben/fragen.php"
              class="button button--secondary"
            >
              Fragen entdecken
            </a>

          </div>

        </div>

      </section>


      <!-- WEITER -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Entdecken
            </span>

            <h2>
              Direkt einsteigen
            </h2>

          </div>

        </div>


        <div class="tools-grid">

          <article class="tool-card">

            <div class="tool-card__icon">
              📖
            </div>

            <h3>
              Heilige Schrift
            </h3>

            <p>
              Entdecke Texte
              und Themen der Bibel.
            </p>

            <a href="/pages/entdecken/bibel.php">
              Bibel öffnen →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              ◎
            </div>

            <h3>
              Jerusalem
            </h3>

            <p>
              Geschichte,
              Orte und Bedeutung
              einer besonderen Stadt.
            </p>

            <a href="/pages/entdecken/jerusalem.php">
              Jerusalem entdecken →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              ✦
            </div>

            <h3>
              Gebetsgenerator
            </h3>

            <p>
              Finde Worte
              für ein persönliches Gebet.
            </p>

            <a href="/pages/werkzeuge/gebet-generator.php">
              Gebet erstellen →
            </a>

          </article>

        </div>

      </section>

    </main>


    <?php
    include __DIR__ . '/../includes/footer.php';
    ?>

  </div>


  <script src="/js/navigation.js"></script>
  <script src="/js/theme.js"></script>
  <script src="/js/main.js"></script>

</body>

</html>