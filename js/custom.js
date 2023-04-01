// OnLoad
jQuery(document).ready(function ($) {
  // Homepage hero slider
  $(".homepage-hero-main-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    fade: true,
    autoplay: true,
    swipeToSlide: true,
  });

  // Search Bar Header placeholder text
  headerSearchBar();
  function headerSearchBar() {
    var headerSearchBarField =
      document.getElementsByClassName("search-field")[0];

    if (headerSearchBarField) {
      if (document.querySelector("[placeholder='Search …']")) {
        document.querySelector("[placeholder='Search …']").placeholder =
          "Search for products";
      }
    }
  }
});
