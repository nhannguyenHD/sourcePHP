<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Admin - Essence  </title>

    <!-- Favicon  -->
    <link rel="icon" href="../public/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../public/css/core-style.css">
    <link rel="stylesheet" href="../public/b.css">
   

</head>
<body>
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Header Meta Data -->
            <div class="classy-navbar header-meta d-flex clearfix justify-content-start">
                <a class="navbar-brand logo_h" href="index.php"><img src="../public/img/core-img/logo.png" alt=""></a>
                <div class="user-login-info" >
                    <a href="admin.php"><strong>AdminPage</strong> </a>
                </div>
                <!-- Search Area -->
                <div class="search-area" style="border-right: 1px solid #ebebeb;">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                
               
                <!-- Cart Area -->
                <!-- <div class="search-area pl-5 ">                   
                    <a href=""><img src="../public/img/core-img/logo.png" alt=""></a>
                </div> -->
            </div>
            <!-- Classy Menu -->
            <nav class="classy-navbar header-meta d-flex clearfix justify-content-start pl-0" id="essenceNav">
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler ">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu ">
                    <!-- close btn -->
                    <div class="classycloseIcon ">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <!-- <li style="font-size:2em; color:#252525;"><a href="admin.php">AdminPage</a></li> -->
                            <li class="active"><a href="?page=static" >Statistic</a></li>
                            <li><a href="?page=product">Item</a>
                                <div class="megamenu" style="width:50%;">
                                    <ul class="single-mega cn-col-12">
                                        <li class="title"><a href="?page=type">Type</a></li>
                                        <li class="title"><a href="?page=brand">Brand</a></li>
                                        <li class="title"><a href="?page=product">Product</a></li>
                                    </ul>
                                </div>  
                            </li>
                            <!-- <li><a href="?page=member">Members</a></li> -->
                            <li><a href="?page=blog">Blog</a></li>
                            <li><a href="?page=bill">Billing</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
                 <!-- User Login Info -->
                <div class="user-login-info header-meta d-flex clearfix justify-content-end" style="border-right: 1px solid #ebebeb;" >
                    <a href="index.php?page=login"><img src="../public/img/core-img/user.svg" alt=""></a>
                </div>
            </nav>
        </div>
    </header>
