<?php
$valor1 = 5 ;
$valor2 = 10 ;
<?php
$ud_man = 5 ;
$ud_per = 6 ;
$ud_pla = 10 ;

$pr_man = 1 ;
$pr_per = 0.5 ;
$pr_pla = 0.7 ;

echo "Se ha gastado un total de: " . (($ud_man * $pr_man) + ($ud_per * $pr_per) + ($ud_pla * $pr_pla)) . " €" ;
echo "<br>" ;

echo "Ha comprado un total de: " . ($ud_man + $ud_per + $ud_pla) ." unidades";
echo "<br>" ;

echo "La media de las cantidades son: " . (($ud_man + $ud_per + $ud_pla)/3) ." unidades";

?>

