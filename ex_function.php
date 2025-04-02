<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>


    <h2>Fonction simple</h2>

<?php
function direBonjour(){
    echo "Bonjour !";
};


direBonjour();
?><br>
    <h2>Fonction avec paramètre</h2>


 <?php
 function direBonjourA($nom){
    echo 'Bonjour, ' . $nom;
 }
 direBonjourA('Raph');
 ?><br>



    <h2>Fonction avec retour</h2>

 <?php
    function additionner($a,$b){
        return $a+$b;
    }
    echo "l'addition des nombres saisirs est : ". additionner(2,5);
?><br>


    <h2>Fonction intermédiaires</h2>
<?php
function calculerTVA($montant,$tauxTVA=20){
return $montant * ($taux / 100);
}

echo calculerTVA(100);
echo calculerTVA(100, 10);
?>


    <h2>Fonction avec tableau</h2>
<?php
function sommeTableau($nombres) {
    return array_sum($nombres);
}

echo sommeTableau([1, 2, 3, 4]); 
?>


    <h2>Fonction avec vérification</h2>
<?php
function estPair($nombre) {
    return $nombre % 2 === 0;
}

var_dump(estPair(4)); // bool(true)
var_dump(estPair(5)); // bool(false)
?>
</body>
</html>