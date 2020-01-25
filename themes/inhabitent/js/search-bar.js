(function() {
  let iconOpen = document.getElementById('icon-search123');
  console.log(iconOpen);

  iconOpen.onclick = function(event) {
    event.preventDefault();

    let label = document.getElementById('header-search-id123');

    let isHiding = document.querySelector('.header-search123') !== null;

    if (isHiding) {
      // change class for show
      label.classList.remove('header-search123');
      label.classList.add('header-search999');
    } else {
      // change class for hide
      label.classList.add('header-search123');
      label.classList.remove('header-search999');
    }
  };
})();
