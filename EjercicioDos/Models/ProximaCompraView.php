<?php
    if($contador>1){
        ?>
        <div>
        <p>La proxima compra se dara el</p>
        </div>
        <?php
        echo($aux2);
    }else{
        ?>
        <div>
            <p>No se pudo calcular proxima fecha</p>
        </div>
        <?php
    }
?>