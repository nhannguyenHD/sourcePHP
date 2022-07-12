<?php
require 'header.php';
?>
<div class="top_catagory_area section-padding-40 pt-3 clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-12 text-center p-3">
                <h2> brands of Products</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-12 table-responsive">
            <table class="table table-bordered table-hover table-sm text-center ">                   
                <thead class="thead-dark">
                    <th colspan="5" class="p-2">
                        <a href="?page=add&bra=1" class="btn btn-success">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add new brand
                        </a>
                    </th>   
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Code / <span>Name</span> </th>
                        <th scope="col">Note</th>
                        <th scope="col">Image</th>
                        <th scope="col">Update/Delete</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php 
                    $i=0;
                    // Loops list of brand without delete==1
                    foreach($brands as $brands){
                        $i+=1;
                        $update='?page=update&idbrand='.$brands['id_brand'];
                        $del='?page=del&idbrand='.$brands['id_brand'];                      
                    ?>

                    <tr>
                        <th scope="row"><?=$i?></th>
                        <td class="text-left pl-3"> ( <span class="code"><?=$brands['id_brand']?></span> ) <?=$brands['name_brand']?></td>
                        <td><?=$brands['detail']?></td>
                        <td>
                        <img src="<?=$img_path.$brands['image']?>" width="80px" alt="">
                        </td>
                        <td class="b_edit">
                            <a href="<?=$update?>" class="btn btn-success"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <a href="<?=$del?>" class="btn btn-success"><i class="fa fa-trash" aria-hidden="true"></i></a>
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