// Gestion des page
const nav_sign_in = document.querySelector('.nav_sign_in');
const nav_sign_up = document.querySelector('.nav_sign_up');
const text_index = document.getElementById('text_index');
const sign = document.getElementById('sign');
sign.style.display = "none";
nav_sign_in.addEventListener('click', (e) => {
    text_index.style.display = "none";
    sign.style.display = "block";
    nav_sign_in.style.display = "none";
    nav_sign_up.style.display = "none";
    document.querySelector('#img_index').style.width = "70%";
});
nav_sign_up.addEventListener('click', (e) => {
    text_index.style.display = "none";
    sign.style.display = "block";
    nav_sign_in.style.display = "none";
    nav_sign_up.style.display = "none";
    document.querySelector('#img_index').style.width = "70%";
});


// Sign in && Sign up
const btn_sign_in = document.getElementById('btn_sign_up');
const btn_sign_up = document.getElementById('btn_sign_in');
const sign_in = document.getElementById('sign_in');
const sign_up = document.getElementById('sign_up');
sign_up.style.display = "none";
btn_sign_in.addEventListener('click', () => {
    sign_up.style.display = "block";
    sign_in.style.display = "none";
    btn_sign_up.classList.remove('active');
    btn_sign_in.classList.add('active');
});
btn_sign_up.addEventListener('click', () => {
    sign_in.style.display = "block";
    sign_up.style.display = "none";
    btn_sign_in.classList.remove('active');
    btn_sign_up.classList.add('active');
});

const username_sign_up = document.getElementById('username_sign_up');
// const error_username = document.querySelector('error_username');
const email_sign_up = document.getElementById('email_sign_up');
// const error_email = document.getElementById('error_email');
const password_sign_up = document.getElementById('password_sign_up');
// const conf_password_sign_up = document.getElementById('conf_password_sign_up');

function validation_username_sign_up() {
    const pattern_username = /[a-zA-Z]/;
    if(pattern_username.test('username') && username_sign_up.value.length >= 2) {
        username_sign_up.style.color = "green";
    }else{
        username_sign_up.style.color = "red";
    }
}
function validation_email_sign_up() {
    const pattern_email = /[a-z0-9]+@[a-z]+\.[a-z]{2,3}/;
    if(pattern_email.test(email_sign_up.value)){
        email_sign_up.style.color = "green";
    }else{
        email_sign_up.style.color = "red";
    }
}
function validation_password_sign_up() {
    if(password_sign_up.value.length >= 5){
        password_sign_up.style.color = "green";
    }else{
        password_sign_up.style.color = "red";
    }
}

        // error_username.innerText = "The username should contain only three characters and be alphanumeric only.";
        // error_email.innerText = "The email is invalid."


// document.getElementById('form_sign_up').addEventListener("submit" , function(e){
//         if(password.value == conf_password.value){
//             e.preventDefault();
//             console.log('ok')
//         }else{
//             e.preventDefault();
//             console.log('no')
//         }
// })



// Le nom d'utilisateur doit comporter au moins trois caractères et être uniquement alphanumérique
// The username should contain only numbers and letters

// Le mot de passe doit comporter au moins six caractères

// - Nom : obligatoire ; au moins deux caractères
// - Téléphone : facultatif ; ne doit autoriser que +-() 1234567890
// - E-mail : obligatoire ; doit être validé
// - Adresse : facultative ; 255 caractères maximum