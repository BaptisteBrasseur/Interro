Implémentez le jeu du Morpion (Tic Tac Toe). Créez une grille 3 sur 3 et permettezà deux joueurs de
jouer tour à tour. Demandez à chaque joueur de saisir lescoordonnées où il souhaite placer son symbole
(X ou O). Utilisez des bouclesimbriquées pour afficher la grille et vérifier si un joueur a gagné après chaque
coup. Le jeu doit se poursuivre jusqu'à ce qu'il y ait un vainqueur ou un matchnul
<?php
$case1="ù";
$case2="ù";
$case3="ù";
$case4="ù";
$case5="ù";
$case6="ù";
$case7="ù";
$case8="ù";
$case9="ù";
while (true) {
    echo "\ 1 2 3\n";
    echo "1 ",$case1," ",$case2," ",$case3,"\n";
    echo "2 ",$case4," ",$case5," ",$case6,"\n";
    echo "3 ",$case7," ",$case8," ",$case9,"\n";
    if ($case1!="ù" && $case2!="ù" && $case3!="ù" && $case4!="ù" && $case5!="ù" && $case6!="ù" && $case7!="ù" && $case8!="ù" && $case9!="ù") {
        echo "C'est un match nul.";
        break;
    }
    elseif (($case1 == "X" && $case2 == "X" && $case3 == "X") || ($case4 == "X" && $case5 == "X" && $case6 == "X") || ($case7 == "X" && $case8 == "X" && $case9 == "X") || ($case1 == "X" && $case4 == "X" && $case7 == "X") || ($case2 == "X" && $case5 == "X" && $case8 == "X") || ($case3 == "X" && $case6 == "X" && $case9 == "X") || ($case1 == "X" && $case5 == "X" && $case9 == "X") || ($case3 == "X" && $case5 == "X" && $case7 == "X")) {
        echo "Le premier joueur a gagné.";
        break;
    } elseif (($case1 == "0" && $case2 == "0" && $case3 == "0") || ($case4 == "0" && $case5 == "0" && $case6 == "0") || ($case7 == "0" && $case8 == "0" && $case9 == "0") || ($case1 == "0" && $case4 == "0" && $case7 == "0") || ($case2 == "0" && $case5 == "0" && $case8 == "0") || ($case3 == "0" && $case6 == "0" && $case9 == "0") || ($case1 == "0" && $case5 == "0" && $case9 == "0") || ($case3 == "0" && $case5 == "0" && $case7 == "0")) {
        echo "Le second joueur a gagné.";
        break;
    } else {
        for ($i = 1; $i <= 9; $i++) {
            if ($i%2 == 0) {
                echo "C'est au second joueur de jouer, veuillez sélectionner une case libre en entrant son numéro.\n";
                $second = fgets(STDIN);
                $second = intval($second);
            }
            else {
                echo "C'est au premier joueur de jouer, veuillez sélectionner une case libre en entrant son numéro.\n";
            }
            echo "$i\n";
        }
    }
}
