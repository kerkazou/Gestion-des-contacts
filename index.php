<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
</head>
<body>
    <!---------------------- NavBar ---------------------->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark px-5">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand text-light" href="#">Contacts List</a>
            <div class="row collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="col-6 navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item d-none">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <form class="col-3 d-flex justify-content-evenly">
                    <input class="form-control me-3 d-none" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary me-3 nav_sign_in" type="button">Sign In</button>
                    <button class="btn btn-outline-secondary me-3 nav_sign_up" type="button">Sign Up</button>
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
                        <li class="nav-item col-6"><button type="button" class="nav-link tm-nav-link-border-right w-100 text-center active" id="btn_sign_in">Sign In</button></li>
                        <li class="nav-item col-6"><button type="button" class="nav-link tm-no-border-right w-100 text-center" id="btn_sign_up">Sign Up</button></li>
                    </ul>
                </div>
                        <!---------------------- Sign In ---------------------->
                <div class="card-body" id="sign_in">
                    <h3 class="text-center mt-4">SIGN IN</h3>
                    <p class="text-center text-secondary">Enter your credentials to access your account</p>
                    <form class="d-flex flex-column" id="form_sign_in" method="POST" action="sign_in.php">
                        <label class="d-block mt-4 text-secondary">Email</label>
                        <input type="text" name="email" id="email_sign_in" placeholder="Enter your email" class="w-100 ps-3 rounded-2 border border-gray-600 border-2 col-form-label">
                        <p class="text-danger me-2" id="error_email"></p>
                        <label class="d-block text-secondary">Password</label>
                        <input type="password" name="password" id="password_sign_in" placeholder="Enter your password" class="w-100 ps-3 rounded-2 border border-gray-600 border-2 d-block col-form-label">
                        <p class="text-danger me-2" id="error_password"></p>
                        <div>
                            <input type="checkbox" class="mt-3 mx-1" name="checked" id="checked">
                            <label for="checked" class="text-secondary">keep me signed in on this device</label>
                            <a class="btn btn-link float-end" style="color: #00C1FE;">Forget password?</a>
                        </div>
                        <button type="submit" name="sign_in" id="validation_sign_in" class="btn btn-outline-secondary w-50 my-4 mx-auto" onclick="validation_sign_in()">SIN IN</button>
                    </form>
                </div>
                        <!---------------------- Sign Up ---------------------->
                <div class="card-body" id="sign_up">
                    <h3 class="text-center mt-2">SIGN UP</h3>
                    <p class="text-center text-secondary">Please fill out the form below to create your account!</p>
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
                        <input type="submit" name="sign_up" id="validation_sign_up" class="btn btn-outline-secondary w-50 mt-3 mb-1 mx-auto">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script src="index.js"></script>
<script src="validation.js"></script>