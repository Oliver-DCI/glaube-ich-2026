<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Buße & Versöhnung – glaube-ich.de";
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
    content="Buße und Versöhnung – Bedeutung, Zeichen und geistliche Impulse rund um eines der sieben Sakramente."
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

  <?php include __DIR__ . '/../../includes/sidebar.php'; ?>

  <div class="page">

    <?php include __DIR__ . '/../../includes/header.php'; ?>

    <main>

      <section class="page-hero page-hero--reading">

        <div class="page-hero__overlay"></div>

        <div class="page-hero__content">

          <nav class="breadcrumb">

            <a href="/index.php">
              Startseite
            </a>

            <span>›</span>

            <a href="/pages/glauben/sakramente.php">
              Sakramente
            </a>

            <span>›</span>

            <strong>
              Buße & Versöhnung
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Sakrament
          </span>

          <h1>
            Buße & Versöhnung
          </h1>

          <p>
            Ein Sakrament des Neuanfangs,
            der Vergebung und der Versöhnung
            mit Gott und den Menschen.
          </p>

        </div>

      </section>


      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Bedeutung
          </span>

          <h2>
            Vergebung annehmen und neu beginnen
          </h2>

          <p>
            Das Sakrament der Buße und Versöhnung
            lädt dazu ein, das eigene Leben ehrlich anzuschauen,
            Schuld zu benennen und Vergebung zu empfangen.
            Es steht für Umkehr, Heilung und einen neuen Anfang.
          </p>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Schritte
            </span>

            <h2>
              Was zu Versöhnung gehört
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              🔎
            </div>

            <h3>
              Hinschauen
            </h3>

            <p>
              Der erste Schritt besteht darin,
              das eigene Handeln ehrlich zu betrachten
              und Verantwortung zu übernehmen.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              💬
            </div>

            <h3>
              Aussprechen
            </h3>

            <p>
              Schuld und Fehler werden nicht verdrängt,
              sondern bewusst benannt
              und vor Gott gebracht.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🤲
            </div>

            <h3>
              Vergebung
            </h3>

            <p>
              Im Mittelpunkt steht die Zusage,
              dass Vergebung und ein neuer Anfang
              möglich sind.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🌱
            </div>

            <h3>
              Neuanfang
            </h3>

            <p>
              Versöhnung bedeutet auch,
              das eigene Leben neu auszurichten
              und bewusst anders weiterzugehen.
            </p>

          </article>

        </div>

      </section>


      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Glaubensimpuls
            </span>

            <h2>
              Fragen zur Versöhnung
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Was belastet mich?
            </h3>

            <p>
              Gibt es etwas,
              das du schon länger mit dir trägst
              und gerne loslassen möchtest?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Wo brauche ich Vergebung?
            </h3>

            <p>
              Gibt es Situationen,
              in denen du selbst um Vergebung bitten
              oder einem anderen Menschen vergeben möchtest?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was möchte ich verändern?
            </h3>

            <p>
              Welcher konkrete Schritt könnte helfen,
              etwas neu zu beginnen
              oder eine Beziehung zu heilen?
            </p>

          </article>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/glauben/eucharistie.php"
          >
            ← Zurück zur Eucharistie
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/glauben/krankensalbung.php"
          >
            Weiter zur Krankensalbung →
          </a>

        </div>

      </section>

    </main>

    <?php include __DIR__ . '/../../includes/footer.php'; ?>

  </div>

  <script src="/js/navigation.js"></script>
  <script src="/js/theme.js"></script>
  <script src="/js/main.js"></script>

</body>
</html>