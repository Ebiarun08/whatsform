<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">

    <title>WHATSFORM</title>
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


                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                English
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Portugeus</a></li>
                                <li><a class="dropdown-item" href="#">Espanol</a></li>

                                <li><a class="dropdown-item" href="#">Indonesian</a></li>
                            </ul>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Templates</a>
                        </li>
                        <?php
                        if(isset($_SESSION["id"])){

                        
                        ?>
                       
                        
                        <li><a href="#"><?php echo $_SESSION["username"];?>></a></li>
                         <li><a href="includes/index.php">LOGOUT</a></li>

                        <?php
                        }
                        else{
                         ?>
                         <li><a href="login.php">Login</a></li>
                        
                    <?php
                     }
                    ?>

                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Pricing section start -->
        <section id="pricing">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-8  hero-heading">
                        <h1>Hello
                            <span><?php echo $_SESSION["username"];?></span> Welcome to the<span> Whats form</span>
                        </h1>
                        <h2 class="mt-5">Choose a plan when you need powerful features</h2>
                    </div>
                    
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-12 hero-content">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist"
                            style="background-color: none;">
                            <li class="nav-item" role="presentation">
                                <button class="port-link  active mx-3" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Per Monthly</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="port-link mx-3 " id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Per Yearly</button>
                            </li>

                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="row py-2">
                                    <div class="col-lg-12">
                                        <table class="table">

                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td> <span class="fw-bold">FREE</span>
                                                        <h1>$0</h1>
                                                        <p>Forever</p>
                                                    </td>
                                                    <td><span class="fw-bold">LITE</span>
                                                        <h1>$12</h1>
                                                        <p>Per Month</p>
                                                        <p>Billed Monthly</p>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">STANDARED</span>
                                                        <h1>$24</h1>
                                                        <p>Per Month</p>
                                                        <p>Billed Monthly</p>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">PLUS</span>
                                                        <h1>$49</h1>
                                                        <p>Per Month</p>
                                                        <p>Billed Monthly</p>
                                                    </td>


                                                </tr>
                                                <tr>
                                                    <td>Responsive Via WhatsApp</td>
                                                    <td>Unlimited</td>
                                                    <td>Unlimited</td>
                                                    <td>Unlimited</td>
                                                    <td>Unlimited</td>

                                                </tr>
                                                <tr>
                                                    <td>No of forms</td>
                                                    <td>2</td>
                                                    <td>10</td>
                                                    <td>25</td>
                                                    <td>50</td>

                                                </tr>
                                                <tr>
                                                    <td>Responsive in Dashboard</td>
                                                    <td>-</td>
                                                    <td><i class="fa-solid fa-check"></i></td>
                                                    <td><i class="fa-solid fa-check"></i></td>
                                                    <td><i class="fa-solid fa-check"></i></td>

                                                </tr>
                                                <tr>
                                                    <td>Custom CEO meta data</td>
                                                    <td>-</td>
                                                    <td><i class="fa-solid fa-check"></i></td>
                                                    <td><i class="fa-solid fa-check"></i></td>
                                                    <td><i class="fa-solid fa-check"></i></td>

                                                </tr>
                                                <tr>
                                                    <td>Custom Whatsapp form</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><i class="fa-solid fa-check"></i></td>
                                                    <td><i class="fa-solid fa-check"></i></td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        Custom Script &amp; Integrations
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><i class="fa fa-check"></i></td>
                                                    <td><i class="fa fa-check"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Remove WhatsForm branding
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><i class="fa fa-check"></i></td>
                                                    <td><i class="fa fa-check"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        File upload in form
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><i class="fa fa-check"></i></td>
                                                    <td><i class="fa fa-check"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Team routing
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><i class="fa fa-check"></i></td>
                                                    <td><i class="fa fa-check"></i></td>
                                                </tr>
                                                <tr class="nav-form me-auto p-0">
                                                    <td>
                                                        
                                                    </td>
                                                    <td><button>Buy Now</button></td>
                                                    <td><button>Buy Now</button></td>
                                                    <td><button>Buy Now</button></i></td>
                                                    <td><button>Buy Now</button></i></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>




                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="row py-2">
                                    <div class="col-lg-12">
                                        <table class="table">

                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td> <span class="fw-bold">FREE</span>
                                                        <h1>$0</h1>
                                                        <p>Forever</p>
                                                    </td>
                                                    <td><span class="fw-bold">LITE</span>
                                                        <h1>$9</h1>
                                                        <p>Per Year</p>
                                                        <p>Billed Yearly</p>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">STANDARED</span>
                                                        <h1>$18</h1>
                                                        <p>Per Year</p>
                                                        <p>Billed Yearly</p>
                                                    </td>
                                                    <td>
                                                        <span class="fw-bold">PLUS</span>
                                                        <h1>$36</h1>
                                                        <p>Per year</p>
                                                        <p>Billed Yearly</p>
                                                    </td>


                                                </tr>
                                                <tr>
                                                    <td>Responsive Via WhatsApp</td>
                                                    <td>Unlimited</td>
                                                    <td>Unlimited</td>
                                                    <td>Unlimited</td>
                                                    <td>Unlimited</td>

                                                </tr>
                                                <tr>
                                                    <td>No of forms</td>
                                                    <td>2</td>
                                                    <td>10</td>
                                                    <td>25</td>
                                                    <td>50</td>

                                                </tr>
                                                <tr>
                                                    <td>Responsive in Dashboard</td>
                                                    <td>-</td>
                                                    <td><i class="fa-solid fa-check"></i></td>
                                                    <td><i class="fa-solid fa-check"></i></td>
                                                    <td><i class="fa-solid fa-check"></i></td>

                                                </tr>
                                                <tr>
                                                    <td>Custom CEO meta data</td>
                                                    <td>-</td>
                                                    <td><i class="fa-solid fa-check"></i></td>
                                                    <td><i class="fa-solid fa-check"></i></td>
                                                    <td><i class="fa-solid fa-check"></i></td>

                                                </tr>
                                                <tr>
                                                    <td>Custom Whatsapp form</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><i class="fa-solid fa-check"></i></td>
                                                    <td><i class="fa-solid fa-check"></i></td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        Custom Script &amp; Integrations
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><i class="fa fa-check"></i></td>
                                                    <td><i class="fa fa-check"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Remove WhatsForm branding
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><i class="fa fa-check"></i></td>
                                                    <td><i class="fa fa-check"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        File upload in form
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><i class="fa fa-check"></i></td>
                                                    <td><i class="fa fa-check"></i></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Team routing
                                                    </td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><i class="fa fa-check"></i></td>
                                                    <td><i class="fa fa-check"></i></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-8  hero-heading">
                        <h6><i class="fa-solid fa-circle-check mx-2" style="color: #29b21f;font-size: 20px;"></i><span>30 day money back: </span>100% satisfied with
                            any paid plan or get a full refund.</h6>
                        <form action="" class="nav-form create-form text-center mt-5">
                            <button class="mt-5 "><a href="#"></a>Create Whatsapp Form</button>
                        </form>
                        <h4 class="text-muted text-center mt-2">No credit card required. No coding required.</h4>
                    </div>

                </div>
                <div class="row justify-content-center py-5">
                    <div class="col-lg-6">
                        <div class="policy-content">
                            <span><i class="fa-solid fa-arrow-up mx-2"></i>Upgrade policy</span>
                            <p>If you upgrade to a higher plan, you are charged the difference between your current plan
                                and the new one.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="policy-content">
                            <span><i class="fa-solid fa-arrow-down mx-2"></i>Downgrade policy</span>
                            <p>If you downgrade to a lesser plan, all your responses that exceed plan limits are safe
                                until you return to the higher plan.</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center py-4">
                    <div class="col-lg-8 text-center">
                        <div class="promote-content">
                            <h2>Promote WhatsForm</h2>
                            <p>Are you a consultant, content creator or an agency? Now you can earn by helping your
                                clients!</p>
                            <a href="#">Join our Affiliate Plan</a>
                        </div>
                    </div>
                </div>
                <div class="row text-center whatsapp-links py-5">
                    <div class="col-md-4">
                        <a href=""> Whatsapp Widget</a>

                    </div>
                    <div class="col-md-4">
                        <a href="#"> Whatsapp for terms</a>

                    </div>
                    <div class="col-md-4">
                        <a href="#">Join affiliatepr</a>

                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing section End -->
    </main>
    <footer>
        <div class="container my-5 text-center">
            <div class="row">
              <div class="col-md-6">
                © micro.company
              </div>
              <div class="col-md-6 d-flex footer-links">
                <a class="p-1 a">Contact us</a>
                <a class="p-1 a">Help center</a>
                <a class="p-1 a">System status</a>
                <a class="p-1 a">Privacy policy</a>
                <a class="p-1 a">Terms</a>
              </div>
      
            </div>
          </div>
    </footer>



























    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>