// OnLoad
jQuery(document).ready(function ($) {
  // Review slider
  $(".review-slider").slick({
    infinite: true,
    // speed: 700,
    // autoplay: true,
    // autoplaySpeed: 2000,
    dots: true,
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
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
  $(".action-button").click(function () {
    setTimeout(function () {
      if ($(".form span").hasClass("wpcf7-not-valid-tip")) {
        $(".domain-checker").show();
      } else {
        $(".domain-checker").hide();
      }
    }, 350);
  });
});
