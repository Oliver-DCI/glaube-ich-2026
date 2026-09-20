<header class="header">

  <div class="header__left">

    <button
      class="menu-button"
      id="menuButton"
      aria-label="Navigation öffnen"
    >
      ☰
    </button>

  </div>


  <form
  class="search"
  action="/pages/suche.php"
  method="get"
>

  <span class="search__icon">
    ⌕
  </span>

  <input
    type="search"
    name="q"
    placeholder="Suche ..."
    aria-label="Website durchsuchen"
    value="<?= isset($_GET['q']) ? escape($_GET['q']) : '' ?>"
  >

</form>


  <nav class="header__nav">

    <a href="/pages/kontakt.php">
      Kontakt
    </a>

    <a href="/pages/ueber-uns.php">
      Über uns
    </a>

    <a href="/pages/hilfe.php">
      Hilfe
    </a>

    <button
      class="header-theme-toggle"
      id="themeToggle"
      aria-label="Farbschema wechseln"
    >
      ☀
    </button>

  </nav>

</header>