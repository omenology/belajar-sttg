let mata = document.querySelector('#eye')
let password = document.querySelector('input[type=password]')
mata.addEventListener('click', function(){
	mata.style="opacity = 1";
    (password.type=='password') ? password.type='text' : password.type = 'password';
    password.toggleAttribute("type",password);
})