<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>
<body>
    <!---------------------- NavBar ---------------------->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark px-5">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="index.php"><img src="SVG/logo1.png" alt="Logo" style="width: 40%;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                <form class="d-flex justify-content-center gap-3">
                    <a href="#signin" class="btn btn-outline-secondary me-3 nav_sign_in" type="button">Sign In</a>
                    <a href="#signup" class="btn btn-outline-secondary me-3 nav_sign_up" type="button">Sign Up</a>
                </form>
            </div>
        </div>
    </nav>

    <!---------------------- Container ---------------------->
    <div class="d-md-flex lign-items-center overflow-hidden">
        <div class="col-7" style="margin-top: 9%;">
            <img src="svg/undraw_profile_re_4a55.svg" id="img_index" style="width: 80%; margin-left: 10%;">
        </div>
                <!---------------------- Text ---------------------->
        <div class="col-5 align-items-center" id="text_index" style="margin-top: 15%; margin-left: 2%;">
            <h1>Hello!</h1>
            <h4><a href="" class="text_sign_up">Sign up</a> to start creating your Contacts list.</h4>
            <h4>Already have an acount? <a href="" class="text_sign_in">Login here</a>.</h4>
        </div>
                <!---------------------- Sign ---------------------->
        <div class="mt-5 col-4" id="sign">
            <div class="card">
                <div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item col-6"><a href="#signin" type="button" class="nav-link tm-nav-link-border-right w-100 text-center active" id="btn_sign_in">Sign In</a></li>
                        <li class="nav-item col-6"><a href="#signup" type="button" class="nav-link tm-no-border-right w-100 text-center" id="btn_sign_up">Sign Up</a></li>
                    </ul>
                </div>
                        <!---------------------- Sign In ---------------------->
                <div class="card-body" id="sign_in">
                    <h3 class="text-center mt-4">SIGN IN</h3>
                    <p class="text-center text-secondary">Enter your credentials to access your account</p>
                    <p id="error_signin"></p>
                    <form class="d-flex flex-column" id="form_sign_in" method="POST" action="sign_in.php">
                        <label class="d-block mt-2 text-secondary">Email</label>
                        <input type="text" name="email" id="email_sign_in" placeholder="Enter your email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email'] ?>" class="w-100 ps-3 rounded-2 border border-gray-600 border-2 col-form-label">
                        <p class="text-danger me-2" id="error_email"></p>
                        <label class="d-block text-secondary">Password</label>
                        <input type="password" name="password" id="password_sign_in" placeholder="Enter your password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>" class="w-100 ps-3 rounded-2 border border-gray-600 border-2 d-block col-form-label">
                        <p class="text-danger me-2" id="error_password"></p>
                        <div>
                            <input type="checkbox" class="mt-3 mx-1" name="checked" id="checked">
                            <label for="checked" class="text-secondary">keep me signed in on this device</label>
                            <a class="btn btn-link float-end" style="color: #00C1FE;">Forget password?</a>
                        </div>
                        <button type="submit" name="sign_in" class="btn btn-outline-secondary w-50 my-4 mx-auto" onclick="validation_sign_in()">SIN IN</button>
                    </form>
                </div>
                        <!---------------------- Sign Up ---------------------->
                <div class="card-body" id="sign_up">
                    <h3 class="text-center mt-2">SIGN UP</h3>
                    <p class="text-center text-secondary">Please fill out the form below to create your account!</p>
                    <p id="error_signup"></p>
                    <form class="d-flex flex-column" id="form_sign_up" method="POST" action="sign_up.php">
                        <label class="d-block mt-3 text-secondary">Username</label>
                        <input type="text" name="username" id="username_sign_up" placeholder="Enter your username" class="w-100 ps-3 rounded-2 border border-gray-600 border-2 col-form-label">
                        <p class="text-danger me-2" id="error_username"></p>
                        <label class="d-block text-secondary">Email</label>
                        <input type="text" name="email" id="email_sign_up" placeholder="Enter your email" class="email w-100 ps-3 rounded-2 border border-gray-600 border-2 col-form-label">
                        <p class="text-danger me-2" id="error_email_sign_up"></p>
                        <label class="d-block text-secondary">Password</label>
                        <input type="password" name="password" id="password_sign_up" placeholder="Enter your password" class="w-100 ps-3 rounded-2 border border-gray-600 border-2 d-block col-form-label">
                        <p class="text-danger me-2" id="error_password_sign_up"></p>
                        <label class="d-block text-secondary">Confirm password</label>
                        <input type="password" name="conf_password" id="conf_password_sign_up" placeholder="Confirm your password" class="w-100 ps-3 rounded-2 border border-gray-600 border-2 d-block col-form-label">
                        <p class="text-danger me-2" id="error_conf_password_sign_up"></p>
                        <input type="submit" name="sign_up" class="btn btn-outline-secondary w-50 mt-3 mb-1 mx-auto">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script src="index.js"></script>
<script src="validation.js"></script>


<script>
    console.log(window.location.hash);
    if(window.location.hash == '#signin'){
        nav_sign_in.click();
    }
    if(window.location.hash == '#signup'){
        nav_sign_up.click();
    }
    if(window.location.hash == '#signin?error_signin'){
        nav_sign_in.click();
        document.getElementById('error_signin').innerHTML = `
                        <div class="alert alert-danger d-flex justify-content-between align-items-center px-4 py-2" role="alert">
                            <div class="text-start">
                                <i class="bi bi-exclamation-octagon h5 me-3"></i>
                                Your email or password is incorrect.
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        `;
    }
    if(window.location.hash == '#signup?error_signup'){
        nav_sign_up.click();
        document.getElementById('error_signup').innerHTML = `
                        <div class="alert alert-danger d-flex justify-content-between align-items-center px-4 py-2" role="alert">
                            <div class="text-start">
                                <i class="bi bi-exclamation-octagon h5 me-3"></i>
                                This user is a relly exated.
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        `;
    }
</script>