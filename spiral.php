<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<style>
table{
    border-collapse: collapse;
}
td, th {
  width: 4rem;
  height: 2rem;
  border: 1px solid white;
  text-align: center;
}
tr {
  background: lightgreen ;
  border-color: white;
}
body {
  padding: 1rem;
}
</style>

</html>
<?php
  $x = isset($_GET["x"]) ? $_GET["x"] : 7;
  $y = isset($_GET["y"]) ? $_GET["y"] : 7;
  
$spirala =array(
  array('$x'),
  array('$y'));
echo "<table>";
 $vrijednost = 1;
 $minStupac = 0;
 $minRed = 0;
 $maxStupac = $y - 1;
 $maxRed = $x-1;
while ($vrijednost <= $x * $y) {
    
    for ($i = $maxStupac; $i >= $minStupac; $i--) {
        $spirala[$maxRed][$i] = $vrijednost;
        $vrijednost++;
        if ($vrijednost > $x * $y) {
            break 2;
        }
        
    }
    for ($i = $maxRed -1 ; $i >= $minRed; $i--) {
        $spirala[$i][$minStupac] = $vrijednost;
        $vrijednost++;
        if ($vrijednost > $x * $y) {
            break 2;
        }
    }
    for ($i = $minStupac +1; $i <= $maxStupac; $i++) {
        $spirala[$minRed][$i] = $vrijednost;
        $vrijednost++;
        if ($vrijednost > $x * $y) {
            break 2;
        }
    }
    for ($i = $minRed + 1; $i < $maxRed ; $i++) {
        $spirala[$i][$maxStupac] = $vrijednost;
        $vrijednost++;
        if ($vrijednost > $x * $y) {
            break 2;
        }
    }
    $maxRed--;
    $maxStupac--;
    $minRed++;
    $minStupac++;
}
echo "<tr>";
for ($i = 0; $i < $x; $i++) {
    for ($j = 0; $j < $y; $j++) {
        
         echo "<td>" ,$spirala[$i][$j], "</td>";
        
    }
 
    echo "</tr>";
}
echo "</table>";
