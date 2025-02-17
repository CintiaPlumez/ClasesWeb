<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
    <link rel="stylesheet" href="StyleImc.css">
</head>

<body>
    <h2>CCALCULADORA </h2>
    <h3>- Indice de Masa Corporal - </h3>
    <h4>Ingrese los datos requeridos</h4>
    <div>
        <p> IMC= Peso (kg)/Talla2 (m2) </p>
        <form action="imc.php" method="get">

            <input type="text" name="nombre" placeholder="Nombre">
            <br>
            <input type="number" name="edad" placeholder="Edad">
            <br>
            <input type="number" name="peso" placeholder="Peso (en kilos)" step="any">
            <br>
            <input type="number" name="altura" placeholder="Altura (en metros)" step="any"> 
            <br>        
            <button type="submit">Calcular</button>
        </form>
    </div>
    <div>
        <h2> Resultado: </h2>
        <?php 
            $nombre=$_GET["nombre"];
            $edad=$_GET["edad"];
            $peso=$_GET["peso"];
            $altura=$_GET["altura"];

            $IMC = $peso/($altura*$altura);
            $IMC= number_format ($IMC,2);


            echo "<h3>".$IMC."</h3>";
            
            if ($IMC <18.5) 
                {echo"<h3> bajo peso </h3>";}
            elseif ($IMC >=18.5 && $IMC <25) 
                {echo "<h3> peso normal </h3>";}
            elseif ($IMC >=25 && $IMC <30) 
                {echo "<h3> sobrepeso </h3>";}
            else
                {echo "<h3> obesidad </h3>";}
 
            // hacer un if donde pueda imprimir el diagnóstico
        ?>
    </div>
</body>
</html>