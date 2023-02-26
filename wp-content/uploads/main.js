window.addEventListener('load', function () {
  const openSearch = document.querySelector('#topnav .nav-item.search');
  const closeSearch = document.querySelector('#siteSearch button.close');
  const opnenSubscribe = document.querySelector('button.newsletter-signup-cta');
  const closeSubscribe = document.querySelector('button.close-btn.toggle-newsletter-modal');
  const formSubscribe = document.querySelector('section.subscribe-form-overlay');
  const siteSearch = document.getElementById('siteSearch');

  function scrollBody(on) {
    const body = document.querySelector('body');
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
});
