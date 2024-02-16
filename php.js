//Parte del php
addEventListener("DOMContentLoaded",(e)=>{
    const loginForm=document.getElementById("loginForm")
    const registerForm=document.getElementById("registerForm")
    const informationRegister=document.getElementById("informationRegister")
    let nameRegister=document.getElementById("nameRegister");
    let passwordRegister=document.getElementById("passwordRegister");
    let passwordRegister2=document.getElementById("passwordRegister2");
    let regex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*\\d)[a-zA-Z\\d]{8,}$");

    document.getElementById("btnn").addEventListener("click", (e)=>{
        abrirRegister()
    })
    abrirRegister=()=>{
        document.getElementById("loginForm").style.display="none";
        document.getElementById("registerForm").style.display="block";
    }

})