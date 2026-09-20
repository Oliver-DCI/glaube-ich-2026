<?php

require_once __DIR__ . '/../includes/functions.php';

$pageTitle = "Impressum – glaube-ich.de";
$currentPage = "impressum";

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
    content="Impressum und rechtliche Angaben zu glaube-ich.de."
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

      <!-- HERO -->

      <section class="page-hero page-hero--reading">

        <div class="page-hero__overlay"></div>

        <div class="page-hero__content">

          <nav class="breadcrumb">

            <a href="/index.php">
              Startseite
            </a>

            <span>›</span>

            <strong>
              Impressum
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Rechtliche Angaben
          </span>

          <h1>
            Impressum
          </h1>

          <p>
            Anbieterkennzeichnung,
            Kontaktinformationen
            und rechtliche Hinweise zu glaube-ich.de.
          </p>

        </div>

      </section>


      <!-- IMPRESSUM -->

      <section class="page-content">

        <div class="legal-layout">

          <!-- NAVIGATION -->

          <aside class="legal-nav">

            <span class="section-kicker">
              Rechtliches
            </span>

            <h2>
              Auf einen Blick
            </h2>

            <a href="#anbieter">
              Anbieter
            </a>

            <a href="#kontakt">
              Kontakt
            </a>

            <a href="#projekt">
              Das Projekt
            </a>

            <a href="#inhalte">
              Verantwortlich für Inhalte
            </a>

            <a href="#haftung">
              Haftung
            </a>

            <a href="#urheberrecht">
              Urheberrecht
            </a>

            <a href="#entwicklung">
              Technische Umsetzung
            </a>

          </aside>


          <!-- INHALT -->

          <article class="legal-content">

            <!-- ANBIETER -->

            <section id="anbieter">

              <span class="section-kicker">
                Anbieterkennzeichnung
              </span>

              <h2>
                Betreiber von glaube-ich.de
              </h2>

              <p>
                Verantwortlicher Betreiber dieser Website:
              </p>

              <div class="legal-info-card">

                <strong>
                  Michael Flesch
                </strong>

                <p>
                  Rumpenheimerstr. 8<br>
                  60388 Frankfurt am Main<br>
                  Deutschland
                </p>

              </div>

            </section>


            <!-- KONTAKT -->

            <section id="kontakt">

              <span class="section-kicker">
                Kontakt
              </span>

              <h2>
                Kontaktmöglichkeiten
              </h2>

              <div class="legal-contact-list">

                <div>

                  <span>
                    Telefon
                  </span>

                  <a href="tel:+4961099669927">
                    06109 9669927
                  </a>

                </div>


                <div>

                  <span>
                    E-Mail
                  </span>

                  <a href="mailto:michae.flesch@gmail.com">
                    michae.flesch@gmail.com
                  </a>

                </div>


                <div>

                  <span>
                    Website
                  </span>

                  <a
                    href="https://www.glaube-ich.de"
                    target="_blank"
                    rel="noopener noreferrer"
                  >
                    www.glaube-ich.de
                  </a>

                </div>

              </div>

            </section>


            <!-- PROJEKT -->

            <section id="projekt">

              <span class="section-kicker">
                Über das Projekt
              </span>

              <h2>
                Privates Glaubensprojekt
              </h2>

              <p>
                glaube-ich.de ist ein privates,
                ehrenamtlich getragenes Glaubensprojekt.
              </p>

              <p>
                Die Website beschäftigt sich mit Themen
                rund um den christlichen Glauben,
                die Heilige Schrift,
                Gebet, Spiritualität
                und die katholische Kirche.
              </p>

              <p>
                Ziel ist es,
                Glaubensinhalte verständlich
                und zugänglich aufzubereiten
                und Menschen zum Nachdenken,
                Fragen und Entdecken einzuladen.
              </p>

            </section>


            <!-- VERANTWORTLICH -->

            <section id="inhalte">

              <span class="section-kicker">
                Redaktion
              </span>

              <h2>
                Verantwortlich für die Inhalte
              </h2>

              <p>
                Verantwortlich für die redaktionellen Inhalte
                von glaube-ich.de:
              </p>

              <div class="legal-info-card">

                <strong>
                  Michael Flesch
                </strong>

                <p>
                  Rumpenheimerstr. 8<br>
                  60388 Frankfurt am Main
                </p>

              </div>

            </section>


            <!-- HAFTUNG -->

            <section id="haftung">

              <span class="section-kicker">
                Rechtliche Hinweise
              </span>

              <h2>
                Haftung für Inhalte
              </h2>

              <p>
                Die Inhalte dieser Website werden
                mit größtmöglicher Sorgfalt erstellt.
                Dennoch kann keine Gewähr
                für die Richtigkeit,
                Vollständigkeit und Aktualität
                aller Inhalte übernommen werden.
              </p>

              <h3>
                Haftung für externe Links
              </h3>

              <p>
                Diese Website kann Links
                zu externen Websites Dritter enthalten.
                Auf deren Inhalte besteht kein Einfluss.
                Für die Inhalte der verlinkten Seiten
                ist grundsätzlich der jeweilige Anbieter
                oder Betreiber verantwortlich.
              </p>

              <p>
                Sollten rechtswidrige Inhalte
                auf verlinkten Seiten bekannt werden,
                werden entsprechende Links
                nach Prüfung entfernt.
              </p>

            </section>


            <!-- URHEBERRECHT -->

            <section id="urheberrecht">

              <span class="section-kicker">
                Copyright
              </span>

              <h2>
                Urheberrecht
              </h2>

              <p>
                Die durch den Betreiber erstellten Inhalte
                und Werke auf dieser Website
                unterliegen dem deutschen Urheberrecht.
              </p>

              <p>
                Die Vervielfältigung,
                Bearbeitung,
                Verbreitung
                oder sonstige Verwertung
                außerhalb der gesetzlichen Grenzen
                bedarf grundsätzlich der Zustimmung
                des jeweiligen Rechteinhabers.
              </p>

              <p>
                Inhalte Dritter werden,
                soweit erforderlich,
                entsprechend gekennzeichnet.
              </p>

              <div class="legal-copyright">

                <span>
                  Copyright
                </span>

                <strong>
                  © Michael Flesch · glaube-ich.de
                </strong>

              </div>

            </section>


            <!-- TECHNISCHE UMSETZUNG -->

            <section id="entwicklung">

              <span class="section-kicker">
                Relaunch 2026
              </span>

              <h2>
                Technische Umsetzung
              </h2>

              <p>
                Konzeption,
                modernes Webdesign
                und technische Umsetzung
                des Relaunchs von glaube-ich.de:
              </p>

              <div class="legal-developer">

                <div class="legal-developer__icon">
                  &lt;/&gt;
                </div>

                <div>

                  <span>
                    Web Development
                  </span>

                  <strong>
                    Oliver Pfaff - 
                        <a
                        href="https://my-portfolio-2026-vert.vercel.app/"
                        target="_blank"
                        rel="noopener noreferrer"
                        >
                    VISIONDESIGN
                  </strong>

                  <p>
                    Frontend Development ·
                    PHP · JavaScript ·
                    Responsive Webdesign
                  </p>

                </div>

              </div>

            </section>

          </article>

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