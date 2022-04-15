<?php
    include "class_user.php";
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
            <form class="d-flex gap-3">
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
                <div class="card profile bg-dark pb-2">
                    <div class="img_block">
                        <img class="card-img-top" src="USER/profil.jpg" alt="Your image">
                    </div>
                    <form class="card-body gap-5" action="logout.php">
                        <h4 class="card-title text-center f-bold mb-4"><?php echo $_SESSION['username'] ?></h4>
                        <p class="text-start ms-3">Signup date: <?php echo $_SESSION['date_sign_up'] ?></p>
                        <p class="text-start ms-3">Last login: <?php echo $_SESSION['last_login'] ?></p>
                        <button class="btn btn-outline-secondary mt-4" name="logout" type="submit" style="width: 40%;">Logout</button>
                  </form>
                </div>
            </div>
        </div>

        <!-- Navbar de la liste -->
        <div class="d-sm-flex justify-content-between align-items-center py-2 px-5">
            <h4 class="text-secondary">Contacts Lists</h2>
            <div>
                <i class="bi bi-sort-alpha-up btn text-secondary border-0" style="font-size: 25px;"></i><!-- bi-sort-alpha-down-alt -->
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">ADD NEW CONTACTS</button>
            </div>
        </div>

        <hr style="width: 70%; margin-left: 15%; margin-top: 0px;">

        <!-- Afichage des contactes -->
        <div class="d-flex justify-content-center flex-wrap gap-5">
            <?php 
                // include 'class_contact.php';
                // while ($af_contact = $contact->selectAsc($_SESSION['id'])){
            ?>

                <div class="d-flex align-items-center gap-2">
                    <div class="d-sm-flex user">
                        <div class="image">
                            <img src="USER/profil.jpg" alt="Contact1">
                        </div>
                        <div class="details">
                            <h3><?php // echo $af_contact['username'] ?></h3>
                            <p><i class="bi bi-telephone me-2"></i><?php // echo $af_contact['phone'] ?></p>
                            <p><i class="bi bi-envelope me-2"></i><?php // echo $af_contact['email'] ?></p>
                            <p><i class="bi bi-geo-alt me-2"></i><?php // echo $af_contact['adress'] ?></p>
                        </div>
                    </div>
                    <div class="nav_user">
                        <span><i class="bi bi-pencil-square"></i></span>
                        <span></span>
                        <span><i class="bi bi-trash"></i></span>
                    </div>
                </div>
            
            <?php
                // }
            ?>
        </div>
    </div>

    <!-- Modal Add contacts -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                <h4 class="modal-title text-light" id="staticBackdropLabel">Add Contact</h4>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" class="container" action="">
                        <div class="form-floating mb-3">
                            <input class="form-control mb-3" name="name" type="text" required id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control mb-3" name="Phone"type="text" required id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Phone</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control mb-3" name="email" type="text" required id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Adress email</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Adress...</label>
                          </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-outline-secondary me-3" name="add" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<script src="contacts.js"></script>