<!DOCTYPE html>
<html lang="en">
<head>
	   <title>Taula de multiplicar</title>
	<style>
	h1 {
    margin-bottom: 40px;
	}
	body {
        text-align: center; 
    }
 	table {
        border-collapse: collapse;
        width: 400px;
        margin: 0 auto;
    }
    td {
        border: 1px solid #000;
        padding: 20px;       
        text-align: center;
        font-size: 18px;    
    }
        .pair { /*Estils per a numeros parells*/
            background-color: yellow;
        }
        .odd { /*Estils per a numeros imparells*/
            background-color: blue; }
		</style>
		
</head>
	
<body>
<h1>Taula de mutliplicar </h1>
	
<form method="POST"> <!--Creacio del formulari per obtenir el numero -->
    <label>Introdueix un nmero:</label>
    <input type="number" name="numero" required>
    <button type="submit">Generar taula</button>
</form>
	
<?php
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
	
	if ($numero < 1 || $numero > 12) {
    	echo "<p style='color:red;'>Error: el numero ha de ser entre 1 i 12</p>";}
	else {
 	 	echo "<table>";
   		for ($i = 1; $i <= 10; $i++) {    //Bucle for per iterar els numeros de l'1 al 10, per calular la multiplicacio de numero*i i mostrar la multiplicació i el resultat
								 
			if ($i % 2 == 0) { //Comprovar si el numeor es parell o senar per aplicar-li una clase per aplicar estils
    			$tipus = "pair";}
			else {
    			$tipus = "odd";}
									  
          echo "<tr class='$tipus'>";  //Mostrar la fila amb la seva clase corresponent (odd o pair)
          echo "<td>$numero x $i</td>"; //Mostrar la primera columna amb l'operació. per exemple: 4x7
          echo "<td>" . ($numero * $i) . "</td>"; //Mostrar la segona columna amb el resultat. Per exemple: 28
          echo "</tr>"; 
  }
  		echo "</table>";
	}
}else{     
		echo "<p>Introdueix un numero entre 1 i 12 per  veure la taula de multiplicar.</p>";}

?>

</body>
</html>
