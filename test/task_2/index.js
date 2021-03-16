$(document).ready(function () {
  function submitForm() {
    let data = JSON.stringify($("#form").serializeArray()).slice(1, -1);
    postDataOnPage(data);
    return data;
  }

  function postDataOnPage(data) {
    let element = document.createElement("p");
    element.textContent = data;
    $(".container").append(element);
  }

  $("#form").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      type: "GET",
      url: "./process.php",
      data: submitForm(),
      success: function (data) {
        alert(data);
      },
    });
    $(this).find("input[type=text]").val("");
    return false;
  });
});
