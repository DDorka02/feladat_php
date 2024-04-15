<?php
    if(isset($_POST['szamol'])){
        $v=$_POST['v'];
        $a=$_POST['a'];
        $w=$a*$v;
        echo '<p>Eredmény:'.$w.'</p>';
    }
    else{

    }
?>