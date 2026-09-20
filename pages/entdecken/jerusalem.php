<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Jerusalem – glaube-ich.de";
$currentPage = "jerusalem";

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
    content="Entdecke Jerusalem, seine Geschichte und seine besondere Bedeutung für den christlichen Glauben."
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

      <section
        class="jerusalem-hero"
        style="
          background-image:
            linear-gradient(
              rgba(10, 35, 30, 0.42),
              rgba(10, 35, 30, 0.42)
            ),
            url('/images/jerusalem/jerusalem-banner.jpg');
        "
      >

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
              Jerusalem
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Geschichte. Glaube. Begegnung.
          </span>

          <h1>
            Jerusalem
          </h1>

          <p>
            Eine Stadt voller Geschichte,
            Hoffnung und Erinnerung.
            Entdecke Orte, die den Glauben
            von Millionen Menschen geprägt haben.
          </p>

        </div>

      </section>


      <!-- INTRO -->

      <section class="page-content">

        <div class="jerusalem-intro">

          <div>

            <span class="section-kicker">
              Eine besondere Stadt
            </span>

            <h2>
              Zwischen Geschichte und Glaube
            </h2>

            <p>
              Jerusalem ist einer der bedeutendsten Orte
              der biblischen Geschichte.
              Viele Ereignisse aus dem Alten und Neuen Testament
              sind mit dieser Stadt verbunden.
            </p>

            <p>
              Für Christen ist Jerusalem besonders mit dem Leben,
              dem Leiden, dem Tod und der Auferstehung Jesu Christi
              verbunden.
            </p>

          </div>

          <div class="jerusalem-intro__symbol">
            ◎
          </div>

        </div>

      </section>


      <!-- ORTE -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Orte entdecken
            </span>

            <h2>
              Bedeutende Orte in Jerusalem
            </h2>

          </div>

        </div>


        <div class="jerusalem-grid">

          <!-- ALTSTADT -->

          <article class="jerusalem-card">

            <div
              class="jerusalem-card__image"
              style="
                background-image:
                  linear-gradient(
                    rgba(10, 35, 30, 0.18),
                    rgba(10, 35, 30, 0.18)
                  ),
                  url('/images/jerusalem/altstadt.jpg');
              "
            ></div>

            <div class="jerusalem-card__content">

              <span class="section-kicker">
                Altstadt
              </span>

              <h3>
                Die Altstadt von Jerusalem
              </h3>

              <p>
                Enge Gassen, historische Mauern
                und heilige Orte erzählen von Jahrhunderten
                bewegter Geschichte.
              </p>

              <a href="/pages/entdecken/jerusalem-altstadt.php">
                Mehr entdecken →
              </a>

            </div>

          </article>


          <!-- VIA DOLOROSA -->

          <article class="jerusalem-card">

            <div
              class="jerusalem-card__image"
              style="
                background-image:
                  linear-gradient(
                    rgba(10, 35, 30, 0.18),
                    rgba(10, 35, 30, 0.18)
                  ),
                  url('/images/jerusalem/via-dolorosa.jpg');
              "
            ></div>

            <div class="jerusalem-card__content">

              <span class="section-kicker">
                Via Dolorosa
              </span>

              <h3>
                Der Weg des Leidens
              </h3>

              <p>
                Die Via Dolorosa erinnert
                an den Weg Jesu durch Jerusalem
                bis zur Kreuzigung.
              </p>

              <a href="/pages/entdecken/via-dolorosa.php">
                Mehr entdecken →
              </a>

            </div>

          </article>


          <!-- GRABESKIRCHE -->

          <article class="jerusalem-card">

            <div
              class="jerusalem-card__image"
              style="
                background-image:
                  linear-gradient(
                    rgba(10, 35, 30, 0.18),
                    rgba(10, 35, 30, 0.18)
                  ),
                  url('/images/jerusalem/grabeskirche.jpg');
              "
            ></div>

            <div class="jerusalem-card__content">

              <span class="section-kicker">
                Grabeskirche
              </span>

              <h3>
                Tod und Auferstehung
              </h3>

              <p>
                Die Grabeskirche gehört
                zu den bedeutendsten christlichen Heiligtümern
                der Welt.
              </p>

              <a href="/pages/entdecken/grabeskirche.php">
                Mehr entdecken →
              </a>

            </div>

          </article>


          <!-- ÖLBERG -->

          <article class="jerusalem-card">

            <div
              class="jerusalem-card__image"
              style="
                background-image:
                  linear-gradient(
                    rgba(10, 35, 30, 0.18),
                    rgba(10, 35, 30, 0.18)
                  ),
                  url('/images/jerusalem/oelberg.jpg');
              "
            ></div>

            <div class="jerusalem-card__content">

              <span class="section-kicker">
                Ölberg
              </span>

              <h3>
                Blick über die Stadt
              </h3>

              <p>
                Der Ölberg ist mit vielen
                Ereignissen aus dem Leben Jesu verbunden
                und bietet einen besonderen Blick
                auf Jerusalem.
              </p>

              <a href="/pages/entdecken/oelberg.php">
                Mehr entdecken →
              </a>

            </div>

          </article>

        </div>

      </section>


      <!-- BEDEUTUNG -->

      <section class="page-content page-content--soft">

        <div class="jerusalem-story">

          <div>

            <span class="section-kicker">
              Bedeutung
            </span>

            <h2>
              Jerusalem in der Bibel
            </h2>

            <p>
              Jerusalem erscheint an vielen Stellen
              der Heiligen Schrift als Ort der Begegnung,
              der Hoffnung, aber auch des Konflikts.
            </p>

            <p>
              Für den christlichen Glauben verbindet sich
              mit Jerusalem vor allem die Erinnerung
              an Jesu letzte Tage,
              seine Kreuzigung und seine Auferstehung.
            </p>

            <a
              href="/pages/entdecken/bibel.php"
              class="button button--primary"
            >
              Zur Heiligen Schrift →
            </a>

          </div>

          <blockquote>

            „Ich freute mich,
            als man mir sagte:
            Zum Haus des Herrn wollen wir gehen.“

            <span>
              Psalm 122
            </span>

          </blockquote>

        </div>

      </section>


      <!-- PILGERREISE -->

      <section class="page-content">

        <div class="pilgrimage-teaser">

          <div class="pilgrimage-teaser__content">

            <span class="section-kicker">
              Auf den Spuren des Glaubens
            </span>

            <h2>
              Pilgerreise nach Jerusalem
            </h2>

            <p>
              Entdecke Jerusalem nicht nur als historischen Ort,
              sondern als geistlichen Weg.
              Unsere Pilgerreise führt dich Schritt für Schritt
              zu wichtigen Orten des Glaubens.
            </p>

          </div>

          <a
            href="/pages/entdecken/pilgerreise.php"
            class="button button--primary"
          >
            Pilgerreise entdecken →
          </a>

        </div>

      </section>


      <!-- WEITER ENTDECKEN -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Weiter entdecken
            </span>

            <h2>
              Mehr für deinen Glaubensweg
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
              Entdecke biblische Texte
              und ihre Bedeutung.
            </p>

            <a href="/pages/entdecken/bibel.php">
              Bibel öffnen →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              📚
            </div>

            <h3>
              Bibelstudium
            </h3>

            <p>
              Vertiefe Texte
              und entdecke Zusammenhänge.
            </p>

            <a href="/pages/entdecken/bibelstudium.php">
              Bibelstudium öffnen →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              ◇
            </div>

            <h3>
              Pilgerreise
            </h3>

            <p>
              Folge den Spuren
              des Glaubens durch Jerusalem.
            </p>

            <a href="/pages/entdecken/pilgerreise.php">
              Pilgerreise öffnen →
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