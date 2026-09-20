const themeButtons =
  document.querySelectorAll(".theme-button");

const themeToggle =
  document.getElementById("themeToggle");

function applyTheme(theme) {

  document.body.classList.toggle(
    "dark",
    theme === "dark"
  );

  themeButtons.forEach((button) => {

    button.classList.toggle(
      "active",
      button.dataset.theme === theme
    );

  });

  if (themeToggle) {
    themeToggle.textContent =
      theme === "dark" ? "☾" : "☀";
  }

  localStorage.setItem(
    "glaube-ich-theme",
    theme
  );
}

const savedTheme =
  localStorage.getItem("glaube-ich-theme");

applyTheme(savedTheme || "light");

themeButtons.forEach((button) => {

  button.addEventListener("click", () => {

    applyTheme(
      button.dataset.theme
    );

  });

});

themeToggle?.addEventListener("click", () => {

  const nextTheme =
    document.body.classList.contains("dark")
      ? "light"
      : "dark";

  applyTheme(nextTheme);

});