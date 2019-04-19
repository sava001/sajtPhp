let one = document.getElementById("name").addEventListener("blur", function() {
  if (document.getElementById("name").value == 0) {
    document.getElementById("name").value = "*obavezno popuniti";
  }
});

let two = document.getElementById("email").addEventListener("blur", function() {
  if (document.getElementById("email").value == 0) {
    document.getElementById("email").value = "*obavezno popuniti";
  }
});

let thre = document
  .getElementById("subject")
  .addEventListener("blur", function() {
    if (document.getElementById("subject").value == 0) {
      document.getElementById("subject").value = "*obavezno popuniti";
    }
  });

let four = document.getElementById("msg").addEventListener("blur", function() {
  if (document.getElementById("msg").value == 0) {
    document.getElementById("msg").value = "*obavezno popuniti";
  }
});

function provera() {
  let name = document.getElementById("name").value;
  let mail = document.getElementById("email").value;
  let subje = document.getElementById("subject").value;

  let name1 = /^[A-ZČĆŽŠĐ][a-zčćžšđ]{2,9}(\s[A-ZČĆŽŠĐ][a-zčćžšđ]{2,9})+$/;
  let mail1 = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  let subje1 = /[\w\d]+$/;
  nizSgreska = [];
  nizOk = [];

  if (!name1.test(name)) {
    nizSgreska.push("ime i prezime nije u ispravnom formatu");
  } else {
    nizOk.push("ime i prezime" + name);
  }

  if (!mail1.test(mail)) {
    nizSgreska.push("mail nije u ispravnom formatu");
  } else {
    nizOk.push("mail" + mail);
  }

  if (!subje1.test(subje)) {
    nizSgreska.push("naslov nije u ispravnom formatu");
  } else {
    nizOk.push("telefon" + subje);
  }

  let rezultat = "<div>";

  if (nizSgreska.length != 0) {
    for (let i = 0; i < nizSgreska.length; i++) {
      rezultat += "<p style='color:#ff0000;'>" + nizSgreska[i] + "<p/>";
    }
  } else {
    for (let i = 0; i < nizOk; i++) {
      rezultat += "<p>" + nizOk[i] + "<p/>";
    }
  }

  rezultat += "</div>";

  document.getElementById("zagresku").style.display = "block";
  document.getElementById("zagresku").innerHTML = rezultat;
}
let drz = document.getElementById("zagresku");
function ponisti() {
  document.getElementById("name").value = "";
  document.getElementById("email").value = "";
  document.getElementById("subject").value = "";
  document.getElementById("msg").value = "";
  drz.style.display = "none";
}
