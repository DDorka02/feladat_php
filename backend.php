<?php 
        if (isset($_POST['szemetem'])){
            $kivalasztottSzemet = $_POST['szemetem'];
            if ($kivalasztottSzemet == "papír" || $kivalasztottSzemet == "tejesdoboz") {
            echo "Kék színű gyűjtő.";
            }elseif ($kivalasztottSzemet == "bab konzerv" || $kivalasztottSzemet == "sörös doboz" || $kivalasztottSzemet == "nylon csomagolás"){
            echo "sárga színű gyűjtő";
            } else{
            echo "nincs a háznál szelektív";
            }
        }else{
            echo "Még nem érkezett adat az űrlapről";
        }    
    ?>