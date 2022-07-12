<!-- ##### Welcome Area Start ##### -->
<section class="welcome_area bg-img background-overlay" style="background-image: url(../public/img/bg-img/bg-1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="hero-content">
                    <h6>asoss</h6>
                    <h2>New Collection</h2>
                    <a href="#" class="btn essence-btn">view collection</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Welcome Area End ##### -->

<!-- ##### Top Catagory Area Start ##### -->
<div class="top_catagory_area section-padding-80 clearfix">
    <div class="container">
        <div class="row justify-content-center">

            <!-- Single Catagory -->          
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img">
                    <div class="catagory-content" >
                       <a href="#" class="ab"><img src="../public/img/bg-img/bg-2.jpg" alt="" class="img-fluid"></a> 
                    </div>    
                    <div class="catagory-content single_absolute d-flex align-items-center justify-content-center">
                        <a href="#" id="a1">Clothing</a>                  
                    </div><a href="#">
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img">
                    <div class="catagory-content " >
                       <a href="#"><img src="../public/img/bg-img/bg-3.jpg" alt="" class="img-fluid">
                    </div> 
                    <div class="catagory-content single_absolute d-flex align-items-center justify-content-center" >
                        <a href="#" id="a2">Shoes</a>
                    </div>
                </div>
            </div>
            <!-- Single Catagory -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img">
                    <div class="catagory-content" >
                       <a href="#"><img src="../public/img/bg-img/bg-4.jpg" alt="" class="img-fluid"></a> 
                    </div> 
                    <div class="catagory-content single_absolute d-flex align-items-center justify-content-center">
                        <a href="#" id="a3">Accessories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Catagory Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<div class="cta-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-content bg-img background-overlay" style="background-image: url(../public/img/bg-img/bg-5.jpg);">
                    <div class="h-100 d-flex align-items-center justify-content-end">
                        <div class="cta--text">
                            <h6>-60%</h6>
                            <h2>Global Sale</h2>
                            <a href="#" class="btn essence-btn">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### CTA Area End ##### -->

<!-- ##### New Arrivals Area Start ##### -->
<section class="new_arrivals_area section-padding-80 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Popular Products</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
            <!-- Slide-show -->
                <div class="popular-products-slides owl-carousel">
                <?php 
                   
                    foreach($curr_product as $curr_product){
                    extract($curr_product);
                    
                    ?>
                    <!-- Single Product -->
                    <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <a href="<?=$link?>"><img src="<?=$image0?>" alt=""></a>
                            <!-- Hover Thumb -->
                            <a href="<?=$link?>"><img class="hover-img" src="<?=$image3?>" alt=""></a>

                            <?php if($curr_product['discount']>0){ ?>
                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span><?=number_format($curr_product['discount'])?> &#37;</span>
                                </div>
                            <?php }?>
                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <span><?=$curr_type['name_type']?> &#45;&#45; <?=$curr_brand['name_brand']?></span>
                            <a href="<?=$link?>">
                                <h6><?=$curr_product['name_product']?> </h6>
                            </a>
                        </div>
                        <div class="product-description">
                            <?php if($curr_product['discount']>0){ ?>
                                <p class="product-price">
                                <span class="old-price"><?=number_format($curr_product['price'])?>₫</span>   
                                &#151; <?=number_format((100-$curr_product['discount'])*$curr_product['price']/100,2)?>₫</p>
                                <?php } else{
                                ?>
                                <p class="product-price">
                                <?=number_format($curr_product['price'])?>₫ </p>
                            <?php }?>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="#" class="btn essence-btn">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php  } ?>

                    

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### New Arrivals Area End ##### -->

<!-- ##### Brands Area Start ##### -->
<div class="brands-area d-flex align-items-center justify-content-between">
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="../public/img/core-img/brand1.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="../public/img/core-img/brand2.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="../public/img/core-img/brand3.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="../public/img/core-img/brand4.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="../public/img/core-img/brand5.png" alt="">
    </div>
    <!-- Brand Logo -->
    <div class="single-brands-logo">
        <img src="../public/img/core-img/brand6.png" alt="">
    </div>
</div>
<!-- ##### Brands Area End ##### -->