window.addEventListener('load', function () {
  const openSearch = document.querySelector('#topnav .nav-item.search');
  const closeSearch = document.querySelector('#siteSearch button.close');
  const opnenSubscribe = document.querySelector('button.newsletter-signup-cta');
  const closeSubscribe = document.querySelector('button.close-btn.toggle-newsletter-modal');
  const formSubscribe = document.querySelector('section.subscribe-form-overlay');
  const siteSearch = document.getElementById('siteSearch');
  const body = document.querySelector('body');

  function scrollBody(on) {
    const style = on ? 'overflow-y: scroll;' : 'overflow-y: hidden;';
    body.style = style;
  }

  openSearch.addEventListener('click', function () {
    scrollBody(false);
    siteSearch.style = `
      margin-top: 0;
      visibility: visible;
      opacity: 1;
      pointer-events: all;
      overflow-y: hidden;
    `;
  });

  closeSearch.addEventListener('click', function () {
    scrollBody(true);
    siteSearch.style = `
      margin-top: 0;
      visibility: hidden;
      opacity: 0;
    `;
  });

  opnenSubscribe.addEventListener('click', function () {
    scrollBody(false);
    formSubscribe.style = `
      margin-top: 0;
      transform: translate(0);
    `;
  });

  closeSubscribe.addEventListener('click', function () {
    scrollBody(true);
    formSubscribe.style = `
      margin-top: 0;
      transform: 100%;
    `;
  });


  // Navbar
  const navbarList = document.querySelectorAll('ul.primary-nav-links li.nav-item.mega-dropdown');

  function resetNavbar() {
    navbarList.forEach(function (navbar) {
      const dropdown = navbar.querySelector('.dropdown-menu');
      dropdown.classList.remove('show');
    });
  }

  body.addEventListener('click', function (e) {
    let navitem = null;

    navbarList.forEach(function (navbar) {
      if (navbar.contains(e.target)) {
        navitem = navbar;
      }
    });

    if (navitem) {
      resetNavbar();
      const dropdown = navitem.querySelector('.dropdown-menu');
      dropdown.classList.toggle('show');
    } else {
      resetNavbar();
    }
  });
});
