<?php
    require_once("Models/Costumers.php");
    require_once("JsonLector.php");
    require_once("Models/Productos.php");
    require_once("Models/Purchases.php");
    use Models\Costumers as Costumers;
    use ejercicioDos\JsonLector as JsonLector;
    use Models\Purchases;

    $costumer=new Costumers();
    $Pname=$_POST["product"];
    $Pnumber=$_POST["number"];
    $jsonLector=new JsonLector();
    $aux=array();
    $aux=$jsonLector->getAll();
    foreach($aux as $row){
        $x=array();
        $x=$row->getPurchase();
        foreach($x as $aux3){
            $aux2=new Purchases();
            if($aux2->getNumber()==$Pnumber){    
                $aux3->comprasProduct($Pname);//aparte del chequeo del producto, deberia confirmar el cliente, pero en el json no tiene datos propios mas que sus compras
            }
        }
        
    }
?>