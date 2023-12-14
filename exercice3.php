<?php
echo "Préférez-vous manger sucré ou salé?\n";
$mange = trim(fgets(STDIN));
if ($mange == "sucré") {
    echo "Je peux vous proposer 3 aliments. Tapez 1 pour le gâteau, tapez 2 pour le caramel, tapez 3 pour le nougat ou tapez 4 si vous n'aimez aucun des 3.\n";
    $sucre = trim(fgets(STDIN));
    switch ($sucre) {
        case "1":
            echo "Ce gâteau vaut 2 000 calories.";
            break;
        case "2":
            echo "Ce caramel vaut 400 calories.";
            break;
        case "3":
            echo "Ce nougat vaut 300 calories.";
            break;
        case "4":
            echo "Mes excuses, je n'ai rien d'autre en stock.";
            break;
        default:
            echo "La valeur est erronée.";
    }
}
    elseif ($mange == "salé") {
        echo "Je peux vous proposer 3 aliments. Tapez 1 pour le sablé, tapez 2 pour les chips, tapez 3 pour les frites ou tapez 4 si vous n'aimez aucun des 3.\n";
        $sale = trim(fgets(STDIN));
        switch ($sale) {
            case "1":
                echo "Ce sablé vaut 200 calories.";
                break;
            case "2":
                echo "Ces chips valent 600 calories.";
                break;
            case "3":
                echo "Ces frites valent 1 300 calories.";
                break;
            case "4":
                echo "Mes excuses, je n'ai rien d'autre en stock.";
                break;
            default:
                echo "La valeur est erronée.";
        }
}
else {
    echo "La valeur est erronée.";
}