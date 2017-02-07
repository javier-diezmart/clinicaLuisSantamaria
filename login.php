<?php
include_once "head.php";
?>

<body>

<?php
include_once "header.php";
?>

<div class="container">
    <div class="span4"></div>
    <div class="span4">
    <form action="procesalogin.php" class="form-signin" id="loginform" method="post">
        <h2 class="form-signin-heading">Entrar</h2>
        <label for="username" class="sr-only">Usuario</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Nombre de usuario" required autofocus>
        <label for="password" class="sr-only">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>
        <button class="btn btn-lg btn-primary btn-block" id="enviarbutton" type="submit">Entrar</button>
        <?php
        if(isset($_REQUEST['errorLogin'])):
            ?>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    Error
                </div>
                <div class="panel-body">
                    <p><?php echo "Nombre o contraseña incorrectas"; ?></p>
                </div>
            </div>

        <?php endif; ?>

    </form>
    <!-- /.form-signin -->
    </div>
    <div class="span4"></div>
</div>
<?php
include_once "footer.php";
?>

<script src="js/jquery.pointpoint/jquery.pointpoint.js"></script>
<script src="js/jquery.pointpoint/transform.js"></script>
<script src="js/validator.js"></script>
<script>
    $(document).on("ready", function(){
        var pp = $('#enviarbutton').pointPoint();
        $('#loginform').validator();
    });
</script>
</body>
</html>
