
(() => {
    $(document).ready(function() {
      $(".first-button").on("click", function() {
        console.log("clicked");
        $(".animated-icon").toggleClass("open");
      });
    });
  })();
  