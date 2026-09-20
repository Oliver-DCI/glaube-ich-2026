<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Gebetsgenerator – glaube-ich.de";
$currentPage = "gebet-generator";

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
    content="Erstelle ein persönliches Gebet für deine aktuelle Situation."
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
              Werkzeuge
            </span>

            <span>›</span>

            <strong>
              Gebetsgenerator
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Worte für deinen Moment
          </span>

          <h1>
            Gebetsgenerator
          </h1>

          <p>
            Wähle aus, was dich gerade bewegt,
            und finde Worte für ein persönliches Gebet.
          </p>

        </div>

      </section>


      <!-- INTRO -->

      <section class="page-content">

        <div class="generator-intro">

          <div>

            <span class="section-kicker">
              Persönlich beten
            </span>

            <h2>
              Wenn die richtigen Worte fehlen
            </h2>

            <p>
              Manchmal wissen wir genau,
              was uns beschäftigt,
              finden aber keine Worte dafür.
              Dieser kleine Generator kann dir einen
              Ausgangspunkt für dein persönliches Gebet geben.
            </p>

          </div>

          <div class="generator-intro__symbol">
            ✦
          </div>

        </div>

      </section>


      <!-- GENERATOR -->

      <section class="page-content">

        <div class="generator-layout">

          <!-- FORMULAR -->

          <section class="generator-panel">

            <div class="generator-panel__heading">

              <span class="section-kicker">
                Schritt 1
              </span>

              <h2>
                Was bewegt dich?
              </h2>

              <p>
                Wähle einige Angaben aus.
                Daraus erstellen wir dein Gebet.
              </p>

            </div>


            <form
              class="prayer-generator-form"
              id="prayerGeneratorForm"
            >

              <!-- THEMA -->

              <div class="generator-field">

                <label for="prayerTopic">
                  Thema
                </label>

                <select
                  id="prayerTopic"
                  name="topic"
                  required
                >

                  <option value="">
                    Bitte auswählen
                  </option>

                  <option value="dank">
                    Dankbarkeit
                  </option>

                  <option value="hoffnung">
                    Hoffnung
                  </option>

                  <option value="sorge">
                    Sorgen und Ängste
                  </option>

                  <option value="entscheidung">
                    Eine schwierige Entscheidung
                  </option>

                  <option value="familie">
                    Familie und Freunde
                  </option>

                  <option value="krankheit">
                    Krankheit und Kraft
                  </option>

                  <option value="vergebung">
                    Vergebung
                  </option>

                  <option value="vertrauen">
                    Vertrauen
                  </option>

                </select>

              </div>


              <!-- SITUATION -->

              <div class="generator-field">

                <label for="prayerSituation">
                  Was möchtest du vor Gott bringen?
                </label>

                <textarea
                  id="prayerSituation"
                  name="situation"
                  rows="5"
                  maxlength="400"
                  placeholder="Zum Beispiel: Ich stehe vor einer wichtigen Entscheidung und weiß nicht, welchen Weg ich gehen soll."
                ></textarea>

                <span class="generator-field__hint">
                  Optional – beschreibe deine Situation
                  mit wenigen Worten.
                </span>

              </div>


              <!-- TON -->

              <div class="generator-field">

                <label for="prayerTone">
                  Ton des Gebets
                </label>

                <select
                  id="prayerTone"
                  name="tone"
                >

                  <option value="ruhig">
                    Ruhig und vertrauensvoll
                  </option>

                  <option value="dankbar">
                    Dankbar
                  </option>

                  <option value="hoffnungsvoll">
                    Hoffnungsvoll
                  </option>

                  <option value="direkt">
                    Persönlich und direkt
                  </option>

                </select>

              </div>


              <!-- LÄNGE -->

              <div class="generator-field">

                <label>
                  Länge
                </label>

                <div class="generator-options">

                  <label class="generator-option">

                    <input
                      type="radio"
                      name="length"
                      value="kurz"
                      checked
                    >

                    <span>
                      Kurz
                    </span>

                  </label>


                  <label class="generator-option">

                    <input
                      type="radio"
                      name="length"
                      value="mittel"
                    >

                    <span>
                      Mittel
                    </span>

                  </label>


                  <label class="generator-option">

                    <input
                      type="radio"
                      name="length"
                      value="lang"
                    >

                    <span>
                      Ausführlich
                    </span>

                  </label>

                </div>

              </div>


              <button
                type="submit"
                class="button button--primary generator-submit"
              >
                ✦ Gebet erstellen
              </button>

            </form>

          </section>


          <!-- ERGEBNIS -->

          <aside class="generator-result">

            <div class="generator-result__top">

              <div>

                <span class="section-kicker">
                  Dein Gebet
                </span>

                <h2>
                  Ein Moment der Ruhe
                </h2>

              </div>

              <span class="generator-result__icon">
                ♡
              </span>

            </div>


            <div
              class="generator-result__content"
              id="prayerResult"
            >

              <div class="generator-empty">

                <span>
                  ✦
                </span>

                <h3>
                  Dein Gebet erscheint hier
                </h3>

                <p>
                  Wähle links ein Thema aus
                  und klicke anschließend
                  auf „Gebet erstellen“.
                </p>

              </div>

            </div>


            <div
              class="generator-result__actions"
              id="prayerActions"
              hidden
            >

              <button
                type="button"
                class="generator-action"
                id="copyPrayer"
              >
                Kopieren
              </button>

              <button
                type="button"
                class="generator-action"
                id="newPrayer"
              >
                Neu erstellen
              </button>

            </div>

          </aside>

        </div>

      </section>


      <!-- HINWEIS -->

      <section class="page-content page-content--soft">

        <div class="generator-note">

          <div class="generator-note__icon">
            ♡
          </div>

          <div>

            <span class="section-kicker">
              Ein Gedanke
            </span>

            <h2>
              Ein Gebet darf ganz persönlich sein
            </h2>

            <p>
              Das erzeugte Gebet ist nur eine Anregung.
              Du kannst die Worte verändern,
              kürzen oder einfach dort weiterbeten,
              wo deine eigenen Gedanken beginnen.
            </p>

          </div>

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
              Mehr für deinen Glaubensweg
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
              Entdecke traditionelle
              Gebete des christlichen Glaubens.
            </p>

            <a href="/pages/glauben/grundgebete.php">
              Grundgebete öffnen →
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
              Lass dich von den biblischen
              Texten des Tages inspirieren.
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
  <script src="/js/prayer-generator.js"></script>

</body>

</html>