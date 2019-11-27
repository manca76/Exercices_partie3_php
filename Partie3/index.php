<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php //EXERCICE 1 et 2
$months = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Sept','Oct','Nov','Déc'];
echo $months[5];
?>
<hr>

<?php  //EXERCICE 3
$months = ['Janvier ','Février ','Mars ','Avril ','Mai ','Juin ','Juillet ','Août ','Sept ','Oct ','Nov ','Déc '];
foreach ($months as $value) {
echo $value;
} 
?>
<hr>

<?php //EXERCICE 4
$departments = [ 02 =>'Aisne', 59 =>'Nord', 60 =>'Oise', 62 =>'Pas de Calais', 80 =>'Somme'];
?>
<hr>

<?php //EXERCICE 5 
$departments = [ 02 =>'Aisne ', 59 =>'Nord ', 60 =>'Oise ', 62 =>'Pas de Calais ', 80 =>'Somme '];
foreach($departments as $value){
echo $value;
}
?>
<hr>

<?php //EXERCICE 6
$departments = [ 02 =>'Aisne', 59 =>'Nord', 60 =>'Oise', 62 =>'Pas de Calais', 80 =>'Somme'];
foreach ($departments as $key => $value)
{ 
echo " Le département $key porte le nom: $value . ";
}
?>

</body>
</html>