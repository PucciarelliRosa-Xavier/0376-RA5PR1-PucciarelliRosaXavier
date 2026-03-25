<?php
$numero = 7;

echo "<table>";
 for ($i = 1; $i <= 10; $i++) {        
        echo "<tr>";
        echo "<td>$numero x $i</td>";
        echo "<td>" . ($numero * $i) . "</td>";
        echo "</tr>";
}
echo "</table>";
?>
