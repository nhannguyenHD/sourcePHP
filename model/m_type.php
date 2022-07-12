<?php 
class Type{
    var $id=null;
    var $name=null;

    public function __construct(){
        if(func_num_args()==3){
            $this->name_type=func_get_arg(0);
            $this->gender=func_get_arg(1);
            $this->detail=func_get_arg(2);
        }
    }
    
    public function getList(){
        $db= new connect();
        $select="SELECT * FROM type where is_del=0 order by id_type desc";
        $result= $db->getList($select);
        return $result;
    }
    public function getTypeById($id){
        $db= new connect();
        $select = " SELECT * FROM type
                    WHERE id_type=$id";
        $result = $db->getInstance($select);
        return $result;
    }

    public function getTypeByGender($gender){
        $db= new connect();
        $select = " SELECT * FROM type
                    WHERE gender=$gender and is_del=0";
        $result = $db->getList($select);
        return $result;
    }

    public function findTypeByNameGender($name_type,$gender){
        $db= new connect();
        $select = ' SELECT id_type FROM type
                    WHERE name_type like "'.$name_type.'" and gender="'.$gender.'"';
        $result = $db->getInstance($select);
        return $result;
    }

    public function insert(){
        $db= new connect();
        $query = "  INSERT INTO type
                    values('','$this->name_type','$this->gender','$this->detail','')";
        $db->execute($query);
    }
    public function delete($id){
        $db= new connect();
        $query = "  UPDATE type SET is_del=1 WHERE id_type=$id";
        $db->execute($query);
    }
}
?>