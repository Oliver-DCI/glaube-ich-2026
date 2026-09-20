<?php

require_once __DIR__ . '/../includes/functions.php';

$pageTitle = "Kontakt – glaube-ich.de";
$currentPage = "kontakt";

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
    content="Kontakt zu glaube-ich.de – Fragen, Hinweise und Rückmeldungen."
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
              Kontakt
            </strong>

          </nav>

          <span class="page-hero__kicker">
            Schreib uns
          </span>

          <h1>
            Kontakt
          </h1>

          <p>
            Du hast eine Frage,
            einen Hinweis oder möchtest uns
            eine Rückmeldung geben?
          </p>

        </div>

      </section>


      <!-- KONTAKT -->

      <section class="page-content">

        <div class="contact-layout">

          <!-- INFO -->

          <aside class="contact-info">

            <span class="section-kicker">
              Kontakt
            </span>

            <h2>
              Wir freuen uns über deine Nachricht
            </h2>

            <p>
              Ob Frage zum Glauben,
              Hinweis zu einem Inhalt
              oder technische Rückmeldung:
              Schreib uns gerne.
            </p>

            <div class="contact-info__items">

              <div class="contact-info__item">

                <div class="contact-info__icon">
                  ✉
                </div>

                <div>

                  <span>
                    E-Mail
                  </span>

                  <strong>
                    kontakt@glaube-ich.de
                  </strong>

                </div>

              </div>


              <div class="contact-info__item">

                <div class="contact-info__icon">
                  ?
                </div>

                <div>

                  <span>
                    Fragen zur Website
                  </span>

                  <strong>
                    Wir helfen gerne weiter
                  </strong>

                </div>

              </div>


              <div class="contact-info__item">

                <div class="contact-info__icon">
                  ♡
                </div>

                <div>

                  <span>
                    Rückmeldungen
                  </span>

                  <strong>
                    Ideen und Hinweise sind willkommen
                  </strong>

                </div>

              </div>

            </div>

          </aside>


          <!-- FORMULAR -->

          <section class="contact-form-card">

            <span class="section-kicker">
              Nachricht senden
            </span>

            <h2>
              Was möchtest du uns mitteilen?
            </h2>

            <form
              class="contact-form"
              id="contactForm"
            >

              <div class="contact-form__row">

                <div class="generator-field">

                  <label for="contactName">
                    Name
                  </label>

                  <input
                    type="text"
                    id="contactName"
                    name="name"
                    placeholder="Dein Name"
                    required
                  >

                </div>


                <div class="generator-field">

                  <label for="contactEmail">
                    E-Mail
                  </label>

                  <input
                    type="email"
                    id="contactEmail"
                    name="email"
                    placeholder="name@example.de"
                    required
                  >

                </div>

              </div>


              <div class="generator-field">

                <label for="contactSubject">
                  Betreff
                </label>

                <select
                  id="contactSubject"
                  name="subject"
                  required
                >

                  <option value="">
                    Bitte auswählen
                  </option>

                  <option value="frage">
                    Frage zu einem Inhalt
                  </option>

                  <option value="technik">
                    Technisches Problem
                  </option>

                  <option value="feedback">
                    Feedback
                  </option>

                  <option value="sonstiges">
                    Sonstiges
                  </option>

                </select>

              </div>


              <div class="generator-field">

                <label for="contactMessage">
                  Nachricht
                </label>

                <textarea
                  id="contactMessage"
                  name="message"
                  rows="8"
                  placeholder="Deine Nachricht ..."
                  required
                ></textarea>

              </div>


              <button
                type="submit"
                class="button button--primary contact-submit"
              >
                Nachricht vorbereiten →
              </button>

            </form>


            <div
              class="contact-success"
              id="contactSuccess"
              hidden
            >

              <div class="contact-success__icon">
                ✓
              </div>

              <div>

                <h3>
                  Nachricht vorbereitet
                </h3>

                <p>
                  Das Formular funktioniert lokal bereits.
                  Der echte E-Mail-Versand wird später
                  an einen Maildienst oder Server angebunden.
                </p>

              </div>

            </div>

          </section>

        </div>

      </section>


      <!-- HINWEIS -->

      <section class="page-content page-content--soft">

        <div class="generator-note">

          <div class="generator-note__icon">
            ✦
          </div>

          <div>

            <span class="section-kicker">
              Hinweis
            </span>

            <h2>
              Persönliche oder vertrauliche Informationen
            </h2>

            <p>
              Bitte sende über das Kontaktformular
              keine sensiblen persönlichen Daten.
              Für technische Rückmeldungen reichen
              in der Regel eine kurze Beschreibung
              und die betroffene Seite.
            </p>

          </div>

        </div>

      </section>


      <!-- WEITER -->

      <section class="page-content">

        <div class="section-heading">

          <div>

            <span class="section-kicker">
              Vielleicht suchst du auch
            </span>

            <h2>
              Weitere Bereiche
            </h2>

          </div>

        </div>


        <div class="tools-grid">

          <article class="tool-card">

            <div class="tool-card__icon">
              ?
            </div>

            <h3>
              Fragen & Antworten
            </h3>

            <p>
              Antworten auf häufige Fragen
              rund um den Glauben.
            </p>

            <a href="/pages/glauben/fragen.php">
              Fragen entdecken →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              ✦
            </div>

            <h3>
              Über uns
            </h3>

            <p>
              Erfahre mehr über
              die Idee hinter glaube-ich.de.
            </p>

            <a href="/pages/ueber-uns.php">
              Über uns →
            </a>

          </article>


          <article class="tool-card">

            <div class="tool-card__icon">
              ☀
            </div>

            <h3>
              Tagesimpuls
            </h3>

            <p>
              Ein kurzer Gedanke
              für deinen Tag.
            </p>

            <a href="/pages/heute/tagesimpuls.php">
              Tagesimpuls öffnen →
            </a>

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
  <script src="/js/contact.js"></script>

</body>

</html>