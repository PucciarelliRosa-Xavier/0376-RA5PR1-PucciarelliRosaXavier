<!DOCTYPE html>
<html lang="cat">
<head>
	   <title>Taula de multiplicar</title>
	<style>
        body {
            text-align: center;
            font-family: 'Arial';
            margin: 0;
            padding: 20px;
        }

        h1 {
            margin-bottom: 30px;
            font-size: 32px;
            color: #333;
        }

        form {
            margin-bottom: 30px;
        }

        input[type=number] {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
            width: 60px;
            text-align: center;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
        }

        button:hover {
            background-color: #265a51;
        }

        table {
            border-collapse: collapse;
            width: 400px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 4px;
            overflow: hidden;
        }

        td {
            border: 1px solid #ccc;
            padding: 15px;
            text-align: center;
            font-size: 18px;
        }

        .pair { /*Estils per a numeros parells*/
            background-color: #f2f2f2; 
        }

        .odd {/*Estils per a numeros senars*/
            background-color: #e0f7fa; 
        }

        p {
            font-size: 16px;
            margin-top: 20px;
        }
        .error{
            color:red;
        }
        .info{
            color:#333;
        }
		</style>
		
</head>
	
<body>
<h1>Taula de multiplicar </h1>
	
<form method="POST"> <!--Creacio del formulari per obtenir el numero -->
    <label>Introdueix un número:</label>
    <input type="number" name="numero" required>
    <button type="submit">Generar taula</button>
</form>
	
<?php
if (isset($_POST['numero'])) {//Validar que el formulari tingui algun valor. La taula només es genera si té algun valor
    $numero = $_POST['numero'];
	
	if ($numero < 1 || $numero > 12) {//validar que el numero introduit està entre 1 i 12, si no, mostrar missatge de error.
            echo "<p class='error'>Error: el numero ha de ser entre 1 i 12</p>";}
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
}else{      //Si no s´ha introduit un valor en el form es mostra aquest missatge.
        echo "<p class='info'>Introdueix un número entre 1 i 12 per  veure la seva taula de multiplicar.</p>";}

?>

</body>
</html>
