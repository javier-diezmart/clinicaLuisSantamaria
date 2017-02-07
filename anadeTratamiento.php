<?php
include_once "head.php";
?>

<body>

<?php
require_once 'conectar.php';
include_once "header.php";
?>

<div>

    <h1>Resultado Añadir Tratamiento</h1>
    <?php


    $titulo = $_REQUEST['titulo'];
    $precio = $_REQUEST['precio'];
    $descripcion = $_REQUEST['descripcion'];

    $validado = (!empty($titulo) && !empty($precio)  && !empty($descripcion));
    if (!$validado) {
        $error = "Los campos titulo $titulo, precio $precio y descripción $descripcion son obligatorios";
        header("Location: anadeTratamientoForm.php?error=$error") or die("Error al redirigir a formulario con error $error");;
    }


    // debería haber un fichero php con funciones para BBDD

    $sql_insert = "INSERT INTO `tratamientos` (titulo, precio, descripcion) " . "
			      VALUES (?, ?, ?)";
    try {
        $sentencia = $db->prepare($sql_insert);
        $sentencia->execute(array($titulo, $precio, $descripcion));
    }catch(PDOException $error) {
        die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
    }

    // redirige a listado de deptos
    header("Location: services.php") or die("Error al redirigir a listado");;


    ?>

</div>





<?php
include_once "footer.php";
?>

</body>
</html>
