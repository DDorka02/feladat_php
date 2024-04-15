<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Szelektív gyűjtés</title>
</head>
<body>
    <?php
    $szemet = array("papír", "bab konzerv","tejes doboz", "sörös üveg");
    ?>
    <form action="#" method="get">
        <label for="szemetem">Kidobható szemét</label>
        <select name="szemetem" id="szemetem">
        <?php
        foreach ($szemet as $ertek){
            echo "<option value=\"$ertek\">$ertek</option>";
        }    
        ?>
        </select>
        <br>
        <input type="image" src="kuka.jpg" alt="kukák" name="kuka" id="kuka">
    </form>

    <?php 
        //var_dump($_GET)
        
    ?>

</body>
</html>