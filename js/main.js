const formatter =
  new Intl.DateTimeFormat(
    "de-DE",
    {
      weekday: "long",
      day: "2-digit",
      month: "long",
      year: "numeric"
    }
  );

const today = new Date();

const currentDate =
  document.getElementById("currentDate");

if (currentDate) {
  currentDate.textContent =
    formatter.format(today);
}

const readingDate =
  document.getElementById("readingDate");

if (readingDate) {
  readingDate.textContent =
    formatter.format(today);
}