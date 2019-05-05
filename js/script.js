let cetrekan = document.querySelector('#eye')
let password = document.querySelector('input[type=password]')
cetrekan.addEventListener('click', function(){
    cetrekan.classList.toggle('password');
    (password.type=='password') ? password.type='text' : 
    password.type = 'password';
    password.toggleAttribute("type",password);
})