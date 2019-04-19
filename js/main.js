$(document).ready(function() {
  console.log("proba");

  $(".dug").click(provera);
  $(".jes").click(provera1);
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
function provera1(e) {
  e.preventDefault();
  console.log("jedan");

  let id = $(this).data("id");
  console.log(id);
  $.ajax({
    url: "info.php",
    method: "POST",
    dataType: "json",
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
