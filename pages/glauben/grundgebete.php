<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Grundgebete – glaube-ich.de";
$currentPage = "grundgebete";

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
    content="Grundgebete des christlichen Glaubens: Vaterunser, Ave Maria, Glaubensbekenntnis und weitere Gebete."
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
              Grundgebete
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Worte des Glaubens
          </span>

          <h1>
            Grundgebete
          </h1>

          <p>
            Gebete, die Christen seit Generationen
            begleiten und dem Glauben Worte geben.
          </p>

        </div>

      </section>


      <!-- INTRO -->

      <section class="page-content">

        <div class="prayer-intro">

          <div>

            <span class="section-kicker">
              Beten
            </span>

            <h2>
              Worte, wenn eigene Worte fehlen
            </h2>

            <p>
              Gebete können Dank, Hoffnung,
              Zweifel, Freude und Bitte vor Gott bringen.
              Manche Gebete begleiten Christen
              seit vielen Jahrhunderten.
            </p>

            <p>
              Hier findest du zentrale Gebete
              des christlichen Glaubens
              zum Lesen, Mitbeten und Wiederentdecken.
            </p>

          </div>

          <div class="prayer-intro__symbol">
            ♡
          </div>

        </div>

      </section>


      <!-- GEBETE -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Bekannte Gebete
            </span>

            <h2>
              Grundgebete des Glaubens
            </h2>

          </div>

        </div>


        <div class="prayer-grid">

          <!-- Vaterunser -->

          <article class="prayer-card prayer-card--featured">

            <div class="prayer-card__header">

              <div class="prayer-card__icon">
                ✝
              </div>

              <div>

                <span class="section-kicker">
                  Das Gebet Jesu
                </span>

                <h3>
                  Vaterunser
                </h3>

              </div>

            </div>

            <div class="prayer-card__text">

              <p>
                Vater unser im Himmel,
              </p>

              <p>
                geheiligt werde dein Name.
              </p>

              <p>
                Dein Reich komme.
              </p>

              <p>
                Dein Wille geschehe,
                wie im Himmel, so auf Erden.
              </p>

              <p>
                Unser tägliches Brot gib uns heute.
              </p>

              <p>
                Und vergib uns unsere Schuld,
                wie auch wir vergeben unseren Schuldigern.
              </p>

              <p>
                Und führe uns nicht in Versuchung,
                sondern erlöse uns von dem Bösen.
              </p>

              <p>
                Amen.
              </p>

            </div>

          </article>


          <!-- Ave Maria -->

          <article class="prayer-card">

            <div class="prayer-card__header">

              <div class="prayer-card__icon">
                ✦
              </div>

              <div>

                <span class="section-kicker">
                  Mariengebet
                </span>

                <h3>
                  Ave Maria
                </h3>

              </div>

            </div>

            <div class="prayer-card__text">

              <p>
                Gegrüßet seist du, Maria,
                voll der Gnade,
                der Herr ist mit dir.
              </p>

              <p>
                Du bist gebenedeit unter den Frauen,
                und gebenedeit ist die Frucht
                deines Leibes, Jesus.
              </p>

              <p>
                Heilige Maria, Mutter Gottes,
                bitte für uns Sünder
                jetzt und in der Stunde unseres Todes.
              </p>

              <p>
                Amen.
              </p>

            </div>

          </article>


          <!-- Glaubensbekenntnis -->

          <article class="prayer-card">

            <div class="prayer-card__header">

              <div class="prayer-card__icon">
                ◇
              </div>

              <div>

                <span class="section-kicker">
                  Bekenntnis
                </span>

                <h3>
                  Apostolisches Glaubensbekenntnis
                </h3>

              </div>

            </div>

            <div class="prayer-card__text">

              <p>
                Ich glaube an Gott,
                den Vater, den Allmächtigen,
                den Schöpfer des Himmels und der Erde.
              </p>

              <p>
                Und an Jesus Christus,
                seinen eingeborenen Sohn,
                unsern Herrn.
              </p>

              <p>
                Ich glaube an den Heiligen Geist,
                die heilige katholische Kirche,
                Gemeinschaft der Heiligen,
                Vergebung der Sünden,
                Auferstehung der Toten
                und das ewige Leben.
              </p>

              <p>
                Amen.
              </p>

            </div>

          </article>


          <!-- Ehre sei dem Vater -->

          <article class="prayer-card">

            <div class="prayer-card__header">

              <div class="prayer-card__icon">
                ☀
              </div>

              <div>

                <span class="section-kicker">
                  Lobpreis
                </span>

                <h3>
                  Ehre sei dem Vater
                </h3>

              </div>

            </div>

            <div class="prayer-card__text">

              <p>
                Ehre sei dem Vater
                und dem Sohn
                und dem Heiligen Geist,
              </p>

              <p>
                wie im Anfang,
                so auch jetzt und alle Zeit
                und in Ewigkeit.
              </p>

              <p>
                Amen.
              </p>

            </div>

          </article>

        </div>

      </section>


      <!-- WIE BETEN -->

      <section class="page-content page-content--soft">

        <div class="prayer-guide">

          <div>

            <span class="section-kicker">
              Gebet im Alltag
            </span>

            <h2>
              Beten muss nicht kompliziert sein
            </h2>

            <p>
              Gebet braucht keine besonderen Worte.
              Es kann still sein,
              spontan entstehen
              oder sich an vertrauten Gebeten orientieren.
            </p>

          </div>


          <div class="prayer-guide__steps">

            <div class="prayer-guide__step">

              <span>1</span>

              <div>
                <h3>Still werden</h3>
                <p>
                  Nimm dir einen Moment
                  ohne Ablenkung.
                </p>
              </div>

            </div>


            <div class="prayer-guide__step">

              <span>2</span>

              <div>
                <h3>Aussprechen</h3>
                <p>
                  Bring vor Gott,
                  was dich gerade bewegt.
                </p>
              </div>

            </div>


            <div class="prayer-guide__step">

              <span>3</span>

              <div>
                <h3>Hören</h3>
                <p>
                  Lass auch Raum
                  für Stille und Gedanken.
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
              Weitergehen
            </span>

            <h2>
              Gebet und Glauben vertiefen
            </h2>

          </div>

        </div>


        <div class="tools-grid">

          <article class="tool-card">

            <div class="tool-card__icon">
              ✦
            </div>

            <h3>
              Persönliches Gebet
            </h3>

            <p>
              Lass dir helfen,
              eigene Worte für dein Gebet zu finden.
            </p>

            <a href="/pages/werkzeuge/gebet-generator.php">
              Gebet erstellen →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              📖
            </div>

            <h3>
              Psalmen entdecken
            </h3>

            <p>
              Entdecke Gebete,
              Klage und Lobpreis in der Bibel.
            </p>

            <a href="/pages/entdecken/bibelstudium.php">
              Bibelstudium öffnen →
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
              für deinen Glaubensweg.
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