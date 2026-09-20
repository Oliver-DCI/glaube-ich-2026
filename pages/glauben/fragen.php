<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Fragen & Antworten – glaube-ich.de";
$currentPage = "fragen";

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
    content="Fragen und Antworten rund um Glauben, Gebet, Bibel, Kirche und das christliche Leben."
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
              Glauben
            </span>

            <span>›</span>

            <strong>
              Fragen & Antworten
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Fragen dürfen sein
          </span>

          <h1>
            Fragen & Antworten
          </h1>

          <p>
            Gedanken und Orientierung
            zu häufigen Fragen über Glauben,
            Bibel, Gebet und christliches Leben.
          </p>

        </div>

      </section>


      <!-- INTRO -->

      <section class="page-content">

        <div class="questions-intro">

          <div>

            <span class="section-kicker">
              Glauben verstehen
            </span>

            <h2>
              Fragen gehören zum Glauben
            </h2>

            <p>
              Glaube bedeutet nicht,
              auf jede Frage sofort eine einfache Antwort zu haben.
              Zweifel, Neugier und Nachdenken
              können Teil eines lebendigen Glaubensweges sein.
            </p>

            <p>
              Hier findest du kurze Erklärungen
              zu Themen, die Menschen rund um
              den christlichen Glauben häufig beschäftigen.
            </p>

          </div>

          <div class="questions-intro__symbol">
            ?
          </div>

        </div>

      </section>


      <!-- FRAGEN -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Häufig gefragt
            </span>

            <h2>
              Fragen zum Glauben
            </h2>

          </div>

        </div>


        <div class="questions-list">


          <!-- Frage 1 -->

          <details class="question-item">

            <summary>

              <span class="question-item__number">
                01
              </span>

              <span class="question-item__title">
                Was bedeutet es eigentlich, an Gott zu glauben?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Glauben kann bedeuten,
                Gott zu vertrauen und das eigene Leben
                in Beziehung zu ihm zu verstehen.
                Dabei geht es nicht nur um Wissen,
                sondern auch um Hoffnung,
                Vertrauen und persönliche Erfahrung.
              </p>

            </div>

          </details>


          <!-- Frage 2 -->

          <details class="question-item">

            <summary>

              <span class="question-item__number">
                02
              </span>

              <span class="question-item__title">
                Warum beten Christen?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Im Gebet bringen Menschen
                Dank, Sorgen, Freude,
                Fragen und Bitten vor Gott.
                Gebet kann gesprochen,
                geschrieben oder ganz still sein.
              </p>

              <a href="/pages/glauben/grundgebete.php">
                Grundgebete entdecken →
              </a>

            </div>

          </details>


          <!-- Frage 3 -->

          <details class="question-item">

            <summary>

              <span class="question-item__number">
                03
              </span>

              <span class="question-item__title">
                Was ist die Bibel?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Die Bibel ist eine Sammlung
                verschiedener Schriften,
                die über viele Jahrhunderte entstanden sind.
                Sie erzählt von Erfahrungen mit Gott,
                von Hoffnung, Scheitern,
                Neubeginn und der Geschichte Jesu.
              </p>

              <a href="/pages/entdecken/bibel.php">
                Die Bibel entdecken →
              </a>

            </div>

          </details>


          <!-- Frage 4 -->

          <details class="question-item">

            <summary>

              <span class="question-item__number">
                04
              </span>

              <span class="question-item__title">
                Was ist, wenn ich an meinem Glauben zweifle?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Zweifel und Glaube schließen sich
                nicht automatisch gegenseitig aus.
                Auch biblische Texte erzählen
                von Menschen, die fragen,
                ringen und nach Orientierung suchen.
              </p>

              <p>
                Fragen können dazu führen,
                den eigenen Glauben bewusster
                und tiefer zu betrachten.
              </p>

            </div>

          </details>


          <!-- Frage 5 -->

          <details class="question-item">

            <summary>

              <span class="question-item__number">
                05
              </span>

              <span class="question-item__title">
                Warum gibt es Leid, wenn Gott gut ist?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Die Frage nach Leid und Gottes Güte
                gehört zu den ältesten und schwierigsten
                Fragen des Glaubens.
              </p>

              <p>
                Christliche Traditionen geben darauf
                unterschiedliche Antworten.
                Die Bibel selbst versucht Leid
                nicht einfach zu erklären,
                sondern kennt Klage,
                Protest, Hoffnung und die Suche
                nach Gottes Nähe mitten im Leid.
              </p>

            </div>

          </details>


          <!-- Frage 6 -->

          <details class="question-item">

            <summary>

              <span class="question-item__number">
                06
              </span>

              <span class="question-item__title">
                Was bedeutet Vergebung?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Vergebung bedeutet nicht,
                Unrecht einfach für unwichtig zu erklären.
                Im christlichen Glauben geht es vielmehr
                um die Möglichkeit von Versöhnung,
                Heilung und einem neuen Anfang.
              </p>

            </div>

          </details>


          <!-- Frage 7 -->

          <details class="question-item">

            <summary>

              <span class="question-item__number">
                07
              </span>

              <span class="question-item__title">
                Warum gibt es Sakramente?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Sakramente verbinden Glauben
                mit sichtbaren Zeichen und Handlungen.
                Sie begleiten wichtige Stationen
                im Leben und sollen Gottes Nähe
                erfahrbar machen.
              </p>

              <a href="/pages/glauben/sakramente.php">
                Sakramente entdecken →
              </a>

            </div>

          </details>


          <!-- Frage 8 -->

          <details class="question-item">

            <summary>

              <span class="question-item__number">
                08
              </span>

              <span class="question-item__title">
                Muss ich in die Kirche gehen, um glauben zu können?
              </span>

              <span class="question-item__toggle">
                +
              </span>

            </summary>

            <div class="question-item__content">

              <p>
                Persönlicher Glaube kann auch außerhalb
                eines Kirchengebäudes gelebt werden.
                Gleichzeitig spielt Gemeinschaft
                im Christentum eine wichtige Rolle.
              </p>

              <p>
                Gottesdienste, Gebet und Begegnung
                mit anderen Menschen können helfen,
                Glauben gemeinsam zu leben
                und neue Perspektiven zu entdecken.
              </p>

            </div>

          </details>

        </div>

      </section>


      <!-- THEMEN -->

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Themen entdecken
            </span>

            <h2>
              Wo möchtest du weiterdenken?
            </h2>

          </div>

        </div>


        <div class="question-topic-grid">

          <article class="question-topic-card">

            <div class="question-topic-card__icon">
              📖
            </div>

            <h3>
              Bibel
            </h3>

            <p>
              Texte, Hintergründe
              und Zusammenhänge entdecken.
            </p>

            <a href="/pages/entdecken/bibel.php">
              Bibel entdecken →
            </a>

          </article>


          <article class="question-topic-card">

            <div class="question-topic-card__icon">
              ♡
            </div>

            <h3>
              Gebet
            </h3>

            <p>
              Traditionelle und persönliche
              Formen des Gebets kennenlernen.
            </p>

            <a href="/pages/glauben/grundgebete.php">
              Gebete entdecken →
            </a>

          </article>


          <article class="question-topic-card">

            <div class="question-topic-card__icon">
              ✝
            </div>

            <h3>
              Sakramente
            </h3>

            <p>
              Die sieben Sakramente
              und ihre Bedeutung verstehen.
            </p>

            <a href="/pages/glauben/sakramente.php">
              Sakramente entdecken →
            </a>

          </article>

        </div>

      </section>


      <!-- FRAGE STELLEN -->

      <section class="page-content">

        <div class="question-cta">

          <div>

            <span class="section-kicker">
              Noch eine Frage?
            </span>

            <h2>
              Glauben beginnt manchmal mit einer Frage
            </h2>

            <p>
              Nicht jede Frage lässt sich
              in wenigen Sätzen beantworten.
              Manchmal lohnt es sich,
              einen Gedanken weiterzuverfolgen
              oder einen Bibeltext dazu zu lesen.
            </p>

          </div>

          <a
            href="/pages/entdecken/bibelstudium.php"
            class="button button--primary"
          >
            Bibelstudium entdecken →
          </a>

        </div>

      </section>


      <!-- WEITER -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Weitergehen
            </span>

            <h2>
              Mehr zum Glauben
            </h2>

          </div>

        </div>


        <div class="tools-grid">

          <article class="tool-card">

            <div class="tool-card__icon">
              ♡
            </div>

            <h3>
              Grundgebete
            </h3>

            <p>
              Gebete für Alltag,
              Dank, Hoffnung und Vertrauen.
            </p>

            <a href="/pages/glauben/grundgebete.php">
              Grundgebete öffnen →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              ✝
            </div>

            <h3>
              Sakramente
            </h3>

            <p>
              Die sieben Sakramente
              einfach erklärt.
            </p>

            <a href="/pages/glauben/sakramente.php">
              Sakramente öffnen →
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
              Ein kurzer Gedanke
              für deinen Tag.
            </p>

            <a href="/pages/heute/tagesimpuls.php">
              Tagesimpuls öffnen →
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