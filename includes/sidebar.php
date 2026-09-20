<aside class="sidebar" id="sidebar">

  <div class="sidebar__brand">

    <a href="/index.php" class="brand">
      <span class="brand__title">glaube-ich.de</span>
      <span class="brand__subtitle">Glaube. Leben. Entdecken.</span>
    </a>

    <button
      class="sidebar__close"
      id="sidebarClose"
      aria-label="Navigation schließen"
    >
      ×
    </button>

  </div>

  <nav class="sidebar__nav">

    <a
      href="/index.php"
      class="nav-link <?= ($currentPage ?? '') === 'home' ? 'active' : '' ?>"
    >
      <span class="nav-icon">⌂</span>
      <span>Startseite</span>
    </a>

    <div class="nav-group">

      <p class="nav-group__title">
        Heute
      </p>

      <a
        href="/pages/heute/tagesimpuls.php"
        class="nav-link <?= ($currentPage ?? '') === 'tagesimpuls' ? 'active' : '' ?>"
      >
        <span class="nav-icon">☀</span>
        <span>Tagesimpuls</span>
      </a>

      <a
        href="/pages/heute/tageslesung.php"
        class="nav-link <?= ($currentPage ?? '') === 'tageslesung' ? 'active' : '' ?>"
      >
        <span class="nav-icon">▤</span>
        <span>Tageslesung</span>
      </a>

      <a
        href="/pages/heute/evangelium.php"
        class="nav-link <?= ($currentPage ?? '') === 'evangelium' ? 'active' : '' ?>"
      >
        <span class="nav-icon">◉</span>
        <span>Evangelium hören</span>
      </a>

      <a
        href="/pages/heute/podcast.php"
        class="nav-link <?= ($currentPage ?? '') === 'podcast' ? 'active' : '' ?>"
      >
        <span class="nav-icon">◍</span>
        <span>Podcast</span>
      </a>

    </div>

    <div class="nav-group">

      <p class="nav-group__title">
        Entdecken
      </p>

      <a
        href="/pages/entdecken/bibel.php"
        class="nav-link <?= ($currentPage ?? '') === 'bibel' ? 'active' : '' ?>"
      >
        <span class="nav-icon">▣</span>
        <span>Die Heilige Schrift</span>
      </a>

      <a
        href="/pages/entdecken/bibelstudium.php"
        class="nav-link <?= ($currentPage ?? '') === 'bibelstudium' ? 'active' : '' ?>"
      >
        <span class="nav-icon">▣</span>
        <span>Bibelstudium</span>
      </a>

      <a
        href="/pages/entdecken/jerusalem.php"
        class="nav-link <?= ($currentPage ?? '') === 'jerusalem' ? 'active' : '' ?>"
      >
        <span class="nav-icon">◎</span>
        <span>Jerusalem</span>
      </a>

      <a
        href="/pages/entdecken/pilgerreise.php"
        class="nav-link <?= ($currentPage ?? '') === 'pilgerreise' ? 'active' : '' ?>"
      >
        <span class="nav-icon">◇</span>
        <span>Pilgerreise</span>
      </a>

    </div>

    <div class="nav-group">

      <p class="nav-group__title">
        Glauben
      </p>

      <a
        href="/pages/glauben/grundgebete.php"
        class="nav-link <?= ($currentPage ?? '') === 'grundgebete' ? 'active' : '' ?>"
      >
        <span class="nav-icon">♡</span>
        <span>Grundgebete</span>
      </a>

      <a
        href="/pages/glauben/sakramente.php"
        class="nav-link <?= ($currentPage ?? '') === 'sakramente' ? 'active' : '' ?>"
      >
        <span class="nav-icon">✝</span>
        <span>Sakramente</span>
      </a>

      <a
        href="/pages/glauben/fragen.php"
        class="nav-link <?= ($currentPage ?? '') === 'fragen' ? 'active' : '' ?>"
      >
        <span class="nav-icon">?</span>
        <span>Fragen & Antworten</span>
      </a>

    </div>

    <div class="nav-group">

      <p class="nav-group__title">
        Werkzeuge
      </p>

      <a
        href="/pages/werkzeuge/gebet-generator.php"
        class="nav-link <?= ($currentPage ?? '') === 'gebet-generator' ? 'active' : '' ?>"
      >
        <span class="nav-icon">✦</span>
        <span>Gebet erstellen</span>
      </a>

      <a
        href="/pages/werkzeuge/predigt-generator.php"
        class="nav-link <?= ($currentPage ?? '') === 'predigt-generator' ? 'active' : '' ?>"
      >
        <span class="nav-icon">✎</span>
        <span>Predigt erstellen</span>
      </a>

    </div>

    <div class="nav-group">

      <p class="nav-group__title">
        Mehr
      </p>

      <a
        href="/pages/ueber-uns.php"
        class="nav-link <?= ($currentPage ?? '') === 'ueber-uns' ? 'active' : '' ?>"
      >
        <span class="nav-icon">i</span>
        <span>Über diese Seite</span>
      </a>

    </div>

  </nav>

  <div class="sidebar__quote">
    <p>
      „Denn wo zwei oder drei in meinem Namen versammelt sind,
      da bin ich mitten unter ihnen.“
    </p>

    <span>
      Matthäus 18,20
    </span>
  </div>

  <div class="sidebar__theme">

    <button
      class="theme-button active"
      data-theme="light"
    >
      ☀ Hell
    </button>

    <button
      class="theme-button"
      data-theme="dark"
    >
      ☾ Dunkel
    </button>

  </div>

</aside>

<div
  class="sidebar-overlay"
  id="sidebarOverlay"
></div>