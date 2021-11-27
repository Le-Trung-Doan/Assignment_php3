var form_signin = document.querySelector('.auth-form__signin-form');
var form_signup = document.querySelector('.auth-form__signup-form');

var btnSignin = document.querySelector('.header__navbar-item--signin');
var btnSignup = document.querySelector('.header__navbar-item--signup');

var btnClose = document.querySelector('.modal__overlay');
var model = document.querySelector('.modal');


btnSignin.onclick = function() {
    form_signin.style.display = 'block';
    model.style.visibility = 'visible';
}
btnClose.onclick = function() {
    form_signup.style.display = 'none';
    form_signin.style.display = 'none';
    model.style.visibility = 'hidden';
}

btnSignup.onclick = function() {
    form_signup.style.display = 'block';
    model.style.visibility = 'visible';
}
//
// var menu = document.querySelectorAll('.header-navbar__item')
// function active() {
//     menu.map(function (index) {
//         return  menu[index].classList.add('header-navbar__item--active');
//     })
// }
// return
//
// var path = window.location.href;
// console.log(path)
// if (path === "http://localhost:8000/"){
//     menu[0].classList.add('header-navbar__item--active');
// } if (path === "http://localhost:8000/product"){
//     menu[1].classList.add('header-navbar__item--active');
// }
