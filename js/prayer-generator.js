const prayerForm = document.querySelector("#prayerGeneratorForm");
const prayerResult = document.querySelector("#prayerResult");
const prayerActions = document.querySelector("#prayerActions");
const copyPrayerButton = document.querySelector("#copyPrayer");
const newPrayerButton = document.querySelector("#newPrayer");

if (prayerForm && prayerResult) {

  const prayers = {

    dank: {
      title: "Ein Gebet der Dankbarkeit",
      opening: "Guter Gott, ich komme heute mit Dankbarkeit zu dir.",
      middle: "Hilf mir, die kleinen und großen Geschenke meines Lebens bewusst wahrzunehmen und nicht als selbstverständlich anzusehen.",
      ending: "Lass mich aus dieser Dankbarkeit leben und auch für andere zum Segen werden."
    },

    hoffnung: {
      title: "Ein Gebet der Hoffnung",
      opening: "Guter Gott, schenke mir Hoffnung für meinen Weg.",
      middle: "Wenn ich nicht weiß, wie es weitergeht, erinnere mich daran, dass auch nach dunklen Zeiten neues Licht entstehen kann.",
      ending: "Gib mir Mut für den nächsten Schritt und Vertrauen in deine Nähe."
    },

    sorge: {
      title: "Ein Gebet in Sorgen",
      opening: "Guter Gott, du kennst meine Sorgen und meine Unruhe.",
      middle: "Manches kann ich nicht lösen und manches kann ich nicht kontrollieren. Hilf mir, nicht alles allein tragen zu wollen.",
      ending: "Schenke mir Ruhe, Kraft und das Vertrauen, dass ich meinen Weg nicht allein gehen muss."
    },

    entscheidung: {
      title: "Ein Gebet um Orientierung",
      opening: "Guter Gott, ich stehe vor einer Entscheidung und suche nach dem richtigen Weg.",
      middle: "Schenke mir Klarheit für das, was wichtig ist, Geduld für das, was noch offen ist, und Mut für eine Entscheidung.",
      ending: "Begleite mich auf meinem Weg und hilf mir, auf das zu vertrauen, was meinem Leben dient."
    },

    familie: {
      title: "Ein Gebet für Familie und Freunde",
      opening: "Guter Gott, ich denke heute besonders an die Menschen, die mir nahestehen.",
      middle: "Beschütze sie, begleite sie und schenke uns Geduld, Verständnis und offene Herzen füreinander.",
      ending: "Lass unsere Beziehungen von Liebe, Ehrlichkeit und gegenseitigem Vertrauen getragen sein."
    },

    krankheit: {
      title: "Ein Gebet um Kraft",
      opening: "Guter Gott, in Krankheit und Schwäche suche ich deine Nähe.",
      middle: "Schenke Kraft für schwere Tage, Menschen, die begleiten, und Hoffnung, wenn die eigenen Kräfte kleiner werden.",
      ending: "Sei besonders dort nahe, wo Angst und Unsicherheit den Alltag bestimmen."
    },

    vergebung: {
      title: "Ein Gebet um Vergebung",
      opening: "Guter Gott, du kennst meine Fehler und das, was mich belastet.",
      middle: "Hilf mir, ehrlich hinzusehen, Verantwortung zu übernehmen und dort um Vergebung zu bitten, wo ich andere verletzt habe.",
      ending: "Schenke mir die Kraft, neu anzufangen und auch anderen mit Barmherzigkeit zu begegnen."
    },

    vertrauen: {
      title: "Ein Gebet um Vertrauen",
      opening: "Guter Gott, ich möchte dir vertrauen, auch wenn ich nicht alles verstehe.",
      middle: "Hilf mir, nicht nur auf meine Angst zu hören, sondern offen zu bleiben für Hoffnung, Begegnung und neue Möglichkeiten.",
      ending: "Begleite mich heute und schenke mir Vertrauen für den nächsten Schritt."
    }

  };


  const toneSentences = {

    ruhig:
      "Lass mich still werden und für einen Moment alles loslassen, was mich innerlich unruhig macht.",

    dankbar:
      "Öffne meine Augen für das Gute, das trotz aller Herausforderungen in meinem Leben vorhanden ist.",

    hoffnungsvoll:
      "Lass mich darauf vertrauen, dass neue Wege entstehen können, auch wenn ich sie heute noch nicht sehe.",

    direkt:
      "Du weißt, was gerade in mir vorgeht. Ich möchte nichts verstecken, sondern ehrlich vor dir sein."

  };


  prayerForm.addEventListener("submit", function (event) {

    event.preventDefault();

    const formData = new FormData(prayerForm);

    const topic = formData.get("topic");
    const situation = formData.get("situation")?.trim();
    const tone = formData.get("tone");
    const length = formData.get("length");

    if (!topic || !prayers[topic]) {
      return;
    }

    const prayer = prayers[topic];

    let paragraphs = [];

    paragraphs.push(prayer.opening);

    if (situation) {
      paragraphs.push(
        `Besonders bringe ich heute vor dich: ${situation}`
      );
    }

    paragraphs.push(toneSentences[tone]);

    if (length === "mittel" || length === "lang") {
      paragraphs.push(prayer.middle);
    }

    if (length === "lang") {
      paragraphs.push(
        "Schenke mir einen offenen Blick für die Menschen um mich herum und hilf mir, nicht nur meine eigenen Sorgen und Wünsche zu sehen."
      );

      paragraphs.push(
        "Zeige mir, wo ich heute selbst etwas verändern kann, und gib mir Gelassenheit für das, was nicht in meiner Hand liegt."
      );
    }

    paragraphs.push(prayer.ending);

    paragraphs.push("Amen.");

    prayerResult.innerHTML = `
      <div class="generated-prayer">

        <h3>
          ${prayer.title}
        </h3>

        ${paragraphs
          .map(
            paragraph => `<p>${escapeHtml(paragraph)}</p>`
          )
          .join("")}

      </div>
    `;

    prayerActions.hidden = false;

  });


  copyPrayerButton?.addEventListener("click", async function () {

    const text = prayerResult.innerText;

    try {

      await navigator.clipboard.writeText(text);

      copyPrayerButton.textContent = "Kopiert ✓";

      setTimeout(() => {
        copyPrayerButton.textContent = "Kopieren";
      }, 1800);

    } catch {

      copyPrayerButton.textContent = "Kopieren nicht möglich";

    }

  });


  newPrayerButton?.addEventListener("click", function () {

    prayerForm.reset();

    prayerResult.innerHTML = `
      <div class="generator-empty">

        <span>
          ✦
        </span>

        <h3>
          Dein Gebet erscheint hier
        </h3>

        <p>
          Wähle links ein Thema aus
          und klicke anschließend
          auf „Gebet erstellen“.
        </p>

      </div>
    `;

    prayerActions.hidden = true;

    window.scrollTo({
      top: prayerForm.offsetTop - 120,
      behavior: "smooth"
    });

  });

}


function escapeHtml(value) {

  const div = document.createElement("div");

  div.textContent = value;

  return div.innerHTML;

}