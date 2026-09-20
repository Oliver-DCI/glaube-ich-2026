const sermonForm = document.querySelector("#sermonGeneratorForm");
const sermonResult = document.querySelector("#sermonResult");
const sermonActions = document.querySelector("#sermonActions");
const copySermonButton = document.querySelector("#copySermon");
const newSermonButton = document.querySelector("#newSermon");


if (sermonForm && sermonResult) {

  const topics = {

    vertrauen: {
      title: "Vertrauen, wenn der Weg unklar ist",
      idea:
        "Glaube bedeutet nicht, jede Antwort zu kennen. Vertrauen beginnt oft dort, wo wir trotz Unsicherheit den nächsten Schritt wagen.",
      application:
        "Die Frage lautet deshalb nicht nur: Weiß ich, wie alles ausgeht? Sondern: Wem vertraue ich auf meinem Weg?"
    },

    hoffnung: {
      title: "Hoffnung, die weiterträgt",
      idea:
        "Christliche Hoffnung ignoriert Schwierigkeiten nicht. Sie hält daran fest, dass Dunkelheit nicht das letzte Wort haben muss.",
      application:
        "Hoffnung zeigt sich oft in kleinen Schritten: aufstehen, weitermachen, einander helfen und offen bleiben für Neues."
    },

    liebe: {
      title: "Liebe, die sichtbar wird",
      idea:
        "Liebe bleibt im christlichen Glauben nicht nur ein Gefühl. Sie zeigt sich darin, wie Menschen miteinander umgehen.",
      application:
        "Die entscheidende Frage ist: Wo kann Liebe heute konkret werden – in einem Wort, einer Entscheidung oder einer Begegnung?"
    },

    vergebung: {
      title: "Die Kraft eines neuen Anfangs",
      idea:
        "Vergebung macht Geschehenes nicht ungeschehen. Sie kann aber verhindern, dass Schuld und Verletzung für immer das letzte Wort behalten.",
      application:
        "Ein neuer Anfang braucht Ehrlichkeit, Verantwortung und manchmal viel Geduld."
    },

    gemeinschaft: {
      title: "Glaube braucht Gemeinschaft",
      idea:
        "Menschen müssen ihren Glaubensweg nicht allein gehen. Gemeinschaft trägt, fordert heraus und eröffnet neue Perspektiven.",
      application:
        "Wo Menschen einander zuhören, unterstützen und miteinander feiern, kann Glaube konkret erfahrbar werden."
    },

    neuanfang: {
      title: "Mut zum Neuanfang",
      idea:
        "Die Bibel erzählt immer wieder von Menschen, deren Geschichte nicht mit ihrem Scheitern endet.",
      application:
        "Neuanfang bedeutet nicht, die Vergangenheit zu vergessen. Er bedeutet, der Zukunft wieder eine Möglichkeit zu geben."
    },

    glaube: {
      title: "Glaube mitten im Alltag",
      idea:
        "Glaube findet nicht nur in besonderen Momenten statt. Er zeigt sich im Alltag, in Entscheidungen, Beziehungen und im Umgang mit anderen.",
      application:
        "Vielleicht beginnt gelebter Glaube genau dort, wo wir heute bewusst anders handeln können."
    }

  };


  const occasions = {

    sonntag:
      "Diese Gedanken können uns als Gemeinde in die kommende Woche begleiten.",

    hochzeit:
      "Gerade an einem gemeinsamen Lebensanfang wird sichtbar, dass Liebe immer wieder neu gewählt und gelebt werden will.",

    taufe:
      "Die Taufe erinnert daran, dass ein Mensch seinen Weg nicht allein beginnt, sondern unter einer Zusage von Liebe und Begleitung.",

    trauer:
      "In Zeiten des Abschieds dürfen Trauer, Erinnerung und Hoffnung nebeneinander stehen.",

    jugend:
      "Gerade junge Menschen erleben viele offene Fragen. Glaube darf dabei Raum für Suche, Zweifel und eigene Entscheidungen lassen.",

    andacht:
      "Vielleicht reicht für diesen Moment ein einziger Gedanke, den wir mit in unseren Alltag nehmen.",

    allgemein:
      "Diese Botschaft kann uns unabhängig von unserer aktuellen Lebenssituation begleiten."

  };


  const audiences = {

    allgemein:
      "für eine gemischte Gemeinde",

    jugendliche:
      "mit einer direkten und lebensnahen Sprache für Jugendliche",

    familien:
      "mit Blick auf Beziehungen, Alltag und gemeinsames Leben",

    senioren:
      "mit Blick auf Lebenserfahrung, Erinnerung und Hoffnung",

    suchende:
      "offen formuliert für Menschen, die Fragen an Glauben und Kirche mitbringen"

  };


  sermonForm.addEventListener("submit", function (event) {

    event.preventDefault();

    const formData = new FormData(sermonForm);

    const bible = formData.get("bible")?.trim();
    const topic = formData.get("topic");
    const occasion = formData.get("occasion");
    const audience = formData.get("audience");
    const thought = formData.get("thought")?.trim();
    const length = formData.get("length");

    if (!bible || !topic || !topics[topic]) {
      return;
    }

    const selectedTopic = topics[topic];

    const sections = [];


    sections.push({
      label: "1. Einstieg",
      title: "Den Text öffnen",
      text:
        `Die Bibelstelle ${bible} lädt dazu ein, genauer hinzusehen. Was begegnet uns in diesem Text – und warum könnte diese Botschaft gerade heute wichtig sein?`
    });


    sections.push({
      label: "2. Zentrale Botschaft",
      title: selectedTopic.title,
      text: selectedTopic.idea
    });


    if (thought) {

      sections.push({
        label: "3. Persönlicher Gedanke",
        title: "Eine Verbindung zum eigenen Leben",
        text: thought
      });

    }


    sections.push({
      label: thought ? "4. Übertragung" : "3. Übertragung",
      title: "Was bedeutet das für uns?",
      text: selectedTopic.application
    });


    if (length === "mittel" || length === "lang") {

      sections.push({
        label: thought ? "5. Alltag" : "4. Alltag",
        title: "Glaube wird konkret",
        text:
          "Der biblische Text bleibt nicht in der Vergangenheit. Er stellt die Frage, wie wir heute handeln, entscheiden und miteinander umgehen."
      });

    }


    if (length === "lang") {

      sections.push({
        label: thought ? "6. Vertiefung" : "5. Vertiefung",
        title: "Eine Frage zum Weiterdenken",
        text:
          "Wo fällt es mir schwer, diese Botschaft anzunehmen? Und wo gibt es bereits Erfahrungen in meinem Leben, die mir zeigen, dass Veränderung möglich ist?"
      });

    }


    sections.push({
      label:
        length === "lang"
          ? (thought ? "7. Abschluss" : "6. Abschluss")
          : length === "mittel"
            ? (thought ? "6. Abschluss" : "5. Abschluss")
            : (thought ? "5. Abschluss" : "4. Abschluss"),

      title: "Ein Gedanke zum Mitnehmen",

      text:
        `${occasions[occasion]} Die Predigt kann deshalb mit einer Einladung enden: Nimm einen Gedanken aus ${bible} mit und frage dich, wo er in deinem eigenen Leben sichtbar werden kann.`
    });


    sermonResult.innerHTML = `
      <div class="generated-sermon">

        <div class="generated-sermon__header">

          <span class="section-kicker">
            ${escapeSermonHtml(bible)}
          </span>

          <h3>
            ${escapeSermonHtml(selectedTopic.title)}
          </h3>

          <div class="generated-sermon__meta">
            ${escapeSermonHtml(audiences[audience])}
          </div>

        </div>

        ${sections
          .map(
            section => `
              <section class="generated-sermon__section">

                <span>
                  ${escapeSermonHtml(section.label)}
                </span>

                <h4>
                  ${escapeSermonHtml(section.title)}
                </h4>

                <p>
                  ${escapeSermonHtml(section.text)}
                </p>

              </section>
            `
          )
          .join("")}

      </div>
    `;

    sermonActions.hidden = false;

  });


  copySermonButton?.addEventListener("click", async function () {

    const text = sermonResult.innerText;

    try {

      await navigator.clipboard.writeText(text);

      copySermonButton.textContent = "Kopiert ✓";

      setTimeout(() => {
        copySermonButton.textContent = "Kopieren";
      }, 1800);

    } catch {

      copySermonButton.textContent = "Kopieren nicht möglich";

    }

  });


  newSermonButton?.addEventListener("click", function () {

    sermonForm.reset();

    sermonResult.innerHTML = `
      <div class="generator-empty">

        <span>
          ✎
        </span>

        <h3>
          Dein Predigtentwurf erscheint hier
        </h3>

        <p>
          Fülle links die Angaben aus
          und klicke anschließend
          auf „Predigtentwurf erstellen“.
        </p>

      </div>
    `;

    sermonActions.hidden = true;

  });

}


function escapeSermonHtml(value) {

  const div = document.createElement("div");

  div.textContent = value;

  return div.innerHTML;

}