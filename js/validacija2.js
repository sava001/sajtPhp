console.log("jedinica");
document.getElementById("ime").addEventListener("keyup", proveri);
document.getElementById("pasword").addEventListener("keyup", proveri2);

function proveri() {
  console.log("radisa");
  console.log("dkksdl");
  let userName = document.getElementById("ime").value;

  let valUserName = /^[\w#@!]{4,20}$/;

  if (valUserName.test(userName)) {
    document.getElementById("ime").style.color = "black";
  } else {
    document.getElementById("ime").style.color = "red";
  }
}

function proveri2() {
  let password = document.getElementById("pasword").value;

  let valPassword = /^[\w#@!]{4,20}$/;
  if (valPassword.test(password)) {
    document.getElementById("pasword").style.color = "black";
  } else {
    document.getElementById("pasword").style.color = "red";
  }
  console.log("sakikiki");
}
function provera3() {
  console.log("nesto");

  nizSgreska = [];
  nizOk = [];
  let userName = document.getElementById("ime").value;
  let password = document.getElementById("pasword").value;
  let valUserName = /^[\w#@!]{4,20}$/;
  let valPassword = /^[\w#@!]{4,20}$/;
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
