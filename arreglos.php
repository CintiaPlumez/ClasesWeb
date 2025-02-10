<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos asociativos</title>
   
</head>
<body>
    <?php
        $profesiones = array(
            'maria' => 'veterinaria',
            'alberto' => 'Plomero',
            'paola' => 'estudiante',
            'marcos' => 'chofer'
        );
    
    echo "La profesion de Maria es: " . $profesiones['maria']; 
    echo "</br>";
    echo "la profesion de paola es: ". $profesiones['paola'];
    echo "</br>";
    echo "Marcos es: ". $profesiones['marcos'];
    echo "</br>";


    $talla = array(
        'joaquin' => 1.78,
        'analia' => 1.56,
        'mariela' => 1.59,
        'victor' => 1.83
    );
    foreach($talla as $clave => $valor){
        echo "La talla de $clave es: $valor";
        echo "</br>";
    }

    echo "</h2> arreglos indexados </h2>";
    echo "</br>";


  
    ?>
</body>
</html>