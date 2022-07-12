<?php 
class Product{
    var $id_product=null;
    var $name_product=null;
    var $price=null;
    var $discount=null;
    var $detail=null;
    var $special=null;
    var $size=null;
    var $quantity=null;
    var $date_created=null;
    var $image9=null;
    var $id_image=null;
    var $id_type=null;
    var $id_brand=null;
    var $id_color=null;

    public function __construct(){
        $numargs = func_num_args();
        if($numargs==11){
            
            $this->name_product=func_get_arg(0);
            $this->price=func_get_arg(1);
            $this->discount=func_get_arg(2);
            $this->detail=func_get_arg(3);
            $this->special=func_get_arg(4);
            $this->size=func_get_arg(5);
            $this->quantity=func_get_arg(6);          
            $this->image9=func_get_arg(7);
            $this->id_type=func_get_arg(8);
            $this->id_brand=func_get_arg(9);
            $this->id_color=func_get_arg(10);
            $this->date_created=date("Y-m-d");
        }
    }
    public function getList(){
        $db= new connect();
        $select="SELECT *
                FROM product as pr
                LEFT JOIN  brand as br on pr.id_brand=br.id_brand
                LEFT JOIN  type as ty on pr.id_type=ty.id_type
                WHERE pr.is_del=0 order by pr.id_product desc";
        $result=$db->getList($select);
        return $result;

    }
    public function getListPage($from,$to){
        $db= new connect();
        $select="SELECT * FROM product order by id_product desc limit $from,$to";
        $result= $db->getList($select);
        return $result;
    }
    public function getListPageByIdType($id_type,$from,$to){
        $db= new connect();
        $select="SELECT * 
                FROM product as pr
                LEFT JOIN  brand as br on pr.id_brand=br.id_brand
                LEFT JOIN  type as ty on pr.id_type=ty.id_type
                where pr.is_del=0 and pr.id_type=$id_type order by pr.id_product desc limit $from,$to";
        $result= $db->getList($select);
        return $result;
    }
    public function getProductById($id_product){
        $db= new connect();
        $select = " SELECT *,pr.detail as aaa 
                FROM product as pr
                LEFT JOIN  brand as br on pr.id_brand=br.id_brand
                LEFT JOIN  type as ty on pr.id_type=ty.id_type
                WHERE pr.id_product=$id_product";
        $result = $db->getInstance($select);
        return $result;
    }
    
    public function getCount(){
        $db= new connect();
        $select= "  SELECT COUNT(id_product) as sum FROM product";
        $result= $db->getInstance($select);
        return $result;
    }

    public function getCountByIdType($id_type){
        $db= new connect();
        $select= "  SELECT COUNT(id_product) as sum FROM product where is_del=0 and id_type=$id_type";
        $result= $db->getInstance($select);
        return $result;
    }

    static function getProductBySpecial(){
        $db= new connect();
        $select= "  SELECT * 
                FROM product 
                LEFT JOIN  brand on product.id_brand=brand.id_brand
                LEFT JOIN  type on product.id_type=type.id_type
                WHERE product.special=1 and product.is_del=0";
        $result= $db->getList($select);
        return $result;
    }
    static function getProductLatest(){
        $db= new connect();
        $select= "  SELECT * FROM product
                    order by id_product  desc limit 0,1";
        $result= $db->getInstance($select);
        return $result;
    }

    public function insert(){
        $db= new connect();
        $query = "  INSERT INTO product(name_product,price,discount,detail,special,size,quantity,image9,id_type,id_brand,id_color,date_input) 
                    values
                    (   
                        '$this->name_product',
                        '$this->price',
                        '$this->discount',
                        '$this->detail',
                        '$this->special',
                        '$this->size',
                        '$this->quantity',
                        '$this->image9',
                        '$this->id_type',
                        '$this->id_brand',
                        '$this->id_color',
                        '$this->date_created'
                    )";    
        $db->execute($query);
    }
    public function delete($id){
        $db= new connect();
        $query = "  UPDATE product SET is_del=1 WHERE id_product=$id";
        $db->execute($query);
    }
    public function update($id,$name_product,$price,$discount,$detail,$special,$quantity,$image9,$id_type,$id_brand){
        $db= new connect();
        $query = " UPDATE product
                SET 
                name_product='$name_product',
                price='$price',
                discount='$discount',
                detail='$detail',
                special='$special',
                quantity='$quantity',
                image9='$image9',
                id_type='$id_type',
                id_brand='$id_brand'
                WHERE id_product=$id";
        $db->execute($query);
    }
}
?>