<?php
	$numero = 7;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	   <title>Taula de multiplicar</title>
	<style>
    td {
        border: 1px solid #000;
        padding: 20px;       
        text-align: center;
        font-size: 18px;    
    }
        .pair {
            background-color: yellow;
        }
        .odd {
            background-color: blue;
		</style>
		
</head>
	
<body>
<h1>Taula de mutliplicar </h1>
<?php
  echo "<table>";
   for ($i = 1; $i <= 10; $i++) {   
	if ($i % 2 == 0) {
    	$tipus = "pair";
		} else {
    	$tipus = "odd";
		}
          echo "<tr class='$tipus'>";
          echo "<td>$numero x $i</td>";
          echo "<td>" . ($numero * $i) . "</td>";
          echo "</tr>";
  }
  echo "</table>";
?>

</body>
</html>
