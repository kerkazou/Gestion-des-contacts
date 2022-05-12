<?php
    require_once "class_user.php";
    session_start();
    $users->timeout();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profil.css">
    <link rel="stylesheet" href="card_user.css">
    <title>Profil</title>
</head>
</head>

<body style="overflow-x: hidden;">
    <!---------------------- NavBar ---------------------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <div class="container-fluid">
        <a class="navbar-brand text-light" href="index.php"><img src="SVG/logo1.png" alt="Logo" style="width: 40%;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <form class="d-flex justify-content-center gap-3">
                <div class="btn-group border align-items-center" style="border-radius: 8px;">
                    <input class="border-0 bg-dark ms-2" type="recheche" placeholder="Search...">
                    <button class="btn" type="button"><i class="bi bi-search text-secondary"></i></button>
                </div>
                <div class="d-flex align-items-center" type="button" onclick="profile()">
                    <img class="rounded-circle" src="USER/profil.jpg" alt="img" style="width: 30px; height: 30px;">
                    <i class="bi bi-caret-down-fill h5" id="profile_icone"></i>
                </div>
            </form>
          </div>
        </div>
      </nav>

    <div class="position-relative">
        <!-- card profile -->
        <div class="px-3 position-absolute" id="profile" style="display: none; z-index: 1;">
            <div class="col-md-3 col-sm-6 col-12 text-center float-end text-light">
                <form method="POST" action="edite_profile.php" enctype="multipart/form-data">
                    <div class="card profile bg-dark pb-2">
                        <div class="img_block">
                            <img class="card-img-top w-100" id="img_profile" src="USER/profil.jpg" alt="Your image">
                        </div>
                        <div class="card-body">
                            <div id="username_profile">
                                <h4 class="card-title text-center f-bold mb-4"><?php echo $_SESSION['username'] ?></h4>
                                <p class="text-start ms-3">Signup date: <?php echo $_SESSION['date_sign_up'] ?></p>
                                <p class="text-start ms-3">Last login: <?php echo $_SESSION['last_login'] ?></p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-3 my-3" action="logout.php">
                            <button class="btn btn-outline-secondary" name="logout" id="logout" type="submit" style="width: 40%;">Logout</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

<script>
    img_profile = document.getElementById('img_profile');
    username_profile = document.getElementById('username_profile');
    edite_username = document.getElementById('edite_username');
    uplode_img = document.getElementById('uplode_img');
    logout = document.getElementById('logout');
    save = document.getElementById('save');
    edite = document.getElementById('edite');
    close = document.getElementById('close');

    face_normal();

    edite.addEventListener('click' , (e) => {
        face_edite();
    });
    close.addEventListener('click' , (e) => {
        face_normal();
    });
    function face_edite() {
        img_profile.style.opacity = "40%";
        uplode_img.style.display = "block";
        username_profile.style.display = "none";
        edite_username.style.display = "block";
        logout.style.display = "none";
        edite.style.display = "none";
        save.style.display = "block";
        close.style.display = "block";
    }
    function face_normal() {
        img_profile.style.opacity = "100%";
        uplode_img.style.display = "none";
        username_profile.style.display = "block";
        edite_username.style.display = "none";
        logout.style.display = "block";
        edite.style.display = "block";
        save.style.display = "none";
        close.style.display = "none";
    }
</script>

        <!-- Navbar de la liste -->
        <div class="d-sm-flex justify-content-between align-items-center py-2 px-5">
            <h4 class="text-secondary">Contacts Lists</h2>
            <div class="d-flex justify-content-between">
                <i class="bi bi-sort-alpha-up btn text-secondary border-0" style="font-size: 25px;"></i><!-- bi-sort-alpha-down-alt -->
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADD NEW CONTACTS</button>
            </div>
        </div>

        <hr style="width: 70%; margin-left: 15%; margin-top: 0px;">

        <!-- Afichage des contactes -->
        <div class="d-flex justify-content-center flex-wrap gap-5 mb-5">
            <?php
                include 'class_contact.php';
                $af_contact = Contact::selectAsc($_SESSION['id']);
                foreach($af_contact as $contact){
            ?>
                <div class="d-flex align-items-center gap-2 contact">
                    <div class="d-flex user">
                        <div class="image">
                            <img src="USER/<?=strtolower($contact['username'][0])?>.png" alt="image of contact">
                        </div>
                        <div class="details">
                            <h3 class="d-none id"><?php echo $contact['idc'] ?></h3>
                            <h3 class="username"><?php echo $contact['username'] ?></h3>
                            <p><i class="bi bi-telephone me-2 "></i><span class="phone"><?php echo  $contact['phone'] ?></span></p>
                            <p><i class="bi bi-envelope me-2 "></i><span class="email"><?php echo $contact['email'] ?></span></p>
                            <p><i class="bi bi-geo-alt me-2 "></i><span class="adress"><?php echo $contact['adress'] ?></span></p>
                        </div>
                    </div>
                    <div class="nav_user">
                        <span><i class="bi bi-pencil-square btn-edit" data-bs-toggle="modal" data-bs-target="#editModal"></i></span>
                        <span></span>
                        <span><i class="bi bi-trash btn-delet" data-bs-toggle="modal" data-bs-target="#deletModal"></i></span>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>

    <!-- Modals -->
    <?php require_once 'modals.php' ?>


</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="contacts.js"></script>
<script src='update.js'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
    if(window.location.hash == '#add'){
        Command: toastr["success"]("Added", "A new contact has been added successfully")
        toastr.options = {
        "closeButton": true,
        "debug": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        setTimeout(function(){
            let urlParts=window.location.href.split("#");
            window.location.href=urlParts[0];
        },1000)
    }

    if(window.location.hash == '#edite'){
        Command: toastr["success"]("Edite", "A contact has been edited successfully")
        toastr.options = {
        "closeButton": true,
        "debug": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        setTimeout(function(){
            let urlParts=window.location.href.split("#");
            window.location.href=urlParts[0];
        },1000)
    }

    if(window.location.hash == '#delete'){
        Command: toastr["success"]("Delete", "A contact has been deleted successfully")
        toastr.options = {
        "closeButton": true,
        "debug": true,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        }
        setTimeout(function(){
            let urlParts=window.location.href.split("#");
            window.location.href=urlParts[0];
        },1000)
    }
    
</script>