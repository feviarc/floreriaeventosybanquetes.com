$(document).ready(function() {
   // Función para cargar imágenes perezosamente al hacer scroll
   function lazyLoadImages() {
       $('img[loading="lazy"]').each(function() {
           var $img = $(this);
           if ($img.offset().top < $(window).scrollTop() + $(window).height()) {
               $img.attr('src', $img.data('src')).removeAttr('loading');
               console.log('remove loading');
           }
       });
   }

   // Cargar imágenes perezosamente al cargar la página
   lazyLoadImages();

   // Evento de scroll para cargar imágenes perezosamente
   $(window).on('scroll', lazyLoadImages);
});
