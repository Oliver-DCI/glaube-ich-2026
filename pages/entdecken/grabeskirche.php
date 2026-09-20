<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Grabeskirche – glaube-ich.de";

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
    content="Entdecke die Grabeskirche in Jerusalem und ihre besondere Bedeutung für den christlichen Glauben."
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

      <!-- HERO -->

      <section class="page-hero page-hero--reading">

        <div class="page-hero__overlay"></div>

        <div class="page-hero__content">

          <nav class="breadcrumb">

            <a href="/index.php">
              Startseite
            </a>

            <span>›</span>

            <a href="/pages/entdecken/jerusalem.php">
              Jerusalem
            </a>

            <span>›</span>

            <strong>
              Grabeskirche
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Jerusalem entdecken
          </span>

          <h1>
            Die Grabeskirche
          </h1>

          <p>
            Einer der bedeutendsten Orte
            des christlichen Glaubens in Jerusalem.
          </p>

        </div>

      </section>

      <!-- INTRO -->

      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Überblick
          </span>

          <h2>
            Ein Ort von Kreuzigung, Grab und Auferstehung
          </h2>

          <p>
            Die Grabeskirche steht in der christlichen Tradition
            in enger Verbindung mit der Kreuzigung,
            dem Grab Jesu und der Botschaft seiner Auferstehung.
            Für viele Pilgerinnen und Pilger gehört sie
            zu den wichtigsten Stationen eines Besuchs in Jerusalem.
          </p>

        </div>

      </section>

      <!-- BEREICHE -->

      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Bedeutung
            </span>

            <h2>
              Ein besonderer Ort des Glaubens
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              ✝
            </div>

            <h3>
              Kreuzigung
            </h3>

            <p>
              Die Kirche umfasst Orte,
              die in der christlichen Tradition
              mit der Kreuzigung Jesu verbunden werden.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🪨
            </div>

            <h3>
              Grab
            </h3>

            <p>
              Im Zentrum der Verehrung steht
              die mit dem Grab Jesu verbundene Stätte.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🌅
            </div>

            <h3>
              Auferstehung
            </h3>

            <p>
              Für Christinnen und Christen ist
              die Grabeskirche eng mit der Hoffnung
              auf Auferstehung und neues Leben verbunden.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🕯
            </div>

            <h3>
              Gebet
            </h3>

            <p>
              Menschen aus vielen Ländern
              kommen hierher, um zu beten,
              innezuhalten und ihren Glauben zu feiern.
            </p>

          </article>

        </div>

      </section>

      <!-- BESUCH -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Für deinen Besuch
            </span>

            <h2>
              Die Grabeskirche bewusst erleben
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Zeit einplanen
            </h3>

            <p>
              Die Kirche besteht aus vielen Bereichen.
              Ein ruhiger Besuch ermöglicht es,
              die verschiedenen Orte bewusst wahrzunehmen.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Rücksicht nehmen
            </h3>

            <p>
              Die Grabeskirche ist kein gewöhnliches Museum,
              sondern ein aktiver Gebets- und Gottesdienstort.
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Atmosphäre aufnehmen
            </h3>

            <p>
              Architektur, Gebete, Licht,
              Weihrauch und die vielen Pilger
              prägen die besondere Atmosphäre des Ortes.
            </p>

          </article>

        </div>

      </section>

      <!-- NAVIGATION -->

      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/entdecken/via-dolorosa.php"
          >
            ← Via Dolorosa
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/entdecken/oelberg.php"
          >
            Ölberg →
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