<?php

require_once __DIR__ . '/../includes/functions.php';

$pageTitle = "Hilfe – glaube-ich.de";
$currentPage = "hilfe";

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
    content="Hilfe und Orientierung für die Nutzung von glaube-ich.de."
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

      <section class="page-hero page-hero--reading">

        <div class="page-hero__overlay"></div>

        <div class="page-hero__content">

          <nav class="breadcrumb">

            <a href="/index.php">
              Startseite
            </a>

            <span>›</span>

            <strong>
              Hilfe
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Orientierung
          </span>

          <h1>
            Hilfe
          </h1>

          <p>
            Hier findest du einen schnellen Überblick
            über die wichtigsten Bereiche
            und Funktionen von glaube-ich.de.
          </p>

        </div>

      </section>


      <!-- INTRO -->

      <section class="page-content">

        <div class="help-intro">

          <div>

            <span class="section-kicker">
              Schnell zurechtfinden
            </span>

            <h2>
              Was möchtest du tun?
            </h2>

            <p>
              glaube-ich.de bietet verschiedene Wege,
              Glauben zu entdecken,
              Inhalte zu lesen
              oder praktische Werkzeuge zu nutzen.
            </p>

            <p>
              Die folgenden Bereiche helfen dir,
              schnell zum passenden Inhalt zu gelangen.
            </p>

          </div>

          <div class="help-intro__symbol">
            ?
          </div>

        </div>

      </section>


      <!-- HILFE-KARTEN -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Bereiche
            </span>

            <h2>
              Häufig genutzte Funktionen
            </h2>

          </div>

        </div>


        <div class="help-grid">

          <article class="help-card">

            <div class="help-card__icon">
              ☀
            </div>

            <h3>
              Inhalte für heute
            </h3>

            <p>
              Tagesimpuls,
              Tageslesung,
              Evangelium und Podcast
              findest du im Bereich „Heute“.
            </p>

            <a href="/pages/heute/tagesimpuls.php">
              Zu den Tagesinhalten →
            </a>

          </article>


          <article class="help-card">

            <div class="help-card__icon">
              📖
            </div>

            <h3>
              Bibel entdecken
            </h3>

            <p>
              Im Bereich „Entdecken“
              findest du Bibel,
              Bibelstudium,
              Jerusalem und Pilgerreise.
            </p>

            <a href="/pages/entdecken/bibel.php">
              Bibel öffnen →
            </a>

          </article>


          <article class="help-card">

            <div class="help-card__icon">
              ♡
            </div>

            <h3>
              Glauben vertiefen
            </h3>

            <p>
              Grundgebete,
              Sakramente
              und Fragen & Antworten
              findest du im Bereich „Glauben“.
            </p>

            <a href="/pages/glauben/grundgebete.php">
              Glauben entdecken →
            </a>

          </article>


          <article class="help-card">

            <div class="help-card__icon">
              ✦
            </div>

            <h3>
              Gebetsgenerator
            </h3>

            <p>
              Erstelle aus Thema,
              Situation und gewünschtem Stil
              ein persönliches Gebet.
            </p>

            <a href="/pages/werkzeuge/gebet-generator.php">
              Gebet erstellen →
            </a>

          </article>


          <article class="help-card">

            <div class="help-card__icon">
              ✎
            </div>

            <h3>
              Predigtgenerator
            </h3>

            <p>
              Erstelle eine erste Predigtstruktur
              aus Bibelstelle,
              Thema,
              Anlass und Zielgruppe.
            </p>

            <a href="/pages/werkzeuge/predigt-generator.php">
              Predigt erstellen →
            </a>

          </article>


          <article class="help-card">

            <div class="help-card__icon">
              ◐
            </div>

            <h3>
              Helles und dunkles Design
            </h3>

            <p>
              Über das Symbol oben rechts
              kannst du zwischen hellem
              und dunklem Farbschema wechseln.
            </p>

          </article>

        </div>

      </section>


      <!-- FAQ -->

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Kurze Antworten
            </span>

            <h2>
              Häufige Fragen zur Website
            </h2>

          </div>

        </div>


        <div class="questions-list">

          <details class="question-item">

            <summary>

              <span class="question-item__number">
                01
              </span>

              <span class="question-item__title">
                Muss ich mich registrieren?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Nach aktuellem Stand
                ist keine Registrierung notwendig.
                Die Inhalte können direkt aufgerufen werden.
              </p>

            </div>

          </details>


          <details class="question-item">

            <summary>

              <span class="question-item__number">
                02
              </span>

              <span class="question-item__title">
                Funktioniert die Website auf Smartphone und Tablet?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Ja.
                Das neue Design ist responsiv aufgebaut
                und passt sich an unterschiedliche
                Bildschirmgrößen an.
              </p>

            </div>

          </details>


          <details class="question-item">

            <summary>

              <span class="question-item__number">
                03
              </span>

              <span class="question-item__title">
                Werden Eingaben aus den Generatoren gespeichert?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Im aktuellen Entwicklungsstand
                arbeiten Gebetsgenerator
                und Predigtgenerator lokal im Browser.
                Die eingegebenen Inhalte
                werden nicht an einen externen KI-Dienst übertragen.
              </p>

            </div>

          </details>


          <details class="question-item">

            <summary>

              <span class="question-item__number">
                04
              </span>

              <span class="question-item__title">
                Warum funktionieren manche Detail-Links noch nicht?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Einige Detailbereiche befinden sich
                noch im Aufbau.
                Die wichtigsten Seiten
                und Hauptfunktionen sind bereits verfügbar.
              </p>

            </div>

          </details>


          <details class="question-item">

            <summary>

              <span class="question-item__number">
                05
              </span>

              <span class="question-item__title">
                Wie kann ich ein technisches Problem melden?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Nutze dafür die Kontaktseite
                und wähle als Betreff
                „Technisches Problem“.
              </p>

              <a href="/pages/kontakt.php">
                Kontakt öffnen →
              </a>

            </div>

          </details>

        </div>

      </section>


      <!-- KONTAKT CTA -->

      <section class="page-content">

        <div class="help-cta">

          <div>

            <span class="section-kicker">
              Noch offen?
            </span>

            <h2>
              Du findest keine passende Antwort?
            </h2>

            <p>
              Dann kannst du uns direkt
              über die Kontaktseite schreiben.
            </p>

          </div>

          <a
            href="/pages/kontakt.php"
            class="button button--primary"
          >
            Kontakt aufnehmen →
          </a>

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