(function ($) {
  $('.icon-search').click(function (event) {

    $('.header-search123').toggle(700)

    $(".search-field").focus();

  });

  $(".search-field").blur(function (event) {

    if ($(".search-field").val() === '') {

      $(".header-search123").hide()
    }

  });

  $(".submit-button").click(function () {
    alert("Your message was sent");

  });




  // iconOpen.onclick = function (event) {
  //   event.preventDefault();

  //   const label = document.getElementById('header-search-id123');

  //   const isHiding = document.querySelector('.header-search123') !== null;

  //   if (isHiding) {
  //     // change class for show
  //     label.classList.remove('header-search123');
  //     label.classList.add('header-search999');
  //   } else {
  //     // change class for hide
  //     label.classList.add('header-search123');
  //     label.classList.remove('header-search999');
  //   }

  // };

})(jQuery);
