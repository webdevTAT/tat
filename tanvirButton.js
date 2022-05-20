let button1 = document.getElementsByClassName('logo')[0];
let loginForm = document.getElementsByClassName('loginSection')[0];
button1.addEventListener('click',()=>{
    loginForm.classList.toggle('Enable');
});