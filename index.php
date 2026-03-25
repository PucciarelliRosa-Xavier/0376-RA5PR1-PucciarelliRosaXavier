<?php
	$numero = 7;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	   <title>Taula de multiplicar</title>
	   <style></style>
</head>

<body>
<h1>Taula de mutliplicar </h1>
<?php
  echo "<table>";
   for ($i = 1; $i <= 10; $i++) {        
          echo "<tr>";
          echo "<td>$numero x $i</td>";
          echo "<td>" . ($numero * $i) . "</td>";
          echo "</tr>";
  }
  echo "</table>";
?>
</body>
</html>
