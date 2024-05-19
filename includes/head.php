<?php require 'conn.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Bibit Unggul</title>
    <link rel="icon" href="img/logo2.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/lightslider.min.css" />
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/price_rangs.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/ecommerce">
                            <img src="img/logo2.png" alt="logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="category.php">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <?php
                            $mail = '';
                            if (isset($_SESSION['email'])){
                                $mail = $_SESSION["email"];
                            }
                            $name= '';

                            $query = 'SELECT * FROM users';
                            $result = mysqli_query($con, $query);
                            while($row = mysqli_fetch_array($result)){
                                if($row['email'] == $mail){
                                    $name = $row['first_name'] . " " . $row['last_name'];
                                }
                            }
                            
                            if (isset($_SESSION['email'])) {
                                echo '
                                    <div style="display: flex; align-items: center;">
                                        <div class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                '.$name.'
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_3">
                                                <a class="dropdown-item" href="allorders.php">My Orders</a>
                                                <a class="dropdown-item" href="scripts/logout_script.php">Logout</a>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="cart.php" id="navbarDropdown3">
                                            <i class="fas fa-cart-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    ';
                            } else {
                                echo '<div class="nav-item">
                                        <a href="login.php"><button class="nav-link custom">Login</button></a>
                                    </div>';
                                echo '<div class="nav-item">
                                        <a href="register.php"><button class="nav-link custom">Sign Up</button></a>
                                    </div>';
                            }
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

<a href="https://api.whatsapp.com/send?phone=081997772333" class="whatsapp-logo" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999; padding: 1%; background: #fff; border-radius: 50px;">
	<img src="img/logo-whatsapp.png" alt="WhatsApp Logo" style="width: 25px; height: 25px;">
</a>