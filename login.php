<?php
if (isset($_POST["submit"]))
{
    //grapping the data
    $username=$_POST["username"];
   
    $password=$_POST["password"];
   

    //signup controller
    include "connect.php";
    include "login-class.php";
    include "login-controller.php";

    $login = new logincontr( $username,$password);

    //error handlers
    $login->loginUser();

    //going to login page
    header("location:user.php?error=none");

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./images/fav-icon.png" type="image/x-icon">
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="./images/logo-dark.png" class="logo-img" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-items ms-auto mb-2 mb-lg-0">


                        
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Templates</a>
                        </li>

                    </ul>
                    <form class="d-flex nav-form" action="signup.php" method="post">

                        <button class="btn" >Sign up</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container my-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-12 login-form hero-heading">
                    <h1>LOG IN</h1>
                <form action="" method="post" class="nav-form">
                 <input type="text" name="username" Placeholder="Enter Username" class="form-control my-4" autocomplete="off">
                 <input type="password" name="password" Placeholder="Enter Password" class="form-control my-4" autocomplete="off">
                 <button type="submit" name="submit">Login</button>
                </form>
                </div>
            </div>
        </div>
     

    </main>

  


















 <style>
    input{
        border-left:3px solid #29b21f;
    }
    .login-form{
        max-width:700px;
        width:100%;
       
    }
 </style>







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>