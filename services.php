<?php
include_once "head.php";
?>

<body>
<section id="contact-page" class="container main">
<?php
require_once 'conectar.php';
include_once "header.php";
$sql = "SELECT titulo, precio, descripcion FROM tratamientos";
echo "<h1>Tratamientos</h1>";
foreach ($db->query($sql) as $fila) {


?>

    <div class="row-fluid">
                <div class="span4">
                    <div class="center">
                        <h2><?php echo $fila['titulo'] ; ?></h2>
                        <h4><?php echo $fila['precio'] ; ?> €</h4>
                        <p><?php echo $fila['descripcion'] ; ?></p>
                    </div>
                </div>
    </div>


<?php
}
?>
</section>
<?php
include_once "footer.php";
?>
</body>
</html>
