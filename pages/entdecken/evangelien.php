<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Evangelien – Bibelstudium – glaube-ich.de";

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
    content="Entdecke die vier Evangelien und ihre unterschiedlichen Perspektiven auf Jesus Christus."
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
              Evangelien
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Bibelstudium
          </span>

          <h1>
            Die Evangelien
          </h1>

          <p>
            Vier Evangelien, vier Perspektiven
            und eine gemeinsame Botschaft:
            das Leben und Wirken Jesu Christi.
          </p>

        </div>

      </section>

      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Einführung
          </span>

          <h2>
            Jesus aus vier Perspektiven entdecken
          </h2>

          <p>
            Matthäus, Markus, Lukas und Johannes
            erzählen von Jesus Christus aus jeweils
            eigener Perspektive. Gemeinsam geben sie
            einen vielschichtigen Einblick in seine Botschaft,
            sein Wirken, seinen Tod und seine Auferstehung.
          </p>

        </div>

      </section>

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Die vier Evangelien
            </span>

            <h2>
              Unterschiedliche Schwerpunkte
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              📖
            </div>

            <h3>
              Matthäus
            </h3>

            <p>
              Das Matthäusevangelium verbindet
              die Botschaft Jesu besonders stark
              mit der jüdischen Tradition und
              dem Alten Testament.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🕊
            </div>

            <h3>
              Markus
            </h3>

            <p>
              Markus erzählt knapp und unmittelbar.
              Das Handeln Jesu und sein Weg
              stehen besonders im Mittelpunkt.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🤝
            </div>

            <h3>
              Lukas
            </h3>

            <p>
              Lukas betont besonders Barmherzigkeit,
              Gemeinschaft und die Hinwendung
              zu Menschen am Rand der Gesellschaft.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              ✨
            </div>

            <h3>
              Johannes
            </h3>

            <p>
              Johannes verwendet eine bildreiche Sprache
              und stellt die tiefere Bedeutung
              der Person Jesu besonders heraus.
            </p>

          </article>

        </div>

      </section>

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Beim Lesen
            </span>

            <h2>
              Fragen für dein Bibelstudium
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Was sagt der Text über Jesus?
            </h3>

            <p>
              Achte darauf, wie Jesus handelt,
              spricht und auf Menschen reagiert.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Welche Menschen begegnen ihm?
            </h3>

            <p>
              Welche Fragen, Sorgen oder Hoffnungen
              bringen sie mit?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was überrascht mich?
            </h3>

            <p>
              Halte Aussagen oder Handlungen fest,
              die dich besonders ansprechen
              oder zum Nachdenken bringen.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was bedeutet der Text für meinen Alltag?
            </h3>

            <p>
              Überlege, ob sich aus dem Text
              ein konkreter Gedanke oder Impuls
              für dein eigenes Leben ergibt.
            </p>

          </article>

        </div>

      </section>

      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/bibelstudium.php"
          >
            ← Zurück zum Bibelstudium
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/psalmen.php"
          >
            Psalmen entdecken →
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