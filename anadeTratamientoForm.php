<?php
require_once('restringido.php');
?>
<?php
include_once "head.php";
?>

<body>

<?php
include_once "header.php";
if (!empty($_REQUEST['error'])) {
    echo "<p class='error'>" . $_REQUEST['error'] . "</p>";
}
?>


<section id="contact-page" class="container main">
    <div class="row-fluid">

        <div class="span8">
            <h4>Añade un tratamiento</h4>

            <form id="main-tratamiento-form" class="tratamiento-form" data-toggle="validator" name="tratamiento-form" method='post' action="anadeTratamiento.php" role="form">
                <div class="row-fluid">
                    <div class="span5">
                        <label class="control-label" for="titulo">Título</label>
                        <input type="text" class="input-block-level form-control" id='titulo' name='titulo' required="required" placeholder="Titulo del tratamiento">
                        <div class="help-block with-errors"></div>
                        <label class="control-label" for="precio">Precio</label>
                        <input type="number" class="input-block-level form-control" id='precio' name='precio' required="required" placeholder="Precio del tratamiento">
                        <div class="help-block with-errors"></div>

                    </div>
                    <div class="span7">
                        <label class="control-label" for="descripcion">Descripción</label>
                        <textarea name='descripcion' id='descripcion' required="required" class="input-block-level" rows="8"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right" id="enviarbutton">Añadir tratamiento</button>
                <p> </p>

            </form>
        </div>

    </div>

</section>



<?php
include_once "footer.php";
?>

<script src="js/jquery.pointpoint/jquery.pointpoint.js"></script>
<script src="js/jquery.pointpoint/transform.js"></script>
<script src="js/validator.js"></script>
<script>
    $(document).on("ready", function(){
        var pp = $('#enviarbutton').pointPoint();
        $('#main-tratamiento-form').validator();
    });
</script>
</body>
</html>
