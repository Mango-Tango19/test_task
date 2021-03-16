$(document).ready(function () {
  //2.1
  function toggleHeader() {
    $(".btn-warning").on("click", function () {
      $(".header").toggleClass("hide");
    });
  }
  toggleHeader();

  //2.2
  function swipeBlocks() {
    $(".btn-success").on("click", function () {
      if ($(".left").hasClass("first-by-order")) {
        $(".left").removeClass("first-by-order");
        $(".left").addClass("second-by-order");

        $(".center").removeClass("second-by-order");
        $(".center").addClass("first-by-order");
      } else {
        $(".left").removeClass("second-by-order");
        $(".left").addClass("first-by-order");

        $(".center").removeClass("first-by-order");
        $(".center").addClass("second-by-order");
      }
    });
  }
  swipeBlocks();

  //2.3
  $(window).on("load", function () {
    $("#myModal").modal("show");
  });

  $(".btn-secondary").click(function () {
    $("#myModal").modal("hide");
  });
});
