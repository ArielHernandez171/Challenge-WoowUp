<?php
    namespace Models;
    require_once("Purchases.php");
    use DateTime;
    class Costumers{
        private $purchases;
        public function __construct()
        {
            $this->purchases=array();
        }
        public function getPurchase(){
            return $this->purchases;
        }
        public function setPurchases($purchases){
            $this->purchases=$purchases;
        }
        public function comprasProduct($name){
            $aux=array();
            $aux1=new DateTime();
            $avg=new DateTime();
            $is=false;
            $contador=0;
            foreach($this->purchases as $row){//Se confirma el nombre y que este
                if($row->checkName($name)){    
                    array_push($aux,$row->date_diff($aux1));
                    $aux1=$row->getDate();
                    $contador++;
                    $is=true;
                }
            }
            if($contador>1&&$is==true){
                $avg=array_sum($aux)/$contador;
                $aux2=new DateTime($avg);
                date_add($aux2,$aux1);
                require_once("ProximaCompraView.php");
            }
            require_once("Index.php");
        }
    }
?>