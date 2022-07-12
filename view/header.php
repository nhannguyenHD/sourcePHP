
<body style="background-color: rgba(169, 169, 169, .2);">
    <!-- ##### Header Area Start ##### -->
    <header class="header_area" >
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between" style="background-color: rgba(255, 255, 255, .8); ">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.php"><img src="../public/img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Clothing</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Women's Collection</li>
                                        <?php  
                                            $type =new Type();
                                            $brand=new Brand();
                                            $typelist=$type->getTypeByGender(0);
                                            foreach( $typelist as $typelist){
                                            extract($typelist);
                                            $link='index.php?page=cate&idtype='.$typelist['id_type'].'';                                                                          
                                        ?>

                                        <li><a href="<?=$link?>"><?=$typelist['name_type'];?></a></li>

                                        <?php  } ?>
                                        
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Men's Collection</li>
                                        <?php  
                                            $type =new Type();
                                            $typelist=$type->getTypeByGender(1);
                                            foreach( $typelist as $typelist){
                                            extract($typelist);
                                            $link='index.php?page=cate&idtype='.$typelist['id_type'].'';                                           
                                        ?>
                                        <li><a href="<?=$link?>"><?=$typelist['name_type']?></a></li>
                                    <?php  } ?>
                                    </ul>
                                    <!-- <ul class="single-mega cn-col-4">
                                        <li class="title">Kid's Collection</li>
                                        <?php  
                                            $type =new Type();
                                            $typelist=$type->getTypeByGender(2);
                                            foreach( $typelist as $typelist){
                                            extract($typelist);
                                            $link='index.php?page=cate&idtype='.$typelist['id_type'].'';
                                        ?>
                                        <li><a href="<?=$link?>"><?=$typelist['name_type']?></a></li>
                                        <?php  } ?>
                                    </ul> -->
                                    <div class="single-mega cn-col-4">
                                        <img src="../public/img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">S & A</a>
                                <ul class="dropdown">
                                    <li><a href="index.php">Shoes</a></li>
                                    <li><a href="index.php?page=cate">Acessories</a></li>
                                </ul>
                            </li>
                            <li><a href="index.php?page=blog">Blog</a></li>
                            <li><a href="index.php?page=about">About</a></li>
                            <li><a href="index.php?page=contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="index.php?page=login"><img src="../public/img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="../public/img/core-img/user.svg" alt=""></a>
                    
                    <!-- <style>

                    </style>
                    <div id="login">
                        <div class="row">
                            <div class="col-8"></div>
                            <div class="col-4"></div>
                        </div>
                    </div> -->

                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="../public/img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="../public/img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="../public/img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="../public/img/product-img/product-2.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="../public/img/product-img/product-3.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.php" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->