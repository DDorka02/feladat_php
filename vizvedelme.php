<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    $tetelje ="<h1>Hogyan takarékoskodjunk</h1>";
    echo $tetelje;
    ?>
    <form action="viz.php" method="post">
        <label for="v">v folyadékáram sebesség:</label>
        <input type="number" name="v" id="v" value="1">
        <br>
        <label for="A">A folyadékáram (m2):</label>
        <input type="number" name="A" id="A" value='1'>
        <input type="sumbit" value="Számol" name="szamol">
    </form>
</body>
</html>