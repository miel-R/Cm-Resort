var username = "admin";
var password = "password";

function openPopup() {
  document.getElementById("popup").style.display = "block";
}

function closePopup() {
  document.getElementById("popup").style.display = "none";
}

function login() {
  var enteredUsername = document.getElementById("username").value;
  var enteredPassword = document.getElementById("password").value;
  if (enteredUsername === username && enteredPassword === password) {
    document.getElementById("popup").style.display = "none";
    document.getElementById("control-panel").style.display = "block";
    document.getElementById("list-data").style.display = "none";
    document.getElementById("login-button").style.display = "none";

  } else {
    alert("Invalid username or password.");
  }
}

function logout() {
  document.getElementById("control-panel").style.display = "none";
  document.getElementById("popup").style.display = "block";
  document.getElementById("login-btn").style.display = "block";
  document.getElementById("username").value = "";
  document.getElementById("password").value = "";
}

function Continue() {
  document.getElementById("list-data").style.display = "block";
  document.getElementById("control-panel").style.display = "none";

}
