document.addEventListener('DOMContentLoaded', function() {
  const preloader = document.querySelector('.preloader');
  if (!preloader) return;

  // Fontu yükle
  const font = new FontFace(
    'Quicksand',
    'url(/fonts/quicksand/Quicksand-VariableFont_wght.ttf)'
  );

  font.load().then(function() {
    document.fonts.add(font);
    preloader.classList.add('loaded');
    document.querySelector('html').removeAttribute('style');
  }).catch(function(error) {
    preloader.classList.add('loaded');
    document.querySelector('html').removeAttribute('style');
  });
});
