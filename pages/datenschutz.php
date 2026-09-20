<?php

require_once __DIR__ . '/../includes/functions.php';

$pageTitle = "Datenschutz – glaube-ich.de";
$currentPage = "datenschutz";

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
    content="Datenschutzhinweise für glaube-ich.de."
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
              Datenschutz
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Datenschutz
          </span>

          <h1>
            Datenschutzerklärung
          </h1>

          <p>
            Informationen darüber,
            welche personenbezogenen Daten
            beim Besuch von glaube-ich.de
            verarbeitet werden können.
          </p>

        </div>

      </section>


      <!-- DATENSCHUTZ -->

      <section class="page-content">

        <div class="legal-layout">

          <!-- NAVIGATION -->

          <aside class="legal-nav">

            <span class="section-kicker">
              Datenschutz
            </span>

            <h2>
              Auf einen Blick
            </h2>

            <a href="#verantwortlicher">
              Verantwortlicher
            </a>

            <a href="#server">
              Serverdaten
            </a>

            <a href="#kontakt">
              Kontaktaufnahme
            </a>

            <a href="#fonts">
              Webfonts
            </a>

            <a href="#cookies">
              Cookies
            </a>

            <a href="#rechte">
              Deine Rechte
            </a>

            <a href="#aenderungen">
              Änderungen
            </a>

          </aside>


          <!-- INHALT -->

          <article class="legal-content">

            <!-- VERANTWORTLICHER -->

            <section id="verantwortlicher">

              <span class="section-kicker">
                Verantwortlicher
              </span>

              <h2>
                Verantwortlich für die Datenverarbeitung
              </h2>

              <div class="legal-info-card">

                <strong>
                  Michael Flesch
                </strong>

                <p>
                  Rumpenheimerstr. 8<br>
                  60388 Frankfurt am Main<br>
                  Deutschland
                </p>

                <p>
                  E-Mail:
                  <a href="mailto:michae.flesch@gmail.com">
                    michae.flesch@gmail.com
                  </a>
                </p>

              </div>

            </section>


            <!-- ALLGEMEIN -->

            <section>

              <span class="section-kicker">
                Allgemeine Hinweise
              </span>

              <h2>
                Schutz deiner Daten
              </h2>

              <p>
                Der Schutz personenbezogener Daten
                ist uns wichtig.
                Personenbezogene Daten werden nur verarbeitet,
                soweit dies für den Betrieb dieser Website,
                die Bereitstellung ihrer Funktionen
                oder zur Kommunikation erforderlich ist.
              </p>

              <p>
                Als personenbezogene Daten gelten Informationen,
                mit denen eine Person direkt oder indirekt
                identifiziert werden kann,
                beispielsweise Name,
                E-Mail-Adresse oder IP-Adresse.
              </p>

            </section>


            <!-- SERVER -->

            <section id="server">

              <span class="section-kicker">
                Technischer Betrieb
              </span>

              <h2>
                Server-Log-Dateien
              </h2>

              <p>
                Beim Aufruf einer Website können durch den
                jeweiligen Hostinganbieter automatisch
                technische Informationen verarbeitet werden.
              </p>

              <p>
                Dazu können insbesondere gehören:
              </p>

              <div class="legal-list">

                <span>
                  IP-Adresse
                </span>

                <span>
                  Datum und Uhrzeit des Zugriffs
                </span>

                <span>
                  aufgerufene Seite oder Datei
                </span>

                <span>
                  Browsertyp und Browserversion
                </span>

                <span>
                  Betriebssystem
                </span>

                <span>
                  Referrer-URL
                </span>

              </div>

              <p>
                Diese Daten dienen insbesondere
                der technischen Bereitstellung,
                Stabilität und Sicherheit der Website.
              </p>

              <p>
                Die konkreten Speicherfristen
                hängen vom später eingesetzten Hostinganbieter
                und dessen Konfiguration ab.
              </p>

            </section>


            <!-- KONTAKT -->

            <section id="kontakt">

              <span class="section-kicker">
                Kommunikation
              </span>

              <h2>
                Kontaktaufnahme
              </h2>

              <p>
                Wenn du per E-Mail
                oder über ein Kontaktformular
                Kontakt aufnimmst,
                können die von dir übermittelten Angaben
                zur Bearbeitung deiner Anfrage verarbeitet werden.
              </p>

              <p>
                Dazu können insbesondere
                Name,
                E-Mail-Adresse,
                Betreff
                und der Inhalt deiner Nachricht gehören.
              </p>

              <p>
                Eine Weitergabe an Dritte erfolgt nicht,
                sofern hierfür keine rechtliche Grundlage
                besteht oder dies zur Bearbeitung
                der Anfrage erforderlich ist.
              </p>

              <div class="legal-notice">

                <strong>
                  Aktueller Entwicklungsstand
                </strong>

                <p>
                  Das derzeit lokal entwickelte Kontaktformular
                  versendet noch keine Nachrichten
                  an einen externen Maildienst.
                  Vor der produktiven Veröffentlichung
                  wird dieser Abschnitt an die tatsächlich
                  eingesetzte Versandlösung angepasst.
                </p>

              </div>

            </section>


            <!-- FONTS -->

            <section id="fonts">

              <span class="section-kicker">
                Darstellung
              </span>

              <h2>
                Google Fonts
              </h2>

              <p>
                Die aktuelle Version der Website
                bindet Schriftarten über Google Fonts ein.
                Dabei kann beim Laden der Schriftarten
                eine Verbindung zu Servern von Google
                hergestellt werden.
              </p>

              <p>
                Hierdurch können technische Daten,
                beispielsweise die IP-Adresse,
                an den jeweiligen Anbieter übertragen werden.
              </p>

              <p>
                Für die spätere produktive Version
                kann alternativ geprüft werden,
                die verwendeten Schriftarten lokal
                auf dem eigenen Server bereitzustellen.
                Dadurch lässt sich eine externe Verbindung
                beim Laden der Fonts vermeiden.
              </p>

            </section>


            <!-- COOKIES -->

            <section id="cookies">

              <span class="section-kicker">
                Browser
              </span>

              <h2>
                Cookies und lokale Speicherung
              </h2>

              <p>
                Nach aktuellem Entwicklungsstand
                werden keine klassischen Tracking-
                oder Werbe-Cookies eingesetzt.
              </p>

              <p>
                Für die Speicherung bestimmter Einstellungen
                kann jedoch der lokale Speicher
                des Browsers verwendet werden.
              </p>

              <p>
                Beispielsweise wird die Auswahl
                des hellen oder dunklen Farbschemas
                lokal im Browser gespeichert,
                damit diese Einstellung
                beim nächsten Besuch erhalten bleibt.
              </p>

              <p>
                Diese Information dient ausschließlich
                der Funktionalität der Website
                und wird nicht für Werbezwecke genutzt.
              </p>

            </section>


            <!-- AUDIO / TOOLS -->

            <section>

              <span class="section-kicker">
                Funktionen
              </span>

              <h2>
                Audio und interaktive Werkzeuge
              </h2>

              <p>
                glaube-ich.de soll künftig
                unter anderem Audioinhalte
                wie Evangelien und Podcasts bereitstellen.
              </p>

              <p>
                Werden Audiodateien direkt
                vom eigenen Webserver ausgeliefert,
                entstehen grundsätzlich nur
                die für den Webseitenaufruf üblichen
                technischen Verbindungsdaten.
              </p>

              <p>
                Der Gebetsgenerator
                und der Predigtgenerator
                arbeiten im aktuellen Entwicklungsstand
                vollständig lokal im Browser
                und übertragen die eingegebenen Texte
                nicht an einen externen KI-Dienst.
              </p>

              <p>
                Sollte später eine externe KI-Schnittstelle
                eingebunden werden,
                wird die Datenschutzerklärung
                vor der Veröffentlichung entsprechend ergänzt.
              </p>

            </section>


            <!-- RECHTE -->

            <section id="rechte">

              <span class="section-kicker">
                Datenschutzrechte
              </span>

              <h2>
                Deine Rechte
              </h2>

              <p>
                Soweit die gesetzlichen Voraussetzungen
                erfüllt sind,
                können betroffene Personen insbesondere
                folgende Rechte haben:
              </p>

              <div class="legal-list">

                <span>
                  Recht auf Auskunft
                </span>

                <span>
                  Recht auf Berichtigung
                </span>

                <span>
                  Recht auf Löschung
                </span>

                <span>
                  Recht auf Einschränkung der Verarbeitung
                </span>

                <span>
                  Recht auf Datenübertragbarkeit
                </span>

                <span>
                  Recht auf Widerspruch
                </span>

              </div>

              <p>
                Außerdem besteht grundsätzlich
                die Möglichkeit,
                sich bei einer zuständigen
                Datenschutzaufsichtsbehörde zu beschweren.
              </p>

            </section>


            <!-- SICHERHEIT -->

            <section>

              <span class="section-kicker">
                Sicherheit
              </span>

              <h2>
                Technische Schutzmaßnahmen
              </h2>

              <p>
                Für den produktiven Betrieb
                sollte die Website verschlüsselt
                über HTTPS bereitgestellt werden.
              </p>

              <p>
                Darüber hinaus werden angemessene
                technische und organisatorische Maßnahmen
                eingesetzt,
                um personenbezogene Daten
                vor Verlust,
                Missbrauch
                oder unbefugtem Zugriff zu schützen.
              </p>

            </section>


            <!-- ÄNDERUNGEN -->

            <section id="aenderungen">

              <span class="section-kicker">
                Aktualisierung
              </span>

              <h2>
                Änderungen dieser Datenschutzerklärung
              </h2>

              <p>
                Diese Datenschutzerklärung kann angepasst werden,
                wenn sich Funktionen,
                externe Dienste
                oder die technische Infrastruktur
                von glaube-ich.de ändern.
              </p>

              <div class="legal-copyright">

                <span>
                  Stand
                </span>

                <strong>
                  September 2026
                </strong>

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