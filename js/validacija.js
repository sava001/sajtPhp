console.log("proba");
document.getElementById("tbIme").addEventListener("keyup", prover);
document.getElementById("pass").addEventListener("keyup", prover1);
// document.getElementById("btnUnesi").addEventListener("click", provera);

// function submitForm() {
//   let userName = document.getElementById("tbIme").value;
//   let password = document.getElementById("pass").value;
//   let valUserName = /^[[a-zA-Z0-9]] {3,10} $/;
//   let valPassword = /^[\w\d] {5} $/;
//   if (valUserName.test(userName)) {
//     console.log("ok je");
//   } else {
//     console.log("nije ok ");
//   }
//   // let nizSgreska = [];
// let nizOk = [];
//   console.log(userName);
//   console.log("jedan");
// }
function provera() {
  console.log("nesto");

  nizSgreska = [];
  nizOk = [];
  let userName = document.getElementById("tbIme").value;
  let password = document.getElementById("pass").value;
  let valUserName = /^[A-ZČĆŽŠĐ][a-zčćžšđ]{2,9}(\s[A-ZČĆŽŠĐ][a-zčćžšđ]{2,9})+$/;
  let valPassword = /^[A-ZČĆŽŠĐ][a-zčćžšđ]{2,9}(\s[A-ZČĆŽŠĐ][a-zčćžšđ]{2,9})+$/;
  if (valUserName.test(userName) && valPassword.test(password)) {
    console.log("ok je");
    nizOk.push("ok je sve");
    return true;
  } else {
    console.log("nije ok ");
    nizSgreska.push("usern name ili sifra je u pogresnom formatu");
    return false;
  }
}
function prover() {
  let userName = document.getElementById("tbIme").value;

  let valUserName = /^[A-ZČĆŽŠĐ][a-zčćžšđ]{2,9}(\s[A-ZČĆŽŠĐ][a-zčćžšđ]{2,9})+$/;

  if (valUserName.test(userName)) {
    document.getElementById("tbIme").style.color = "black";
  } else {
    document.getElementById("tbIme").style.color = "red";
  }
}
function prover1() {
  let password = document.getElementById("pass").value;

  let valPassword = /^[A-ZČĆŽŠĐ][a-zčćžšđ]{2,9}(\s[A-ZČĆŽŠĐ][a-zčćžšđ]{2,9})+$/;
  if (valPassword.test(password)) {
    document.getElementById("pass").style.color = "black";
  } else {
    document.getElementById("pass").style.color = "red";
  }
  console.log("sakikiki");
}
