<?php
    include_once "head.php";
?>

<body>

<?php
    include_once "header.php";
?>

    <section class="no-margin">
        <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.254405310891!2d-3.7008878846031306!3d40.44750587936158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228f943b67e27%3A0x6c97431fa939d331!2sCalle+del+Comandante+Zorita%2C+3%2C+28020+Madrid!5e0!3m2!1ses!2ses!4v1461318084682"></iframe>
    </section>

    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>Ponte en contacto</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" data-toggle="validator" name="contact-form" method='post' action="sendemail.php" role="form">
                  <div class="row-fluid">
                    <div class="span5">
                        <label class="control-label" for="nombre">Nombre</label>
                        <input type="text" class="input-block-level form-control" id='nombre' name='nombre' required="required" placeholder="Tu nombre">
                        <div class="help-block with-errors"></div>
                        <label class="control-label" for="surname">Apellido</label>
                        <input type="text" class="input-block-level form-control" id='surname' name='surname' required="required" placeholder="Tu apellido">
                        <div class="help-block with-errors"></div>
                        <label class="control-label" for="email">Email</label>
                        <input type="email" class="input-block-level form-control" id='email' name='email' required="required" placeholder="Tu dirección de email">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="span7">
                        <label class="control-label" for="message">Mensaje</label>
                        <textarea name='message' id='message' required="required" class="input-block-level" rows="8"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>

                    </div>
                    <button type="submit" class="btn btn-primary btn-large pull-right" id="enviarbutton">Enviar mensaje</button>
                    <p> </p>

                </form>
            </div>

            <div class="span3">
                <h4>Nuestra dirección</h4>
                <p>Para pedir tu cita llama al número de contacto.</p>
                <p>
                    <i class="icon-map-marker pull-left"></i> Calle del Comandante Zorita, 3, 1º B-2<br>
                    Madrid, 28020, España
                </p>
                <p>
                    <i class="icon-envelope"></i> &nbsp;clinicazorita@example.com
                </p>
                <p>
                    <i class="icon-phone"></i> &nbsp;91 533 57 33
                </p>
                <p>
                    <i class="icon-globe"></i> &nbsp;http://www.clinicazorita.tk
                </p>
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
        $('#main-contact-form').validator();
    });
</script>
</body>
</html>
