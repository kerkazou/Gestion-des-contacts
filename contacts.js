// profile
function profile() {
    const profile = document.getElementById('profile');
    const profile_icone = document.getElementById('profile_icone');
    if(profile.style.display){
        profile.style.removeProperty("display");
        profile_icone.classList.remove('bi-caret-down-fill');
        profile_icone.classList.add('bi-caret-up-fill');            
    }else{
        profile.style.display = "none";
        profile_icone.classList.remove('bi-caret-up-fill');
        profile_icone.classList.add('bi-caret-down-fill');  
    }
}

// Navbar User
const nav_user = Array.from(document.querySelectorAll('.nav_user'));
nav_user.map( nav_user => {
    nav_user.addEventListener('click', (e) => {
        nav_user.classList.toggle('active');
    });
});
