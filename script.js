function login(){

let email = document.getElementById("email").value;
let password = document.getElementById("password").value;

if(email == "admin@mamifs.com" && password == "1234"){

alert("Login Successful");

window.location = "dashboard.html";

}

else{

alert("Invalid login");

}

}
