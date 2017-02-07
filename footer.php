<?php

?>
<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">
            <div class="span4">

            </div>
            <!--Contact Form-->
            <div class="span4 center"  >
                <h4 id="direccion">Dirección</h4>
                <ul class="unstyled address">
                    <li>
                        <p> </p><i class="icon-home"></i><strong>Dirección:</strong> Calle del Comandante Zorita, 3,1º B-2<br>Madrid 28020
                    </li>
                    <li>
                        <p> </p><i class="icon-envelope"></i>
                        <strong>Email: </strong> clinicazoritaexample@email.com
                    </li>
                    <li>
                        <p> </p><i class="icon-globe"></i>
                        <strong>Website:</strong> clinicazorita.tk
                    </li>
                    <li>
                        <p> </p><i class="icon-phone"></i>
                        <strong>Teléfono:</strong> 91 533 57 33
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->
            <div class="span4">

            </div>

        </div>

    </div>
    <!--/row-fluid-->
    </div>
    <!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2016 ClinicaZorita. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <a class="btn btn-primary btn-large" href="login.php">Login</a>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->


<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function(){
       var current_location = window.location.href.split('/');
        var page;
        page = current_location[current_location.length-1];
        $('.nav li').removeClass('active');
        $('.nav a[href*="' + page + '"]').parent().addClass('active');
    });
</script>