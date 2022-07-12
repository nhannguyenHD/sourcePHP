<?php
require 'header.php';
?>
<div class="top_catagory_area section-padding-40 pt-3 clearfix">
    <div class="container-fluid pl-4 pr-4">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 text-center p-3">
                <h2> All of Products </h2>
            </div>
            <div class="col-12 col-sm-12 col-md-12 table-responsive">
            <table class="table table-bordered table-hover table-sm">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th colspan="9" class="p-2">
                            <a href="?page=add&pro=1&g=1" class="btn btn-success">
                                <i class="fa fa-plus" aria-hidden="true"></i>  Add Mr.'s
                            </a>
                            <a href="?page=add&pro=1&g=0" class="btn btn-success">
                                <i class="fa fa-plus" aria-hidden="true"></i>  Add Ms's
                            </a>
                        </th>
                    </tr>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col"> Code / <span>Name</span> </th>
                        <th scope="col">For gender</th>
                        <th scope="col">Brand  / Type </th>
                        <th scope="col">Price  / Discount </th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Image</th>
                        <th scope="col">Extra Image</th>

                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php 
                    $i=0;
                    // Loops list of type without delete
          
                    foreach($products as $products){
                        $i+=1;
                       
                        // $image0=$img_path_p.$product['image9'];
                        

                        
                        $update='?page=update&id='.$products['id_product'];
                        $del='?page=del&id='.$products['id_product'];                      
                    ?>

                    <tr>
                        <th scope="row"><?=$i?></th>
                        <td>( <span class="code"><?=$products['id_product']?></span> ) <?=$products['name_product']?></td>
                        <td class="text-center"><?php echo $gender=$products['gender']==1?'Mr.':'Ms'; ?> </td>
                        <td class="text-center"><?=$products['name_brand']?> -- <?=$products['name_type']?></td>
                        <td class="text-center"><?=number_format($products['price'])?> ₫ -- <?=number_format($products['discount'],1)?> %</td>
                        <td class="text-center"><?=$products['quantity']?></td>
                        <td>
                            <img src="<?=$img_path_p.$products['image9']?>" width="80px" alt="">
                        </td>
                        <td>
                            <?php $images=$image->getImageByIdProduct($products['id_product']);
                            foreach($images as $images){
                                extract($images);
                            ?>
                            <img src="<?=$img_path_p.$name_image?>" width="80px" alt="">
                            <?php }?>
                        </td>`

                        <td>
                            <a href="<?=$update.'&g='.$products['gender']?>" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <a href="<?=$del?>" class="opener btn btn-success text-white"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                       
                </tbody>
            </table>


            </div>
        </div>
    </div>
</div>



<?php
require 'footer.php';

?>