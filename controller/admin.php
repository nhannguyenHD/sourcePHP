<?php

require "../model/connect.php";
require "../model/m_type.php";
require "../model/m_brand.php";
require "../model/m_product.php";
require "../model/m_image.php";
require "../model/PHPExcel.php";

require "../global.php";


$product= new Product();
$type= new Type();
$brand= new Brand();
$image= new Image();



if(isset($_GET['page'])){
    $pg=$_GET['page'];
    switch ($pg){
        // Nhập dữ liệu với Excel
        case 'excel':
            if(isset($_GET['up'])){
                if(isset($_POST['btn-upload'])){
                    $file=$_FILES['up-ex']['tmp_name'];
                    
                    $objReader= PHPExcel_IOFactory::createReaderForFile($file);
                    $objReader->setLoadSheetsOnly('Sheet2');

                    $objExcel= $objReader->load($file);
                    $sheetData= $objExcel->getActiveSheet()->toArray('null',true,true,true);
                    // print_r($sheetData);

                    
                    $highestRow=$objExcel->setActiveSheetIndex()->getHighestRow();

                   

                    for($row=2;$row<=$highestRow;$row++){
                        $name_product=htmlspecialchars($sheetData[$row]['A']);                                                
                        $price=$sheetData[$row]['D'];
                        $discount=$sheetData[$row]['E'];
                        $special=$sheetData[$row]['F']=="Yes"?1:0;
                        $gender=$sheetData[$row]['G']=="Men"?1:0;
                        $detail=htmlspecialchars($sheetData[$row]['H']);


                        $a=htmlspecialchars($sheetData[$row]['B']);
                        $types=$type->findTypeByNameGender($a,$gender);
                        // extract($types);
                        $id_type= $types['id_type'];

                        $b=$sheetData[$row]['C'];
                        $brands=$brand->findBrandByName('Zara');
                        $id_brand=$brands['id_brand'];
                       
                        $addnew= new Product(
                        $name_product,
                        $price,
                        $discount,
                        $detail,
                        $special,
                        'XL',
                        '30',
                        'pro1_8.jpg',
                        '1',
                        $id_type,
                        $id_brand,
                        '1');
                        $addnew->insert();
                    }
                    echo "<br>Successfully";
                }
                require "../view/admin/excel.php";
                break;
            }
            else{
                require "../view/admin/excel.php";
                break;
            }           
        // Vào nhập Form
        case 'add':
            $brands=$brand->getList();
            if(isset($_GET['g'])){
                $types=$_GET['g']==1?$type->getTypeByGender(1):$type->getTypeByGender(0);
            }
            else{
                $types='';
            }
            require "../view/admin/inputform.php";
            break;
        // Xử lý form gửi
        case 'addition':
            if(isset($_GET['idpro']))
            {

            $addpro= new Product
            (  
                $_POST['name_product'],
                $_POST['price'],
                $_POST['discount'],
                $_POST['decription'],
                $_POST['special'],
                $_POST['size'],
                $_POST['quantity'],
                $_FILES['img9']['name'],
                $_POST['type'],
                $_POST['brand'],
                $_POST['color']
            ); 
               
            $addpro->insert(); 
            move_uploaded_file($_FILES['img9']['tmp_name'],$img_path_p.$_FILES['img9']['name']);

            $prolatest=$product->getProductLatest();
            $image1= new Image
            (   $_FILES['img_thumb']['name'],
                '1',
                $prolatest['id_product']
            );
            $image1->insert();
            move_uploaded_file($_FILES['img_thumb']['tmp_name'],$img_path_p.$_FILES['img_thumb']['name']);

            $image2= new Image
            (   $_FILES['img_extra']['name'],
                '0',
                $prolatest['id_product']
            );
            $image2->insert();
            move_uploaded_file($_FILES['img_extra']['tmp_name'],$img_path_p.$_FILES['img_extra']['name']);

                // Update list
                $product= new Product();
                $products=$product->getList();
                $image= new Image();
                $images=$image->getList();
            require "../view/admin/product.php";
            }
            elseif(isset($_GET['idbra']))
            {
                $image=$_FILES['img']['name'];
                move_uploaded_file($_FILES["img"]["tmp_name"],$img_path.$image);
                $addbra=new Brand($_POST['name_brand'],$_POST['detail'],$image);
                $addbra->insert();
                $brand= new Brand();
                $brands=$brand->getList();
            require "../view/admin/brand.php";
            }
            elseif(isset($_GET['idtyp']))
            {
                $addtyp=new Type($_POST['name_type'],$_POST['gender'],$_POST['detail']);
                $addtyp->insert();
                $type= new Type();
                $types=$type->getList();
            require "../view/admin/type.php";
            }
            else{
                require "../view/admin/header.php";
                require "../view/admin/footer.php";

            }
        break;
        // FOrm sửa
        case 'update':
            $brands=$brand->getList();
            if(isset($_GET['g'])){
                $types=$_GET['g']==0?$type->getTypeByGender(0):$type->getTypeByGender(1);
            }
            else{
                $types='';
            }
            $pro=isset($_GET['id'])? $product->getProductById($_GET['id']):'';
            $bra= isset($_GET['idbrand'])?$brand->getBrandById($_GET['idbrand']):'';
            $typ=isset($_GET['idtype'])?$type->getTypeById($_GET['idtype']):'';
            require "../view/admin/editform.php";
            break;

        case 'updated':
            unlink($img_path_p.$_FILES['img9']['name']);
            $product->update($_GET['id'],$_POST['name_product'],$_POST['price'],$_POST['discount'],$_POST['decription'],$_POST['special'],$_POST['quantity'],$_FILES['img9']['name'],$_POST['type'],$_POST['brand']);
            move_uploaded_file($_FILES['img9']['tmp_name'],$img_path_p.$_FILES['img9']['name']);

            $product= new Product();
            $products=$product->getList();
            $image= new Image();
            $images=$image->getList();
            require "../view/admin/product.php";
            break;

        case 'del':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $product->delete($id);
                $product= new Product();
                $products=$product->getList();
                require "../view/admin/product.php";
                break;
            }
            elseif(isset($_GET['idtype'])){
                $id=$_GET['idtype'];
                $type->delete($id);
                $types= new Type();
                $types=$type->getList();
                require "../view/admin/type.php";
                break;
            }
            elseif(isset($_GET['idbrand'])){
                $id=$_GET['idbrand'];
                $brand->delete($id);
                $brands= new Brand();
                $brands=$brand->getList();
                require "../view/admin/brand.php";
                break;
            }
            else{
                require "../view/admin/home.php";
                break;}
            
        case 'type':
            $types=$type->getList();       
            require "../view/admin/type.php";
            break;
        case 'brand':
            $brands=$brand->getList();       
            require "../view/admin/brand.php";
            break;  
        case 'product':
            $products=$product->getList();         
            require "../view/admin/product.php";
            break;
        
        
        default: 
        require '../view/admin/home.php';
        break;
    }
}
else{
    require "../view/admin/home.php";
}


?>
