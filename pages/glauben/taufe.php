<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Taufe – glaube-ich.de";
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
    content="Die Taufe – Bedeutung, Zeichen und geistliche Impulse rund um eines der sieben Sakramente."
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
              Taufe
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Sakrament
          </span>

          <h1>
            Taufe
          </h1>

          <p>
            Ein Zeichen für neues Leben,
            Zugehörigkeit und den Beginn
            eines Weges im Glauben.
          </p>

        </div>

      </section>


      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Bedeutung
          </span>

          <h2>
            Ein Anfang im Glauben
          </h2>

          <p>
            Die Taufe gehört zu den grundlegenden Sakramenten
            des christlichen Glaubens.
            Sie steht für neues Leben, die Aufnahme
            in die Gemeinschaft der Kirche
            und den Beginn eines persönlichen Glaubensweges.
          </p>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Zeichen
            </span>

            <h2>
              Was bei der Taufe wichtig ist
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              💧
            </div>

            <h3>
              Wasser
            </h3>

            <p>
              Das Wasser ist das zentrale Zeichen der Taufe.
              Es steht für Reinigung, neues Leben
              und einen neuen Anfang.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              ✝
            </div>

            <h3>
              Kreuzzeichen
            </h3>

            <p>
              Das Kreuzzeichen erinnert an Jesus Christus
              und macht sichtbar,
              dass die Taufe zum christlichen Glauben gehört.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🕯
            </div>

            <h3>
              Taufkerze
            </h3>

            <p>
              Die Taufkerze steht für Christus
              als Licht und für den Glaubensweg,
              der mit der Taufe beginnt.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🤝
            </div>

            <h3>
              Gemeinschaft
            </h3>

            <p>
              Durch die Taufe wird ein Mensch
              in die Gemeinschaft der Kirche aufgenommen
              und mit anderen Glaubenden verbunden.
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
              Fragen zur Taufe
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Was bedeutet ein neuer Anfang?
            </h3>

            <p>
              Gibt es Momente in deinem Leben,
              in denen du bewusst neu beginnen möchtest?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was bedeutet Zugehörigkeit?
            </h3>

            <p>
              Welche Menschen oder Gemeinschaften
              geben dir Halt und Orientierung?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Was trägt meinen Glauben?
            </h3>

            <p>
              Welche Erfahrungen,
              Menschen oder Gebete helfen dir,
              deinen eigenen Glaubensweg zu gehen?
            </p>

          </article>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/glauben/sakramente.php"
          >
            ← Zurück zu den Sakramenten
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/glauben/firmung.php"
          >
            Weiter zur Firmung →
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