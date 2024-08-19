$(document).ready(function () {
  $("div.features-post").hover(
    function () {
      $(this)
        .find("p, .scroll-to-section")
        .stop(true, true)
        .css({
          opacity: 1,
          transform: "translateY(0)",
          display: "block",
        })
        .fadeIn("slow");
    },
    function () {
      $(this)
        .find("p, .scroll-to-section")
        .stop(true, true)
        .fadeOut("slow", function () {
          $(this).css({
            opacity: 0,
            transform: "translateY(20px)",
            display: "none",
          });
        });
    }
  );
});
