var reg = document.getElementById("register");
var log = document.getElementById("login");
var button = document.getElementById("btn");

function login(){
    reg.style.left = "-330px";
    log.style.left = "50px";
    button.style.left="110px";
}
function register(){
    reg.style.left = "50px";
    log.style.left = "-330px";
    button.style.left="0";
}
