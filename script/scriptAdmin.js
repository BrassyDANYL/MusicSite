$(document).scroll(function () {
   var $nav = $(".header");
   $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
});

$('.burger').on('click', function () {

   $('.header-menu').toggleClass('open-burger');

});