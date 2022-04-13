// validation sign in
const email_sign_in = document.getElementById('email_sign_in');
const error_email = document.getElementById('error_email');
const password_sign_in = document.getElementById('password_sign_in');
const error_password = document.getElementById('error_password');
const form_sign_in = document.getElementById('form_sign_in');
const pattern_email = /[a-z0-9]+@[a-z]+\.[a-z]{2,3}/;

form_sign_in.addEventListener('submit', (e)=> {
    if(email_sign_in.value == ""){
        e.preventDefault();
        error_email.innerText = "Pls, fill in the email field.";
    }
    else if(pattern_email.test(email_sign_in.value)){
        error_email.innerText = "";
    }else if(!pattern_email.test(email_sign_in.value)){
        e.preventDefault();
        error_email.innerText = "The email is invalid.";
    } 

    if(password_sign_in.value == ""){
        e.preventDefault();
        error_password.innerText = "Pls, fill in the password field.";
    }
    else if(password_sign_in.value.length < 6){
        e.preventDefault();
        error_password.innerText = "Password must be at least six characters.";
    }else if(password_sign_in.value.length >= 6){
        error_password.innerText = "";
    }

    if((pattern_email.test(email_sign_in.value))&&(password_sign_in.value.length >= 6)){
        form_sign_in.submit();
    }
});


// validation sign up
const username_sign_up = document.getElementById('username_sign_up');
const error_username = document.getElementById('error_username');
const email_sign_up = document.getElementById('email_sign_up');
const error_email_sign_up = document.getElementById('error_email_sign_up');
const password_sign_up = document.getElementById('password_sign_up');
const error_password_sign_up = document.getElementById('error_password_sign_up');
const conf_password_sign_up = document.getElementById('conf_password_sign_up');
const error_conf_password_sign_up = document.getElementById('error_conf_password_sign_up');
const form_sign_up = document.getElementById('form_sign_up');
const pattern_username = /[a-zA-Z]/;

form_sign_up.addEventListener('submit', (e)=> {
    if(username_sign_up.value == ""){
        e.preventDefault();
        error_username.innerText = "Pls, fill in the username field.";
    }
    else if((pattern_username.test(username_sign_up.value)) && (username_sign_up.value.length >= 3)){
        error_username.innerText = "";
    }else if(!(pattern_email.test(username_sign_up.value)) || username_sign_up.value.length < 3){
        e.preventDefault();
        error_username.innerText = "Username must be at least three characters and be alphanumeric only.";
    }

    if(email_sign_up.value == ""){
        e.preventDefault();
        error_email_sign_up.innerText = "Pls, fill in the email field.";
    }
    else if(pattern_email.test(email_sign_up.value)){
        error_email_sign_up.innerText = "";
    }else if(!pattern_email.test(email_sign_up.value)){
        e.preventDefault();
        error_email_sign_up.innerText = "The email is invalid.";
    }

    if(password_sign_up.value == ""){
        e.preventDefault();
        error_password_sign_up.innerText = "Pls, fill in the password field.";
    }
    else if(password_sign_up.value.length < 6){
        e.preventDefault();
        error_password_sign_up.innerText = "Password must be at least six characters.";
    }else if(password_sign_up.value.length >= 6){
        error_password_sign_up.innerText = "";
    }

    if(conf_password_sign_up.value == ""){
        e.preventDefault();
        error_conf_password_sign_up.innerText = "Pls, fill in the password field.";
    }
    else if(conf_password_sign_up.value != password_sign_up.value){
        e.preventDefault();
        error_conf_password_sign_up.innerText = "Pls, confirme your password";
    }else if(conf_password_sign_up.value == password_sign_up.value){
        error_conf_password_sign_up.innerText = "";
    }

    

    if(((pattern_username.test(username_sign_up.value)) && (username_sign_up.value.length >= 3))&&(pattern_email.test(email_sign_up.value))&&(password_sign_up.value.length >= 6)&&(conf_password_sign_up.value == password_sign_up.value)){
        form_sign_up.submit();
    }
});

conf_password_sign_up.addEventListener('keyup', (e)=> {
    if(conf_password_sign_up.value == password_sign_up.value){
        conf_password_sign_up.style.color = "green";
    }else{
        conf_password_sign_up.style.color = "red";
    }
});