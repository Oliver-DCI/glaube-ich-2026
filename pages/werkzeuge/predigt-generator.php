<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Predigtgenerator – glaube-ich.de";
$currentPage = "predigt-generator";

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
    content="Erstelle eine Predigtstruktur zu einer Bibelstelle, einem Thema und einem Anlass."
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
              Predigtgenerator
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Gedanken strukturieren
          </span>

          <h1>
            Predigtgenerator
          </h1>

          <p>
            Erstelle aus Bibelstelle,
            Thema und Anlass eine strukturierte
            Grundlage für eine Predigt.
          </p>

        </div>

      </section>


      <!-- INTRO -->

      <section class="page-content">

        <div class="generator-intro">

          <div>

            <span class="section-kicker">
              Inspiration & Struktur
            </span>

            <h2>
              Ein Ausgangspunkt für deine Predigt
            </h2>

            <p>
              Der Predigtgenerator hilft dabei,
              zentrale Gedanken zu ordnen und
              eine erste Struktur zu entwickeln.
            </p>

            <p>
              Das Ergebnis ist als Entwurf gedacht
              und kann anschließend persönlich
              ergänzt und verändert werden.
            </p>

          </div>

          <div class="generator-intro__symbol">
            ✎
          </div>

        </div>

      </section>


      <!-- GENERATOR -->

      <section class="page-content">

        <div class="generator-layout">

          <!-- FORM -->

          <section class="generator-panel">

            <div class="generator-panel__heading">

              <span class="section-kicker">
                Vorbereitung
              </span>

              <h2>
                Predigt zusammenstellen
              </h2>

              <p>
                Gib einige Eckpunkte an.
                Daraus entsteht ein strukturierter Entwurf.
              </p>

            </div>


            <form
              class="prayer-generator-form"
              id="sermonGeneratorForm"
            >

              <!-- BIBELSTELLE -->

              <div class="generator-field">

                <label for="sermonBible">
                  Bibelstelle
                </label>

                <input
                  type="text"
                  id="sermonBible"
                  name="bible"
                  required
                  placeholder="Zum Beispiel: Johannes 15,1–8"
                >

              </div>


              <!-- THEMA -->

              <div class="generator-field">

                <label for="sermonTopic">
                  Thema
                </label>

                <select
                  id="sermonTopic"
                  name="topic"
                  required
                >

                  <option value="">
                    Bitte auswählen
                  </option>

                  <option value="vertrauen">
                    Vertrauen
                  </option>

                  <option value="hoffnung">
                    Hoffnung
                  </option>

                  <option value="liebe">
                    Liebe
                  </option>

                  <option value="vergebung">
                    Vergebung
                  </option>

                  <option value="gemeinschaft">
                    Gemeinschaft
                  </option>

                  <option value="neuanfang">
                    Neuanfang
                  </option>

                  <option value="glaube">
                    Glaube im Alltag
                  </option>

                </select>

              </div>


              <!-- ANLASS -->

              <div class="generator-field">

                <label for="sermonOccasion">
                  Anlass
                </label>

                <select
                  id="sermonOccasion"
                  name="occasion"
                >

                  <option value="sonntag">
                    Sonntagsgottesdienst
                  </option>

                  <option value="hochzeit">
                    Hochzeit
                  </option>

                  <option value="taufe">
                    Taufe
                  </option>

                  <option value="trauer">
                    Trauerfeier
                  </option>

                  <option value="jugend">
                    Jugendgottesdienst
                  </option>

                  <option value="andacht">
                    Andacht
                  </option>

                  <option value="allgemein">
                    Allgemeiner Anlass
                  </option>

                </select>

              </div>


              <!-- ZIELGRUPPE -->

              <div class="generator-field">

                <label for="sermonAudience">
                  Zielgruppe
                </label>

                <select
                  id="sermonAudience"
                  name="audience"
                >

                  <option value="allgemein">
                    Gemischte Gemeinde
                  </option>

                  <option value="jugendliche">
                    Jugendliche
                  </option>

                  <option value="familien">
                    Familien
                  </option>

                  <option value="senioren">
                    Ältere Menschen
                  </option>

                  <option value="suchende">
                    Glaubenssuchende
                  </option>

                </select>

              </div>


              <!-- EIGENER GEDANKE -->

              <div class="generator-field">

                <label for="sermonThought">
                  Eigener Gedanke
                </label>

                <textarea
                  id="sermonThought"
                  name="thought"
                  rows="5"
                  maxlength="500"
                  placeholder="Zum Beispiel: Der Glaube trägt nicht nur in guten Zeiten, sondern besonders dann, wenn der Weg unklar wird."
                ></textarea>

                <span class="generator-field__hint">
                  Optional – ein persönlicher Gedanke,
                  der in die Predigt aufgenommen werden soll.
                </span>

              </div>


              <!-- LÄNGE -->

              <div class="generator-field">

                <label>
                  Umfang
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
                ✎ Predigtentwurf erstellen
              </button>

            </form>

          </section>


          <!-- RESULT -->

          <aside class="generator-result">

            <div class="generator-result__top">

              <div>

                <span class="section-kicker">
                  Entwurf
                </span>

                <h2>
                  Deine Predigtstruktur
                </h2>

              </div>

              <span class="generator-result__icon">
                ✎
              </span>

            </div>


            <div
              class="generator-result__content"
              id="sermonResult"
            >

              <div class="generator-empty">

                <span>
                  ✎
                </span>

                <h3>
                  Dein Predigtentwurf erscheint hier
                </h3>

                <p>
                  Fülle links die Angaben aus
                  und klicke anschließend
                  auf „Predigtentwurf erstellen“.
                </p>

              </div>

            </div>


            <div
              class="generator-result__actions"
              id="sermonActions"
              hidden
            >

              <button
                type="button"
                class="generator-action"
                id="copySermon"
              >
                Kopieren
              </button>

              <button
                type="button"
                class="generator-action"
                id="newSermon"
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
            ✎
          </div>

          <div>

            <span class="section-kicker">
              Wichtig
            </span>

            <h2>
              Ein Entwurf ersetzt nicht deine eigene Stimme
            </h2>

            <p>
              Nutze die vorgeschlagene Struktur
              als Ausgangspunkt.
              Persönliche Erfahrungen,
              der konkrete Anlass und die Menschen,
              für die du sprichst,
              machen eine Predigt lebendig.
            </p>

          </div>

        </div>

      </section>


      <!-- WEITER -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Weiterarbeiten
            </span>

            <h2>
              Weitere Werkzeuge und Inhalte
            </h2>

          </div>

        </div>


        <div class="tools-grid">

          <article class="tool-card">

            <div class="tool-card__icon">
              📖
            </div>

            <h3>
              Bibelstudium
            </h3>

            <p>
              Vertiefe die Bibelstelle
              und entdecke Hintergründe.
            </p>

            <a href="/pages/entdecken/bibelstudium.php">
              Bibelstudium öffnen →
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
              Erstelle ein persönliches Gebet
              passend zu deinem Thema.
            </p>

            <a href="/pages/werkzeuge/gebet-generator.php">
              Gebet erstellen →
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
              als zusätzliche Inspiration.
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
  <script src="/js/sermon-generator.js"></script>

</body>

</html>