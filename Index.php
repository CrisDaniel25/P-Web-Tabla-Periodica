<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Periodica</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<?php 
$Simbolo = array("H","He");
$Simbolo2 = array("Li","Be","B","C","N","O","F","Ne");
$Simbolo3 = array("Na","Mg","Al","Si","P","S","Cl","Ar");
$Simbolo4 = array("K","Ca","Sc","Ti","V","Cr","Mn","Fe","Co","Ni","Cu","Zn","Ga","Ge","As","Se","Br","Kr");
$Simbolo5 = array("Rb","Sr","Y","Zr","Nb","Mo","Tc","Ru","Rh","Pd","Ag","Cd","In","Sn","Sb","Te","I","Xe");
$Simbolo6 = array("Cs","Ba","La-Lu","Hf","Ta","W","Re","Os","Ir","Pt","Au","Hg","Ti","Pb","Bi","Po","At","Rn");
$Simbolo7 = array("Fr","Ra","Ac-Lr","Rf","Db","Sg","Bh","Hs","Mt","Ds","Rg","Cn","Nh","Fl","Mc","Lv","Ts","Og");                
$Simbolo8 = array("La","Ce","Pr","Nd","Pm","Sm","Eu","Gd","Tb","Dy","Ho","Er","Tm","Yb","Lu");
$Simbolo9 = array("Ac","Th","Pa","U","Np","Pu","Am","Cm","Bk","Cf","Es","Fm","Md","No","Lr");?>

<table>
<?php
for($x = 0; $x < 1; $x++)
{
    echo "<tr>";                        
    echo "<td>";
    echo "". $Simbolo[$x] ."<br/>";
    echo "</td>";
    echo "<td colspan='16' style='width: 1.5cm;
    height: 1.5cm;'>";
    echo "</td>";
    for($x = 1; $x < 2; $x++)
    {
    echo "<td>";
    echo "". $Simbolo[$x] ."<br/>";
    echo "</td>";
    echo "</tr>";
    }
}

for($y = 0; $y < 1; $y++){
    echo "<tr>";                        
    echo "<td>";
    echo "". $Simbolo2[$y] ."<br/>";
    echo "</td>";
    for($y = 1; $y < 2; $y++)
    {
    echo "<td>";
    echo "". $Simbolo2[$y] ."<br/>";
    echo "</td>";
    echo "<td colspan='10' style='width: 1.5cm;
    height: 1.5cm;'>";
    echo "</td>";
    for($y = 2; $y < 3; $y++)
    {
    echo "<td>";
    echo "". $Simbolo2[$y] ."<br/>";
    echo "</td>";
    for($y = 3; $y < 4; $y++)
    {
    echo "<td>";
    echo "". $Simbolo2[$y] ."<br/>";
    echo "</td>";
    for($y = 4; $y < 5; $y++)
    {
    echo "<td>";
    echo "". $Simbolo2[$y] ."<br/>";
    echo "</td>";
    for($y = 5; $y < 6; $y++)
    {
    echo "<td>";
    echo "". $Simbolo2[$y] ."<br/>";
    echo "</td>";
    for($y = 6; $y < 7; $y++)
    {
    echo "<td>";
    echo "". $Simbolo2[$y] ."<br/>";
    echo "</td>";
    for($y = 7; $y < 8; $y++)
    {
    echo "<td>";
    echo "". $Simbolo2[$y] ."<br/>";
    echo "</td>";
    echo "</tr>";
    }
    }
    }
    }
    }
    }
    }
}

for($y = 0; $y < 1; $y++){
    echo "<tr>";                        
    echo "<td>";
    echo "". $Simbolo3[$y] ."<br/>";
    echo "</td>";
    for($y = 1; $y < 2; $y++)
    {
    echo "<td>";
    echo "". $Simbolo3[$y] ."<br/>";
    echo "</td>";
    echo "<td colspan='10' style='width: 1.5cm;
    height: 1.5cm;'>";
    echo "</td>";
    for($y = 2; $y < 3; $y++)
    {
    echo "<td>";
    echo "". $Simbolo3[$y] ."<br/>";
    echo "</td>";
    for($y = 3; $y < 4; $y++)
    {
    echo "<td>";
    echo "". $Simbolo3[$y] ."<br/>";
    echo "</td>";
    for($y = 4; $y < 5; $y++)
    {
    echo "<td>";
    echo "". $Simbolo3[$y] ."<br/>";
    echo "</td>";
    for($y = 5; $y < 6; $y++)
    {
    echo "<td>";
    echo "". $Simbolo3[$y] ."<br/>";
    echo "</td>";
    for($y = 6; $y < 7; $y++)
    {
    echo "<td>";
    echo "". $Simbolo3[$y] ."<br/>";
    echo "</td>";
    for($y = 7; $y < 8; $y++)
    {
    echo "<td>";
    echo "". $Simbolo3[$y] ."<br/>";
    echo "</td>";
    echo "</tr>";
    }
    }
    }
    }
    }
    }
    }
}

for($y = 0; $y < 1; $y++){
    echo "<tr>";                        
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 1; $y < 2; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 2; $y < 3; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 3; $y < 4; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 4; $y < 5; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 5; $y < 6; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 6; $y < 7; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 7; $y < 8; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 8; $y < 9; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 9; $y < 10; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 10; $y < 11; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 11; $y < 12; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 12; $y < 13; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 13; $y < 14; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 14; $y < 15; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 15; $y < 16; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 16; $y < 17; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    for($y = 17; $y < 18; $y++)
    {
    echo "<td>";
    echo "". $Simbolo4[$y] ."<br/>";
    echo "</td>";
    echo "</tr>";
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
}

for($y = 0; $y < 1; $y++){
    echo "<tr>";                        
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 1; $y < 2; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 2; $y < 3; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 3; $y < 4; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 4; $y < 5; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 5; $y < 6; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 6; $y < 7; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 7; $y < 8; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 8; $y < 9; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 9; $y < 10; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 10; $y < 11; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 11; $y < 12; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 12; $y < 13; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 13; $y < 14; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 14; $y < 15; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 15; $y < 16; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 16; $y < 17; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    for($y = 17; $y < 18; $y++)
    {
    echo "<td>";
    echo "". $Simbolo5[$y] ."<br/>";
    echo "</td>";
    echo "</tr>";
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
}

for($y = 0; $y < 1; $y++){
    echo "<tr>";                        
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 1; $y < 2; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 2; $y < 3; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 3; $y < 4; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 4; $y < 5; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 5; $y < 6; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 6; $y < 7; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 7; $y < 8; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 8; $y < 9; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 9; $y < 10; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 10; $y < 11; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 11; $y < 12; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 12; $y < 13; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 13; $y < 14; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 14; $y < 15; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 15; $y < 16; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 16; $y < 17; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    for($y = 17; $y < 18; $y++)
    {
    echo "<td>";
    echo "". $Simbolo6[$y] ."<br/>";
    echo "</td>";
    echo "</tr>";
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
}


for($y = 0; $y < 1; $y++){
    echo "<tr>";                        
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 1; $y < 2; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 2; $y < 3; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 3; $y < 4; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 4; $y < 5; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 5; $y < 6; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 6; $y < 7; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 7; $y < 8; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 8; $y < 9; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 9; $y < 10; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 10; $y < 11; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 11; $y < 12; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 12; $y < 13; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 13; $y < 14; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 14; $y < 15; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 15; $y < 16; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 16; $y < 17; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";
    echo "</td>";
    for($y = 17; $y < 18; $y++)
    {
    echo "<td>";
    echo "". $Simbolo7[$y] ."<br/>";             
    echo "</td>";
    echo "</tr>";
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
}
?>
</table>
<table id="tabla"> 
<?php
for($y = 0; $y < 1; $y++){
    echo "<tr>";                        
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 1; $y < 2; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 2; $y < 3; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 3; $y < 4; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 4; $y < 5; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 5; $y < 6; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 6; $y < 7; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 7; $y < 8; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 8; $y < 9; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 9; $y < 10; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 10; $y < 11; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 11; $y < 12; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 12; $y < 13; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 13; $y < 14; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    for($y = 14; $y < 15; $y++)
    {
    echo "<td>";
    echo "". $Simbolo8[$y] ."<br/>";
    echo "</td>";
    echo "</tr>";
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
}

for($y = 0; $y < 1; $y++){
    echo "<tr>";                        
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 1; $y < 2; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 2; $y < 3; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 3; $y < 4; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 4; $y < 5; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 5; $y < 6; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 6; $y < 7; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 7; $y < 8; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 8; $y < 9; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 9; $y < 10; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 10; $y < 11; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 11; $y < 12; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 12; $y < 13; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 13; $y < 14; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    for($y = 14; $y < 15; $y++)
    {
    echo "<td>";
    echo "". $Simbolo9[$y] ."<br/>";
    echo "</td>";
    echo "</tr>";
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
    }
}
?> 
</table>
</body>
</html>