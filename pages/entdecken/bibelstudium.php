<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Bibelstudium – glaube-ich.de";
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
    content="Bibelstudium mit Hintergründen, Erklärungen und Impulsen zu ausgewählten biblischen Texten."
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
              Bibelstudium
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Verstehen & vertiefen
          </span>

          <h1>
            Bibelstudium
          </h1>

          <p>
            Entdecke Hintergründe, Zusammenhänge
            und geistliche Impulse zu ausgewählten
            biblischen Texten.
          </p>

        </div>

      </section>


      <!-- INTRO -->

      <section class="page-content">

        <div class="study-intro">

          <div>

            <span class="section-kicker">
              Schritt für Schritt
            </span>

            <h2>
              Die Bibel tiefer verstehen
            </h2>

            <p>
              Ein Bibeltext erzählt oft mehr,
              als auf den ersten Blick sichtbar ist.
              Historischer Kontext, Sprache, Symbolik
              und die Verbindung zu anderen Bibelstellen
              können helfen, die Botschaft neu zu entdecken.
            </p>

          </div>

          <div class="study-intro__icon">
            📚
          </div>

        </div>

      </section>


      <!-- STUDIENBEREICHE -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Bibelstudium
            </span>

            <h2>
              Wo möchtest du beginnen?
            </h2>

          </div>

        </div>


        <div class="study-grid">

          <article class="study-card">

            <span class="study-card__number">
              01
            </span>

            <div class="study-card__icon">
              ✝
            </div>

            <span class="section-kicker">
              Evangelien
            </span>

            <h3>
              Jesus und seine Botschaft
            </h3>

            <p>
              Entdecke ausgewählte Texte
              aus Matthäus, Markus, Lukas und Johannes
              mit Hintergrundinformationen und Impulsen.
            </p>

            <a href="/pages/entdecken/evangelien.php" class="study-card__link">
              Evangelien entdecken →
            </a>

          </article>


          <article class="study-card">

            <span class="study-card__number">
              02
            </span>

            <div class="study-card__icon">
              ♫
            </div>

            <span class="section-kicker">
              Psalmen
            </span>

            <h3>
              Gebete aus allen Lebenslagen
            </h3>

            <p>
              Freude, Angst, Dankbarkeit,
              Zweifel und Hoffnung:
              Die Psalmen geben vielen Erfahrungen Worte.
            </p>

            <a href="/pages/entdecken/psalmen.php" class="study-card__link">
              Psalmen entdecken →
            </a>

          </article>


          <article class="study-card">

            <span class="study-card__number">
              03
            </span>

            <div class="study-card__icon">
              ◇
            </div>

            <span class="section-kicker">
              Gleichnisse
            </span>

            <h3>
              Geschichten mit Tiefe
            </h3>

            <p>
              Jesu Gleichnisse erzählen
              in einfachen Bildern von Gottes Reich,
              Vergebung und einem neuen Leben.
            </p>

            <a href="/pages/entdecken/gleichnisse.php" class="study-card__link">
              Gleichnisse entdecken →
            </a>

          </article>

        </div>

      </section>


      <!-- BEISPIEL-STUDIUM -->

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Beispiel
            </span>

            <h2>
              Einen Text Schritt für Schritt entdecken
            </h2>

          </div>

        </div>


        <div class="study-example">

          <article class="study-example__text">

            <span class="section-kicker">
              Johannes 15
            </span>

            <h3>
              Der wahre Weinstock
            </h3>

            <blockquote>
              „Ich bin der Weinstock,
              ihr seid die Reben.“
            </blockquote>

            <p>
              Das Bild vom Weinstock gehört zu den
              bekanntesten Bildern des Johannesevangeliums.
              Jesus beschreibt damit eine Beziehung,
              aus der Leben, Kraft und Frucht entstehen.
            </p>

          </article>


          <div class="study-steps">

            <div class="study-step">

              <span>1</span>

              <div>
                <h4>Text lesen</h4>
                <p>
                  Den Abschnitt zunächst in Ruhe lesen
                  und auf wiederkehrende Worte achten.
                </p>
              </div>

            </div>


            <div class="study-step">

              <span>2</span>

              <div>
                <h4>Kontext verstehen</h4>
                <p>
                  Wer spricht? Zu wem?
                  In welcher Situation?
                </p>
              </div>

            </div>


            <div class="study-step">

              <span>3</span>

              <div>
                <h4>Botschaft entdecken</h4>
                <p>
                  Welche Aussage steht
                  im Mittelpunkt des Textes?
                </p>
              </div>

            </div>


            <div class="study-step">

              <span>4</span>

              <div>
                <h4>Auf das Leben beziehen</h4>
                <p>
                  Was kann dieser Text
                  heute für mich bedeuten?
                </p>
              </div>

            </div>

          </div>

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
              Vertiefe deinen Glaubensweg
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
              Entdecke Altes und Neues Testament
              und finde passende Bibelstellen.
            </p>

            <a href="/pages/entdecken/bibel.php">
              Bibel öffnen →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              ☀
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