<?php
    namespace Models;
    class Products{
        private $sku;
        private $name;

        public function __construct()
        {
            $this->sku=0;
            $this->name="";   
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name=$name;
        }
        public function setSku($sku){
            $this->sku=$sku;
        }
        public function getSku(){
            return $this->sku;
        }
    }
?>