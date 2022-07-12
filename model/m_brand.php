<?php 
class Brand{
    var $id=null;
    var $name_brand=null;
    var $detail=null;
    var $image=null;

    public function __construct(){
        if(func_num_args()==3){
            $this->name_brand=func_get_arg(0);
            $this->detail=func_get_arg(1);
            $this->image=func_get_arg(2);
        }
    }
    
    public function getList(){
        $db= new connect();
        $select="SELECT * FROM brand where is_del=0 order by id_brand desc";
        $result= $db->getList($select);
        return $result;
    }
    public function getbrandById($id){
        $db= new connect();
        $select = " SELECT * FROM brand
                    WHERE id_brand=$id";
        $result = $db->getInstance($select);
        return $result;
    }

    public function getbrandByGender($gender){
        $db= new connect();
        $select = " SELECT * FROM brand
                    WHERE gender=$gender";
        $result = $db->getList($select);
        return $result;
    }
    public function findBrandByName($name_brand){
        $db= new connect();
        $select = " SELECT * FROM brand
                    WHERE name_brand like $name_brand ";
        $result = $db->getList($select);
        return $result;
    }
    public function insert(){
        $db= new connect();
        $query = "  INSERT INTO brand 
                    values(
                    '',
                    '$this->name_brand',
                    '$this->detail',
                    '$this->image','')";
        $db->execute($query);
    }
    public function delete($id){
        $db= new connect();
        $query = "  UPDATE brand SET is_del=1 WHERE id_brand=$id";
        $db->execute($query);
    }
}
?>