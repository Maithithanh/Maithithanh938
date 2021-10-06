<?php 
class MTT938{
    private $PersonId;
    private $PersonName;
     
    public function __construct($PersonId, $PersonName){
        $this -> hoten = $PersonId;
        $this -> maquocgia = $PersonName;
    }
    public function get_PersonId(){
        return $this -> PersonId;
    }
    public function get_PersonName(){
        return $this -> PersonName;
    }
}
?>