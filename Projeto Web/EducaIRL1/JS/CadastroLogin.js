var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");

var body = document.querySelector("body");


btnSignin.addEventListener("click", function () {
   body.className = "sign-in-js"; 
});

btnSignup.addEventListener("click", function () {
    body.className = "sign-up-js";
})

//Função para verificação de preenchimento de campos do formulário

function verificar(){
    var nome = document.getElementById('Nome').value;
    var email = document.getElementById('Email').value;
    var senha = document.getElementById('Senha').value;
    
     if(!nome || !email || !senha){
        alert("Campos não preenchidos, favor preencê-los");
    } else{
        window.location.href="Menu.php";    
    }
}

function verificar2(){
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    
     if(!email || !senha){
        alert("Campos não preenchidos, favor preencê-los");
    } else{
        window.location.href="Menu.php";    
    }
}