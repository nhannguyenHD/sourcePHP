<?php 
    require 'header.php';
?>

<div class="checkout_area ">
    <div class="container">
        <div class="row">
          <div class="col-12 col-md-12">
                <div class="checkout_details_area mt-50 clearfix">                
                    <div class="cart-page-heading mb-30">
                        <h5>Edit Item Page</h5>
                    </div>
                    <?php 
                        if(isset($_GET['id']))
                        { 
                    ?>
                        <!-- Form edit product -->
                        <form action="?page=updated&id=<?=$pro['id_product']?>" method="post" enctype="multipart/form-data" id="on">
                            <div class="row">
                           
                                <div class="col-6 mb-3">
                                    <label for="country">Type <span>*</span></label>
                                    <select class="w-100" id="" name="type">
                                        <?php foreach($types as $types){?>
                                        <option value="<?=$types['id_type']?>" <?php echo $ted=$pro['id_type']==$types['id_type'] ?'selected':'';?> ><?=$types['name_type']?>  </option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="country">Brand <span>*</span></label>
                                    <select class="w-100" id="" name="brand">
                                        <?php foreach($brands as $brands){?>
                                        <option value="<?=$brands['id_brand']?>" <?php echo $ted=$pro['id_brand']==$brands['id_brand'] ?'selected':'';?>><?=$brands['name_brand']?></option>
                                        <?php }?>
                                    </select>
                                </div>    
                                
                                <div class="col-6 mb-3">
                                    <label for="company">Product Name <span>*</span></label>
                                    <input type="text" class="form-control" id="" value="<?=$pro['name_product']?>" name="name_product"  placeholder="Enter product's name" autocomplete="on">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="company">Special</label>
                                    <select class="w-100" id="" name="special">
                                        <option value="0" <?php echo $ted=$pro['special']==0 ?'selected':'';?> >Don't show</option>
                                        <option value="1" <?php echo $ted=$pro['special']==1 ?'selected':'';?> >Show on page</option>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="">Price (‎₫) <span>*</span></label>
                                    <input type="number" min="0"  class="form-control" id="" value="<?=$pro['price']?>" required name="price" placeholder="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Discount (%) <span>*</span></label>
                                    <input type="number" min="0" max="100" class="form-control" id="" value="<?=number_format($pro['discount'],1)?>" required name="discount" placeholder="">
                                </div>

                                <!-- <div class="col-4 mb-3">
                                    <label for="country">Color <span>*</span></label>
                                    <select class="w-100" id="" name="color"> 
                                        <option value="2">Black</option>
                                        <option value="3">Blue</option>
                                        <option value="1">White</option>
                                    </select>
                                </div>
                                <div class="col-4 mb-3">
                                    <label for="country">Size <span>*</span></label>
                                    <select class="w-100" id="" name="size">
                                        <option value="xs">XS</option>
                                        <option value="s">S</option>
                                        <option value="m" selected>M</option>
                                        <option value="l">L</option>
                                        <option value="xl">XL</option>  
                                        <option value="xxl">XXL</option>
                                        <option value="freesize">Freesize</option>                                             
                                    </select>
                                </div> -->
                                <div class="col-4 mb-3">
                                    <label for="">Quantity <span>*</span></label>
                                    <input type="number" min="1"  class="form-control" id="" value="<?=$pro['quantity']?>" required name="quantity" placeholder="1">
                                </div>
                               
                                
                                <div class="col-8 mb-3">
                                    <label for="street_address">Decription <span>*</span></label>
                                    <textarea  id="" class="form-control" cols="30"  rows="30" name="decription"><?=$pro['aaa']?></textarea>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="first_name">Main Image <span>*</span></label>
                                    <input type="file" class="form-control-file" name="img9" id="">
                                </div>
                                <div class="col-md-4 mb-3">
                                <label for="first_name">Thumbnail Image</label>
                                    <input type="file" class="form-control-file" name="img_thumb" id="">
                                </div> 
                                <div class="col-md-4 mb-3">
                                <label for="first_name">Extra Image</label>
                                    <input type="file" class="form-control-file" name="img_extra" id="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="custom-control custom-checkbox d-block p-3">
                                        <input type="submit" class="btn essence-btn" value="Submit" name="btn-add">
                                    </div>
                                </div>
                                
                               
                           
                                   
                            </div>
                        </form>
                        <!-- END Form ADD product -->
                    <?php 
                        }
                        elseif(isset($_GET['bra']))
                        { 
                    ?>
                        <!-- Form ADD BRAND -->
                        <form action="?page=addition" method="post" id="on" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="company">Brand Name <span>*</span></label>
                                    <input type="text" class="form-control" id="" value="" name="brand_product"  placeholder="Enter brand's name" autocomplete="on">
                                </div> 
                                <div class="col-6 mb-3">
                                    <label for="first_name">Main Image <span>*</span></label>
                                    <input type="file" class="form-control-file" name="img" id="">
                                </div>                             
                                <div class="col-8 mb-3">
                                    <label for="street_address">Decription <span>*</span></label>
                                    <textarea  id="" class="form-control" cols="30" placeholder="Enter brand's decription" rows="30" name="decription"></textarea>
                                </div>                                        
                                <div class="col-md-12 mb-3">
                                    <div class="custom-control custom-checkbox d-block p-3">
                                        <input type="submit" class="btn essence-btn" value="Submit" name="btn-add">
                                    </div>
                                </div>                                  
                            </div>
                        </form>
                        <!-- END Form ADD BRAND -->
                        <?php 
                        }
                        elseif(isset($_GET['typ']))
                        { 
                    ?>
                        <!-- Form ADD TYPE -->
                        <form action="?page=addition" method="post" id="on">
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="company">Type Name <span>*</span></label>
                                    <input type="text" class="form-control" id="" value="" name="type_product"  placeholder="Enter type's name" autocomplete="on">
                                </div>
                                <div class="col-6 mb-3">
                                    <label for="company">For gender</label>
                                    <select class="w-100" id="" name="gender">
                                        <option value="0">Ms/Women</option>
                                        <option value="1">Mr./Men</option>
                                    </select>
                                </div>                                         
                                <div class="col-12 mb-3">
                                    <label for="street_address">Notes <span>*</span></label>
                                    <textarea  id="" class="form-control" cols="90"  placeholder="Enter notes" name="decription"></textarea>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="first_name">Image <span>*</span></label>
                                    <input type="file" class="form-control-file" name="img" id="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="custom-control custom-checkbox d-block p-3">
                                        <input type="submit" class="btn essence-btn" value="Submit" name="btn-add">
                                    </div>
                                </div>                             
                            </div>
                        </form>
                        <!-- END Form ADD TYPE -->

                    <?php 
                        }
                        else
                        {
                    ?>
                    Error Page
                            
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>





<?php 
    require 'footer.php';
    
?>