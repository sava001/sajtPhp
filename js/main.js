$(document).ready(function() {
  console.log("proba");

  $(".dug").click(provera);
});

function provera(e) {
  e.preventDefault();
  console.log("radi haha");
  let idProizvoda = $(this).data("id");
  console.log(idProizvoda);
}
