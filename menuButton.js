let button2 = document.getElementsByClassName('menu')[0];
let options = document.getElementsByClassName('links')[0];
button2.addEventListener('click',()=>{
    options.classList.toggle('show')
})
