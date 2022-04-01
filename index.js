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
btn_sign_in.addEventListener('click', (e) => {
    sign_up.style.display = "block";
    sign_in.style.display = "none";
    btn_sign_up.classList.remove('active');
    btn_sign_in.classList.add('active');
});
btn_sign_up.addEventListener('click', (e) => {
    sign_in.style.display = "block";
    sign_up.style.display = "none";
    btn_sign_in.classList.remove('active');
    btn_sign_up.classList.add('active');
});