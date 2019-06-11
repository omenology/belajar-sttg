// sidebar
  $(document).ready(function(){
    $('.collapsible').collapsible();
    $('.sidenav').sidenav();
    
    $('select').formSelect();
  });

let mata = document.querySelector('#eye')
let password = document.querySelector('input[type=password]')
mata.addEventListener('click', function(){
	mata.classList.toggle('eyeon');
    (password.type=='password') ? password.type='text' : password.type = 'password';
    password.toggleAttribute("type",password);
})