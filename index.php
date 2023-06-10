<!DOCTYPE html>
<html>
<head>
    <title>Listado de Alumnos</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Listado de Alumnos</h1>
    
    <?php
    // Arreglo con los datos de los alumnos
    $alumnos = array(
        array('carnet' => '023', 'grado' => '11', 'telefono' => '23457618', 'nombre' => 'luis lopez'),
        array('carnet' => '002', 'grado' => '10', 'telefono' => '98672341', 'nombre' => 'ana perez'),
        array('carnet' => '235', 'grado' => '12', 'telefono' => '67980298', 'nombre' => 'luis guzman'),
        array('carnet' => '674', 'grado' => '9', 'telefono' => '45632718', 'nombre' => 'pedro lopez'),
        array('carnet' => '9875', 'grado' => '11', 'telefono' => '23451287', 'nombre' => 'ana colin')
    );
    ?>
    
    <table>
        <tr>
            <th>Carnet</th>
            <th>Grado</th>
            <th>Teléfono</th>
            <th>Nombre</th>
        </tr>
        <?php
        // Mostrar los alumnos en la tabla
        foreach ($alumnos as $alumno) {
            echo '<tr>';
            echo '<td>' . $alumno['carnet'] . '</td>';
            echo '<td>' . $alumno['grado'] . '</td>';
            echo '<td>' . $alumno['telefono'] . '</td>';
            echo '<td>' . $alumno['nombre'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>

       

