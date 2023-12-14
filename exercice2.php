<?php
 echo "Veuillez entrer le numéro correspondant à aujourd'hui (1 pour lundi, 2 pour mardi, ...)\n";
$jour = fgets(STDIN);
$jour = intval($jour);
switch ($jour) {
    case "1":
        echo "Nous sommes lundi.";
        break;
    case "2":
        echo "Nous sommes mardi.";
        break;
    case "3":
        echo "Nous sommes mercredi.";
        break;
    case "4":
        echo "Nous sommes jeudi.";
        break;
    case "5":
        echo "Nous sommes vendredi.";
        break;
    case "6":
        echo "Nous sommes samedi.";
        break;
    case "7":
        echo "Nous sommes dimanche.";
        break;
    default:
        echo "La valeur est erronée.";
}