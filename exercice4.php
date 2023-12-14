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
$compte=1;
while ($case1=="ù" || $case2=="ù" || $case3 ="ù" || $case4=="ù" || $case5=="ù" || $case6=="ù" || $case7=="ù" || $case8=="ù" || $case9=="ù") {
    if ($case1=="ù" || $case2=="ù" || $case3 ="ù" || $case4=="ù" || $case5=="ù" || $case6=="ù" || $case7=="ù" || $case8=="ù" || $case9=="ù") {
            if ($compte%2 == 0) {
                $compte++;
                echo "C'est au second joueur de jouer, veuillez sélectionner une case libre en entrant un nombre de 1 à 9\n";
                echo "Tapez 1 pour colonne 1,rangée 1; 2 pour colonne 2,rangée 1; 3 pour colonne 3,rangée 1; 4 pour colonne 1,rangée 2; ...\n";
                $second = fgets(STDIN);
                $second = intval($second);
                    if ($second==1) {
                        $case1=0;
                    }
                    elseif ($second==2) {
                        $case2=0;
                    }
                    elseif ($second==3) {
                        $case3=0;
                    }
                    elseif ($second==4) {
                        $case4=0;
                    }
                    elseif ($second==5) {
                        $case5=0;
                    }
                    elseif ($second==6) {
                        $case6=0;
                    }
                    elseif ($second==7) {
                        $case7=0;
                    }
                    elseif ($second==8) {
                        $case8=0;
                    }
                    elseif ($second==9) {
                        $case9=0;
                    }
                else {
                    echo "La valeur est erronée, veuillez réessayer.";
                }
                echo "\ 1 2 3\n";
                echo "1 ",$case1," ",$case2," ",$case3,"\n";
                echo "2 ",$case4," ",$case5," ",$case6,"\n";
                echo "3 ",$case7," ",$case8," ",$case9,"\n";
                if (($case1 == "0" && $case2 == "0" && $case3 == "0") || ($case4 == "0" && $case5 == "0" && $case6 == "0") || ($case7 == "0" && $case8 == "0" && $case9 == "0") || ($case1 == "0" && $case4 == "0" && $case7 == "0") || ($case2 == "0" && $case5 == "0" && $case8 == "0") || ($case3 == "0" && $case6 == "0" && $case9 == "0") || ($case1 == "0" && $case5 == "0" && $case9 == "0") || ($case3 == "0" && $case5 == "0" && $case7 == "0")) {
                    echo "Le second joueur a gagné.";
                    break;
                }
            }
            else {
                $compte++;
                echo "C'est au premier joueur de jouer, veuillez sélectionner une case libre en entrant un nombre de 1 à 9\n";
                echo "Tapez 1 pour colonne 1,rangée 1; 2 pour colonne 2,rangée 1; 3 pour colonne 3,rangée 1; 4 pour colonne 1,rangée 2; ...\n";
                $premier = fgets(STDIN);
                $premier = intval($premier);
                    if ($premier==1) {
                        $case1="X";
                    }
                    elseif ($premier==2) {
                        $case2="X";
                    }
                    elseif ($premier==3) {
                        $case3="X";
                    }
                    elseif ($premier==4) {
                        $case4="X";
                    }
                    elseif ($premier==5) {
                        $case5="X";
                    }
                    elseif ($premier==6) {
                        $case6="X";
                    }
                    elseif ($premier==7) {
                        $case7="X";
                    }
                    elseif ($premier==8) {
                        $case8="X";
                    }
                    elseif ($premier==9) {
                        $case9="X";
                    }
                else {
                    echo "La valeur est erronée, veuillez réessayer.";
                }
                echo "\ 1 2 3\n";
                echo "1 ",$case1," ",$case2," ",$case3,"\n";
                echo "2 ",$case4," ",$case5," ",$case6,"\n";
                echo "3 ",$case7," ",$case8," ",$case9,"\n";
                if (($case1 == "X" && $case2 == "X" && $case3 == "X") || ($case4 == "X" && $case5 == "X" && $case6 == "X") || ($case7 == "X" && $case8 == "X" && $case9 == "X") || ($case1 == "X" && $case4 == "X" && $case7 == "X") || ($case2 == "X" && $case5 == "X" && $case8 == "X") || ($case3 == "X" && $case6 == "X" && $case9 == "X") || ($case1 == "X" && $case5 == "X" && $case9 == "X") || ($case3 == "X" && $case5 == "X" && $case7 == "X")) {
                    echo "Le premier joueur a gagné.";
                    break;
            }
        }
    }
    else {
        echo "C'est un match nul.";
        break;
    }
}
