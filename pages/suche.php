<?php

require_once __DIR__ . '/../includes/functions.php';

$pageTitle = "Suche – glaube-ich.de";
$currentPage = "suche";

$query = trim($_GET['q'] ?? '');

$results = [];

$pages = [

  [
    'title' => 'Tagesimpuls',
    'description' => 'Ein kurzer geistlicher Impuls für den Tag.',
    'url' => '/pages/heute/tagesimpuls.php',
    'keywords' => 'tagesimpuls heute gedanken glaube inspiration'
  ],

  [
    'title' => 'Tageslesung',
    'description' => 'Lesungen und biblische Texte des Tages.',
    'url' => '/pages/heute/tageslesung.php',
    'keywords' => 'tageslesung lesung bibel heute'
  ],

  [
    'title' => 'Evangelium',
    'description' => 'Das Evangelium des Tages lesen und als Audio anhören.',
    'url' => '/pages/heute/evangelium.php',
    'keywords' => 'evangelium hören audio bibel jesus'
  ],

  [
    'title' => 'Podcast',
    'description' => 'Impulse und Gedanken als Podcast.',
    'url' => '/pages/heute/podcast.php',
    'keywords' => 'podcast audio hören folgen'
  ],

  [
    'title' => 'Die Heilige Schrift',
    'description' => 'Altes und Neues Testament entdecken.',
    'url' => '/pages/entdecken/bibel.php',
    'keywords' => 'bibel heilige schrift altes neues testament'
  ],

  [
    'title' => 'Bibelstudium',
    'description' => 'Biblische Texte und Zusammenhänge vertiefen.',
    'url' => '/pages/entdecken/bibelstudium.php',
    'keywords' => 'bibelstudium evangelien psalmen gleichnisse'
  ],

  [
    'title' => 'Jerusalem',
    'description' => 'Geschichte und Orte des Glaubens entdecken.',
    'url' => '/pages/entdecken/jerusalem.php',
    'keywords' => 'jerusalem altstadt grabeskirche ölberg via dolorosa'
  ],

  [
    'title' => 'Pilgerreise',
    'description' => 'Eine geistliche Reise durch Jerusalem.',
    'url' => '/pages/entdecken/pilgerreise.php',
    'keywords' => 'pilgerreise pilgern jerusalem getsemani ölberg'
  ],

  [
    'title' => 'Grundgebete',
    'description' => 'Bekannte Gebete des christlichen Glaubens.',
    'url' => '/pages/glauben/grundgebete.php',
    'keywords' => 'gebet grundgebete vaterunser ave maria glaubensbekenntnis'
  ],

  [
    'title' => 'Sakramente',
    'description' => 'Die sieben Sakramente einfach erklärt.',
    'url' => '/pages/glauben/sakramente.php',
    'keywords' => 'sakramente taufe eucharistie firmung beichte ehe weihe krankensalbung'
  ],

  [
    'title' => 'Fragen & Antworten',
    'description' => 'Fragen rund um Glauben, Bibel und Kirche.',
    'url' => '/pages/glauben/fragen.php',
    'keywords' => 'fragen antworten zweifel glauben kirche'
  ],

  [
    'title' => 'Gebetsgenerator',
    'description' => 'Erstelle ein persönliches Gebet.',
    'url' => '/pages/werkzeuge/gebet-generator.php',
    'keywords' => 'gebetsgenerator gebet erstellen generator'
  ],

  [
    'title' => 'Predigtgenerator',
    'description' => 'Erstelle eine erste Predigtstruktur.',
    'url' => '/pages/werkzeuge/predigt-generator.php',
    'keywords' => 'predigt generator predigtgenerator bibelstelle'
  ],

  [
    'title' => 'Über uns',
    'description' => 'Mehr über die Idee hinter glaube-ich.de.',
    'url' => '/pages/ueber-uns.php',
    'keywords' => 'über uns projekt glaube ich'
  ],

  [
    'title' => 'Hilfe',
    'description' => 'Hilfe und Orientierung zur Website.',
    'url' => '/pages/hilfe.php',
    'keywords' => 'hilfe website orientierung support'
  ],

  [
    'title' => 'Kontakt',
    'description' => 'Kontakt zu glaube-ich.de.',
    'url' => '/pages/kontakt.php',
    'keywords' => 'kontakt email nachricht feedback'
  ]

];


if ($query !== '') {

  $needle = strtolower($query);

  foreach ($pages as $page) {

    $haystack = strtolower(
      $page['title'] . ' ' .
      $page['description'] . ' ' .
      $page['keywords']
    );

    if (str_contains($haystack, $needle)) {

      $results[] = [
        'type' => 'Seite',
        'title' => $page['title'],
        'description' => $page['description'],
        'url' => $page['url']
      ];

    }

  }


  $articles = getArticles();

  foreach ($articles as $article) {

    $content = '';

    if (!empty($article['content']) && is_array($article['content'])) {
      $content = implode(' ', $article['content']);
    }

    $haystack = strtolower(
      ($article['title'] ?? '') . ' ' .
      ($article['description'] ?? '') . ' ' .
      ($article['category'] ?? '') . ' ' .
      $content
    );

    if (str_contains($haystack, $needle)) {

      $results[] = [
        'type' => 'Beitrag',
        'title' => $article['title'],
        'description' => $article['description'],
        'url' => '/article.php?slug=' . urlencode($article['slug'])
      ];

    }

  }

}

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
    content="Suche auf glaube-ich.de."
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
  include __DIR__ . '/../includes/sidebar.php';
  ?>

  <div class="page">

    <?php
    include __DIR__ . '/../includes/header.php';
    ?>

    <main>

      <section class="page-hero page-hero--reading">

        <div class="page-hero__overlay"></div>

        <div class="page-hero__content">

          <nav class="breadcrumb">

            <a href="/index.php">
              Startseite
            </a>

            <span>›</span>

            <strong>
              Suche
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Inhalte finden
          </span>

          <h1>
            Suche
          </h1>

          <p>
            Durchsuche Seiten,
            Artikel und Themen auf glaube-ich.de.
          </p>

        </div>

      </section>


      <section class="page-content">

        <div class="search-page">

         


          <?php if ($query === ''): ?>

            <div class="search-page__empty">

              <div class="search-page__icon">
                ⌕
              </div>

              <h2>
                Was möchtest du entdecken?
              </h2>

              <p>
                Gib oben einen Suchbegriff ein,
                zum Beispiel „Gebet“,
                „Jerusalem“,
                „Bibel“
                oder „Vertrauen“.
              </p>

            </div>


          <?php elseif (empty($results)): ?>

            <div class="search-page__empty">

              <div class="search-page__icon">
                ?
              </div>

              <span class="section-kicker">
                Keine Treffer
              </span>

              <h2>
                Zu „<?= escape($query) ?>“
                wurde nichts gefunden
              </h2>

              <p>
                Versuche es mit einem kürzeren
                oder allgemeineren Begriff.
              </p>

            </div>


          <?php else: ?>

            <div class="search-results__heading">

              <div>

                <span class="section-kicker">
                  Suchergebnisse
                </span>

                <h2>
                  <?= count($results) ?>
                  Treffer für „<?= escape($query) ?>“
                </h2>

              </div>

            </div>


            <div class="search-results">

              <?php foreach ($results as $result): ?>

                <article class="search-result">

                  <span class="search-result__type">
                    <?= escape($result['type']) ?>
                  </span>

                  <h3>
                    <?= escape($result['title']) ?>
                  </h3>

                  <p>
                    <?= escape($result['description']) ?>
                  </p>

                  <a href="<?= escape($result['url']) ?>">
                    Öffnen →
                  </a>

                </article>

              <?php endforeach; ?>

            </div>

          <?php endif; ?>

        </div>

      </section>

    </main>


    <?php
    include __DIR__ . '/../includes/footer.php';
    ?>

  </div>


  <script src="/js/navigation.js"></script>
  <script src="/js/theme.js"></script>
  <script src="/js/main.js"></script>

</body>

</html>