<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Sakramente – glaube-ich.de";
$currentPage = "sakramente";

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
    content="Die sieben Sakramente der katholischen Kirche einfach erklärt: Taufe, Eucharistie, Firmung, Beichte, Ehe, Weihe und Krankensalbung."
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
              Sakramente
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Zeichen der Nähe Gottes
          </span>

          <h1>
            Sakramente
          </h1>

          <p>
            Sieben besondere Zeichen,
            in denen Christen Gottes Nähe,
            Begleitung und Zusage erfahren.
          </p>

        </div>

      </section>


      <!-- INTRO -->

      <section class="page-content">

        <div class="sacrament-intro">

          <div>

            <span class="section-kicker">
              Glaube im Leben
            </span>

            <h2>
              Sichtbare Zeichen einer unsichtbaren Wirklichkeit
            </h2>

            <p>
              Sakramente begleiten wichtige Stationen
              im Leben eines Menschen.
              Sie verbinden konkrete Zeichen und Handlungen
              mit dem Glauben an Gottes Gegenwart.
            </p>

            <p>
              In der katholischen Kirche gibt es sieben Sakramente.
              Sie begleiten Menschen vom Beginn des Glaubenslebens
              bis in besondere Lebenssituationen.
            </p>

          </div>

          <div class="sacrament-intro__symbol">
            ✝
          </div>

        </div>

      </section>


      <!-- SAKRAMENTE -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Die sieben Sakramente
            </span>

            <h2>
              Begleitung durch das Leben
            </h2>

          </div>

        </div>


        <div class="sacrament-grid">

          <article class="sacrament-card">

            <div class="sacrament-card__number">
              01
            </div>

            <div class="sacrament-card__icon">
              ◌
            </div>

            <span class="section-kicker">
              Beginn
            </span>

            <h3>
              Taufe
            </h3>

            <p>
              Die Taufe steht am Anfang
              des christlichen Lebens.
              Sie ist Zeichen der Zugehörigkeit
              zu Christus und zur Gemeinschaft der Kirche.
            </p>

            <a href="/pages/glauben/taufe.php">
              Mehr erfahren →
            </a>

          </article>


          <article class="sacrament-card">

            <div class="sacrament-card__number">
              02
            </div>

            <div class="sacrament-card__icon">
              ◇
            </div>

            <span class="section-kicker">
              Gemeinschaft
            </span>

            <h3>
              Eucharistie
            </h3>

            <p>
              In der Eucharistie erinnert sich
              die christliche Gemeinschaft
              an das letzte Abendmahl Jesu
              und feiert seine Gegenwart.
            </p>

            <a href="/pages/glauben/eucharistie.php">
              Mehr erfahren →
            </a>

          </article>


          <article class="sacrament-card">

            <div class="sacrament-card__number">
              03
            </div>

            <div class="sacrament-card__icon">
              ✦
            </div>

            <span class="section-kicker">
              Stärkung
            </span>

            <h3>
              Firmung
            </h3>

            <p>
              Die Firmung steht für Stärkung
              durch den Heiligen Geist
              und für eine bewusste Vertiefung
              des eigenen Glaubens.
            </p>

            <a href="/pages/glauben/firmung.php">
              Mehr erfahren →
            </a>

          </article>


          <article class="sacrament-card">

            <div class="sacrament-card__number">
              04
            </div>

            <div class="sacrament-card__icon">
              ♡
            </div>

            <span class="section-kicker">
              Versöhnung
            </span>

            <h3>
              Beichte
            </h3>

            <p>
              Das Sakrament der Versöhnung
              eröffnet die Möglichkeit,
              Schuld auszusprechen,
              Vergebung zu erfahren
              und neu zu beginnen.
            </p>

            <a href="/pages/glauben/busse.php">
              Mehr erfahren →
            </a>

          </article>


          <article class="sacrament-card">

            <div class="sacrament-card__number">
              05
            </div>

            <div class="sacrament-card__icon">
              ∞
            </div>

            <span class="section-kicker">
              Partnerschaft
            </span>

            <h3>
              Ehe
            </h3>

            <p>
              Im Sakrament der Ehe
              versprechen sich zwei Menschen,
              ihr Leben in Liebe,
              Treue und Verantwortung zu teilen.
            </p>

            <a href="/pages/glauben/ehe.php">
              Mehr erfahren →
            </a>

          </article>


          <article class="sacrament-card">

            <div class="sacrament-card__number">
              06
            </div>

            <div class="sacrament-card__icon">
              ✝
            </div>

            <span class="section-kicker">
              Dienst
            </span>

            <h3>
              Weihe
            </h3>

            <p>
              Die Weihe steht für einen besonderen
              Dienst in der Kirche
              und umfasst Diakonen-, Priester-
              und Bischofsweihe.
            </p>

            <a href="/pages/glauben/weihe.php">
              Mehr erfahren →
            </a>

          </article>


          <article class="sacrament-card sacrament-card--wide">

            <div class="sacrament-card__number">
              07
            </div>

            <div class="sacrament-card__icon">
              ☀
            </div>

            <span class="section-kicker">
              Trost und Hoffnung
            </span>

            <h3>
              Krankensalbung
            </h3>

            <p>
              Die Krankensalbung richtet sich an Menschen
              in schwerer Krankheit oder besonderer Schwäche.
              Sie soll stärken, trösten
              und Gottes Nähe erfahrbar machen.
            </p>

            <a href="/pages/glauben/krankensalbung.php">
              Mehr erfahren →
            </a>

          </article>

        </div>

      </section>


      <!-- EINORDNUNG -->

      <section class="page-content page-content--soft">

        <div class="sacrament-groups">

          <div>

            <span class="section-kicker">
              Einordnung
            </span>

            <h2>
              Drei Gruppen von Sakramenten
            </h2>

            <p>
              Die sieben Sakramente werden häufig
              in drei größere Gruppen eingeordnet.
            </p>

          </div>


          <div class="sacrament-group-grid">

            <article class="sacrament-group-card">

              <span>
                01
              </span>

              <h3>
                Sakramente der Eingliederung
              </h3>

              <p>
                Taufe, Firmung und Eucharistie
                führen in das christliche Leben ein
                und vertiefen die Zugehörigkeit
                zur Glaubensgemeinschaft.
              </p>

            </article>


            <article class="sacrament-group-card">

              <span>
                02
              </span>

              <h3>
                Sakramente der Heilung
              </h3>

              <p>
                Beichte und Krankensalbung
                begleiten Menschen in Situationen
                von Schuld, Krankheit und Schwäche.
              </p>

            </article>


            <article class="sacrament-group-card">

              <span>
                03
              </span>

              <h3>
                Sakramente des Dienstes
              </h3>

              <p>
                Ehe und Weihe stehen
                für besondere Lebenswege
                und Verantwortung für andere Menschen.
              </p>

            </article>

          </div>

        </div>

      </section>


      <!-- ZITAT -->

      <section class="page-content">

        <div class="sacrament-quote">

          <div class="sacrament-quote__symbol">
            “
          </div>

          <blockquote>
            Der Glaube zeigt sich nicht nur in Worten,
            sondern auch in Zeichen,
            Gemeinschaft und gelebter Hoffnung.
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
              Glauben verstehen und vertiefen
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
              Entdecke Gebete,
              die Christen seit Generationen begleiten.
            </p>

            <a href="/pages/glauben/grundgebete.php">
              Grundgebete öffnen →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              ?
            </div>

            <h3>
              Fragen zum Glauben
            </h3>

            <p>
              Antworten und Gedanken
              zu häufigen Fragen rund um den Glauben.
            </p>

            <a href="/pages/glauben/fragen.php">
              Fragen entdecken →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              📖
            </div>

            <h3>
              Bibelstudium
            </h3>

            <p>
              Entdecke Zusammenhänge,
              Hintergründe und biblische Texte.
            </p>

            <a href="/pages/entdecken/bibelstudium.php">
              Bibelstudium öffnen →
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