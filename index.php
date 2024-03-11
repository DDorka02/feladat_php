<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feladat</title>
    <link rel="stylesheet" href="style.css">
</head>
</head>
<body>
    <h1>Fenntarthatóság</h1>
    <h2>1. feladat</h2>

    <div class="grid-container">
        <div class="image-container">
            <?php
            $imagePath = "fenntart.png";
            echo '<img src="' . $imagePath . '" alt="Fenntarthatóság">';
            ?>
        </div>
        <div class="text-container">
            <h2>A fenntarthatóság szintjei</h2>
            <ul>
                <?php
                $variableValues = array("Ökológia", "Társadalom", "GAzdaság", "Pénz");
                foreach ($variableValues as $value) {
                    echo '<li>' . $value . '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <h2>2. feladat</h2>
    <div class="masodik_feladat">
        <table>
            
        </table>
    <?php
    
    $fo_sor = array(
    0 => "A megújuló erőforrások fogyasztása",
    1 => "A környezet helyzete",
    2 => "Fenntarthatóság",
);

    $elso_sor = array(
    0 => "több, mint amit a természet újratermelni képes",
    1 => "a környezet pusztul",
    2 => "nem fenntartható",
);
$masodik_sor = array(
    0 => "a természet újratermelő kapacitásával azonos mértékű",
    1 => "környezeti egyensúly",
    2 => "fenntartható, nem változó állapot",
);
$harmadik_sor = array(
    0 => "kevesebb, mint amit a természet újratermelni képes",
    1 => "a környezet megújul",
    2 => "fenntartható fejlődés",
);





// Kiírás példa
echo "Fogyasztás tömb: ";
print_r($fo_sor);

echo "Fenntarthatóság tömb: ";
print_r($elso_sor);

echo "Fenntarthatóság tömb: ";
print_r($masodik_sor);

echo "Fenntarthatóság tömb: ";
print_r($harmadik_sor);


?>

    


</body>
</html>
    
    