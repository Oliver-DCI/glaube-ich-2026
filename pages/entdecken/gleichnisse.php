<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Gleichnisse – Bibelstudium – glaube-ich.de";

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
    content="Entdecke die Gleichnisse Jesu und ihre Bedeutung für Glauben und Alltag."
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

            <a href="/pages/entdecken/bibelstudium.php">
              Bibelstudium
            </a>

            <span>›</span>

            <strong>
              Gleichnisse
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Bibelstudium
          </span>

          <h1>
            Die Gleichnisse Jesu
          </h1>

          <p>
            Geschichten aus dem Alltag,
            die zum Nachdenken über Glauben,
            Menschen und das Reich Gottes einladen.
          </p>

        </div>

      </section>

      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Einführung
          </span>

          <h2>
            Geschichten mit einer tieferen Bedeutung
          </h2>

          <p>
            Jesus verwendet in vielen seiner Reden
            Bilder und Geschichten aus dem täglichen Leben.
            Diese Gleichnisse laden dazu ein,
            genauer hinzusehen und über die eigene Haltung
            und den eigenen Glauben nachzudenken.
          </p>

        </div>

      </section>

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Bekannte Gleichnisse
            </span>

            <h2>
              Geschichten, die bis heute bekannt sind
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              🤝
            </div>

            <h3>
              Der barmherzige Samariter
            </h3>

            <p>
              Eine Geschichte über Nächstenliebe,
              Hilfsbereitschaft und die Frage,
              wer eigentlich unser Nächster ist.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🐑
            </div>

            <h3>
              Das verlorene Schaf
            </h3>

            <p>
              Ein Bild dafür,
              dass jeder einzelne Mensch wertvoll ist
              und nicht vergessen wird.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🌱
            </div>

            <h3>
              Der Sämann
            </h3>

            <p>
              Das Gleichnis fragt danach,
              wie eine Botschaft aufgenommen wird
              und unter welchen Bedingungen sie wachsen kann.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🏠
            </div>

            <h3>
              Der verlorene Sohn
            </h3>

            <p>
              Eine Geschichte über Umkehr,
              Vergebung, Barmherzigkeit
              und einen neuen Anfang.
            </p>

          </article>

        </div>

      </section>

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Bibelstudium
            </span>

            <h2>
              Fragen zu einem Gleichnis
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Wer kommt in der Geschichte vor?
            </h3>

            <p>
              Welche Personen oder Gruppen spielen eine Rolle
              und wie verhalten sie sich?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was ist überraschend?
            </h3>

            <p>
              Viele Gleichnisse enthalten eine Wendung,
              die Erwartungen bewusst durchbricht.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Welche Botschaft steckt dahinter?
            </h3>

            <p>
              Überlege, welches Thema Jesus
              durch die Geschichte verdeutlichen möchte.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was bedeutet das für meinen Alltag?
            </h3>

            <p>
              Frage dich, ob die Geschichte
              eine konkrete Haltung oder Handlung
              für dein eigenes Leben anregen kann.
            </p>

          </article>

        </div>

      </section>

      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/psalmen.php"
          >
            ← Psalmen
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/bibelstudium.php"
          >
            Zur Bibelstudium-Übersicht →
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