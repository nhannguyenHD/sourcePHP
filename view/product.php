<?php 
require "head.php";
require "header.php";
?>

<!-- ##### Single Product Details Area Start ##### -->
<section class="single_product_details_area d-flex align-items-center">

    <!-- Single Product Thumb -->
    <div class="single_product_thumb clearfix">
        <div class="product_thumbnail_slides owl-carousel">
            <?php
            $image0=$img_path_p.$curr_product['image9'];
            $image=explode('_',$curr_product['image9']);
            $image2=$img_path_p.$image[0].'_1.jpg';
            $image3=$img_path_p.$image[0].'_3.jpg';
            ?>
            <img src="<?=$image0?>" alt="">
            <img src="<?=$image2?>" alt="" >
            <img src="<?=$image3?>" alt="">
        </div>
    </div>

    <!-- Single Product Description -->
    <div class="single_product_desc clearfix">
        <span><?=$curr_brand['name_brand']?></span>
        <a href="cart.html">
            <h2><?=$curr_product['name_product']?></h2>
        </a>
        <?php if($curr_product['discount']>0){ ?>
            <p class="product-price">
                <span class="old-price"><?=number_format($curr_product['price'])?>₫</span>
                <?=number_format((100-$curr_product['discount'])*$curr_product['price']/100,2)?>₫
            </p>
        <?php 
        } 
        else{
        ?>
            <p class="product-price">
            <?=number_format($curr_product['price'])?>₫
            </p>
        <?php }?>
        <p class="product-desc"><?=$curr_product['detail']?></p>

        <!-- Form -->
        <form class="cart-form clearfix" method="post">
            <!-- Select Box -->
            <div class="select-box d-flex mt-50 mb-30">
                <select name="select" id="productSize" class="mr-5">
                    <option value="value">Size: XL</option>
                    <option value="value">Size: X</option>
                    <option value="value">Size: M</option>
                    <option value="value">Size: S</option>
                </select>
                <select name="select" id="productColor">
                    <option value="value">Color: Black</option>
                    <option value="value">Color: White</option>
                    <option value="value">Color: Red</option>
                    <option value="value">Color: Purple</option>
                </select>
            </div>
            <!-- Cart & Favourite Box -->
            <div class="cart-fav-box d-flex align-items-center">
                <!-- Cart -->
                <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
                <!-- Favourite -->
                <div class="product-favourite ml-4">
                    <a href="#" class="favme fa fa-heart"></a>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- ##### Single Product Details Area End ##### -->
<?php
require "footer.php";

?>