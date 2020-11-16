<?php
function multiply($w,$v){
    return $w * $v;
}
echo "<table>";
echo "<tr><th></th>";
for ($x = 1; $x <= 100; $x++) {
    echo "<th>$x</th>";
}
echo "</tr>";
for ($x = 1; $x <= 100; $x++) {
    echo "<tr>";
    echo "<th>$x</th>";
    for ($y = 1; $y <= 100; $y++) {
        echo "<td>" .multiply($x,$y)." </td>";
    }
    echo "</tr>";
}
echo "</table>";
?>