<?php
    $totalEscaleras=$_POST["totalEscaleras"];
    $resultadoPrimero=3;
    $resultadoSegundo=2;
    $result=0;   
    $aux=0;
    $contador=3;
    if($totalEscaleras>3){
        while($contador<$totalEscaleras){//Se utiliza la repeticion de fibonacci para conocer el total de opciones posibles
            $aux=$resultadoPrimero;
            $resultadoPrimero=$resultadoPrimero+$resultadoSegundo;
            $resultadoSegundo=$aux;
            $contador++;
        }
        $result=$resultadoPrimero;
    }elseIf($totalEscaleras<1){
        require_once(__DIR__."Index.php");
    }
    else{
    $result=$totalEscaleras;
}
?>
<tbody>
    <div>
        El total de posibilidades es de:
        <?php echo $result?>
    </div>    
</tbody