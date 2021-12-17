<?php
    namespace ejercicioDos;
    require_once("Models/Costumers.php");
    use Models\Costumers as Costumers;

    class JsonLector{
        private $fileName;
        private $purchasesArray=array();
        public function __construct(){
            $this->fileName="purchases-v2.json";
        }
        public function getAll(){
            $this->purchasesArray=array();
            if(file_exists($this->fileName)){
                $jsonContent=file_get_contents($this->fileName);
                $arrayToDecode=($jsonContent)?json_decode($jsonContent,true):array();
                foreach($arrayToDecode as $row){
                    $purchases=new Costumers();
                    $purchases->setPurchases($row["purchases"]);
                    array_push($this->purchasesArray,$purchases);
                }
            }
            return $this->purchasesArray;
        }
    }
?>