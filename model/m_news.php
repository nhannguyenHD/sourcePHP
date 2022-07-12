<?php 
    class News{
        var $newid=null;
        var $title=null;
        var $content=null;

        public function __construct(){
            if(func_get_arg()==5){
                $this->newid=func_get_arg(0);
                $this->title=func_get_arg(1);
                $this->content=func_get_arg(2);
            }
        }
    public function gettitle(){
        return $this->title;
    }
    public function getcontent(){
        return $this->content;
    }
}
    

?>