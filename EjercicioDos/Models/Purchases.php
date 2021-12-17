<?php
    namespace Models;
    require_once("Productos.php");
    class Purchases{
        private $number;
        private $date;
        private $Products=array();
        public function __construct()
        {
            $this->number=0;
            $this->date=("y-m-d");
        }
        public function setNubmer($number){
            $this->number=$number;
        }
        public function getNumber(){
            return $this->number;
        }
        public function getDate(){
            return $this->date;
        }
        public function setDate($date){
            $this->date=$date;
        }
        public function setProducts($Products){
            $this->Products=$Products;
        }
        public function getProducts(){
            return $this->Products;
        }
        public function checkName($name){
            $is=false;
            foreach($this->Products as $row2){
                if($row2->getName()==$name){
                    $is=true;
                }
            }
            return $is;
        }
    }
    
?>