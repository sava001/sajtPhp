$(document).ready(function() {
  console.log("proba");

  $(".dug").click(provera);
});

function provera(e) {
  e.preventDefault();
  console.log("radi haha");
  let id = $(this).data("id");

  $.ajax({
    url: "php/del.php",
    method: "POST",
    data: {
      id: id
    },
    success: function(kategorije) {
      console.log(kategorije);
    },
    error: function(xhr, greska, status) {
      alert(greska);
    }
  });
}
