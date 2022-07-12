<?php

require "../model/connect.php";
require "../model/m_type.php";
require "../model/m_brand.php";
require "../model/m_product.php";
require "../model/m_image.php";
require "../global.php";

$type = new Type();
$product= new Product();
$brand= new Brand();

if(isset($_GET['page'])){
    $pg=$_GET['page'];
    switch ($pg){
        case 'login':
        require "../view/login.php";
        break;

        case 'about':
        require "../view/about.php";
        break;

        case 'contact':
        require "../view/contact.php";
        break;

        case 'blog':
        require "../view/blog.php";
        break;

        case 'sblog':
        require "../view/sblog.php";
        break;

        case 'cate':
        if(isset($_GET['idtype'])){
        $types = $type->getTypeById($_GET['idtype']);
        $curr_product=$product->getListPageByIdType($_GET['idtype'],0,9);
        require "../view/cate.php";
        }
        break;
        
        case 'product':
        if(isset($_GET['idproduct'])){
            $curr_product = $product->getProductById($_GET['idproduct']);
            extract($curr_product);
            $curr_type=$type->getTypeById($curr_product['id_type']);
            $curr_brand=$brand->getBrandById($curr_product['id_brand']);
            require "../view/product.php";
            break;
        }
        
       

        case 'login':
        require "../view/login.php";
        break;

        case 'register':
        require "../view/register.php";
        break;
        
        case 'checkout':
        require "../view/checkout.php";
        break;
        
        default:
            $curr_product=$product->getProductBySpecial();
            $brands=$brand->getList();           
            require "../view/home.php";
            break;
    }
}
else{
    $curr_product=$product->getProductBySpecial(); 
    $brands=$brand->getList();   
    require "../view/home.php";
}


?>
