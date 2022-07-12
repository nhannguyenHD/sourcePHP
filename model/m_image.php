<?php 
class Image{
    var $id_image=null;
    var $name_image=null;
    var $id_product=null;
    var $thumbnail=null;

    public function __construct(){
        if(func_num_args()==3){
            $this->name_image=func_get_arg(0);
            $this->thumbnail= func_get_arg(1);
            $this->id_product= func_get_arg(2);
        }
    }
    
    public function getList(){
        $db= new connect();
        $select="SELECT * FROM image where is_del=0 order by id_image desc";
        $result= $db->getList($select);
        return $result;
    }
    
    public function getImageById($id){
        $db= new connect();
        $select = " SELECT * FROM image
                    WHERE id_image=$id";
        $result = $db->getInstance($select);
        return $result;
    }
    

    public function getImageByIdProduct($id){
        $db= new connect();
        $select = " SELECT * FROM image
                    WHERE id_product=$id";
        $result = $db->getList($select);
        return $result;
    }
    public function getImageByIdProductBy1($id){
        $db= new connect();
        $select = " SELECT * FROM image
                    WHERE id_product=$id order by id_image desc limit 0,1";
        $result = $db->getInstance($select);
        return $result;
    }


    public function getImageByGender($gender){
        $db= new connect();
        $select = " SELECT * FROM image
                    WHERE gender=$gender";
        $result = $db->getList($select);
        return $result;
    }
    // public function insert(){
    //     $db= new connect();
    //     $query = "  INSERT INTO image
    //                 values('$this->name')";
    //     $db->execute($query);
    // }
    public function insert(){
        $db= new connect();
        $query = "  INSERT INTO image 
                    values('','$this->name_image','','$this->thumbnail','$this->id_product')";
        $db->execute($query);
    }

}
?>