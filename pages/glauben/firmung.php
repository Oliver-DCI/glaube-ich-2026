<?php

require_once __DIR__ . '/../../includes/functions.php';

$pageTitle = "Firmung – glaube-ich.de";
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
    content="Die Firmung – Bedeutung, Zeichen und geistliche Impulse rund um eines der sieben Sakramente."
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
              Firmung
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Sakrament
          </span>

          <h1>
            Firmung
          </h1>

          <p>
            Ein Zeichen der Stärkung,
            der bewussten Entscheidung
            und der Begleitung durch den Heiligen Geist.
          </p>

        </div>

      </section>


      <section class="page-content">

        <div class="detail-intro">

          <span class="section-kicker">
            Bedeutung
          </span>

          <h2>
            Den eigenen Glaubensweg bewusst weitergehen
          </h2>

          <p>
            Die Firmung steht für die Stärkung im Glauben
            und die bewusste Entscheidung,
            den eigenen Glaubensweg weiterzugehen.
            In der katholischen Tradition gehört sie
            gemeinsam mit Taufe und Eucharistie
            zu den Sakramenten der christlichen Initiation.
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
              Was bei der Firmung wichtig ist
            </h2>

          </div>

        </div>

        <div class="detail-grid">

          <article class="detail-card">

            <div class="detail-card__icon">
              🕊
            </div>

            <h3>
              Heiliger Geist
            </h3>

            <p>
              Die Firmung ist eng mit der Bitte
              um die Kraft und Begleitung
              des Heiligen Geistes verbunden.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              ✋
            </div>

            <h3>
              Handauflegung
            </h3>

            <p>
              Die Handauflegung ist ein Zeichen
              von Segen, Begleitung
              und geistlicher Stärkung.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🫒
            </div>

            <h3>
              Chrisam
            </h3>

            <p>
              Bei der Firmung wird die Stirn
              mit geweihtem Chrisam gesalbt.
              Die Salbung steht für Stärkung
              und Zugehörigkeit.
            </p>

          </article>

          <article class="detail-card">

            <div class="detail-card__icon">
              🤝
            </div>

            <h3>
              Verantwortung
            </h3>

            <p>
              Die Firmung lädt dazu ein,
              Verantwortung für den eigenen Glauben
              und das eigene Handeln zu übernehmen.
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
              Fragen zur Firmung
            </h2>

          </div>

        </div>

        <div class="topic-list">

          <article class="topic-list__item">

            <h3>
              Wofür möchte ich einstehen?
            </h3>

            <p>
              Welche Werte und Überzeugungen
              sind dir besonders wichtig?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Wo brauche ich Mut?
            </h3>

            <p>
              Gibt es Situationen,
              in denen du dir Kraft,
              Klarheit oder Vertrauen wünschst?
            </p>

          </article>

          <article class="topic-list__item">

            <h3>
              Wie möchte ich meinen Glauben leben?
            </h3>

            <p>
              Überlege, wie Glaube
              in deinem Alltag sichtbar
              und erfahrbar werden kann.
            </p>

          </article>

        </div>

      </section>


      <section class="page-content page-content--soft">

        <div class="detail-navigation">

          <a
            class="detail-navigation__back"
            href="/pages/glauben/taufe.php"
          >
            ← Zurück zur Taufe
          </a>

          <a
            class="detail-navigation__next"
            href="/pages/glauben/eucharistie.php"
          >
            Weiter zur Eucharistie →
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