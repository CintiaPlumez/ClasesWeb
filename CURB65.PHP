<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURB65</title>
    <link rel="stylesheet" href="gloopstyle.css">
</head>
<body>
    <H1>CALCULADORA CURB65</H1>
    <H3>permite evaluar la gravedad de la neumonía adquirida en la comunidad.</H3>
    <h2>Ingrese la Urea</h2> 
       
    <form action="CURB65.php" method="get">
        <label for="confusion">¿SE ENCUENTRA CONFUSO?</label>
        <select name="confusion" id="confusion">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select>
        <br>
        <input type="number" name="urea" placeholder="ingrese Urea">
        <label for="fr">la FR es mayor a 30?</label>
        <select name="fr" id="fr">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select>
        <br>
        <label for="tas">la TAS es menor a 90?</label>
        <select name="tas" id="tas">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select>
        <br>
        <label for="tad">la TAD es menor a 60?</label>
        <select name="tad" id="tad">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select>
        <br>
        
        <label for="EDAD">edad mayor a 65 años?</label>
        <select name="edad" id="edad">
            <option value="1">SI</option>
            <option value="0">NO</option>
        </select>
        <input type="submit" value="valor del CURB65"> 
    </>
    <?php 

        $confusion = $_GET["confusion"];
        if (isset($_GET['urea']) && isset($_GET [´confusion´]) ) {
             $urea = $_GET["urea"];
        }
        $bun = $urea*2.8;
        $fr= $_GET["fr"];
        $tas = $_GET["tas"];
        $tad= $_GET["tad"];
        $edad = $_GET["edad"];
        if ($tad== 1 || $tas == 1) 
            {$ta = 1;}
        else
             {$ta = 0;}
    
        $curb65 = $confusion + $bun + $fr + $ta + $edad;
   
        echo "<h2>El valor del CURB65 es ".$curb65."</h2>";
        if ($curb65 == 0 || $curb65 == 1)
            {echo "<h2>El paciente puede ser tratado en su domicilio</h2>";}
        elseif ($curb65 == 2)
            {echo "<h2>El paciente debe ser hospitalizado</h2>";}
        elseif ($curb65 >= 3 && $curb65 <= 5)
            {echo "<h2>Hospitalizar y considerar ingreso en UCI</h2>";}
    ?>
 </body>

