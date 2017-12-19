<?php
    include("head.html");
?>
    <body data-smooth-scroll-offset="77">
        <?php
            include("nav.html");
        ?>
        <div class="main-container">
            <section class="cover cover-features imagebg text-left section--ken-burns space--md" data-overlay="2">
                <div class="background-image-holder"> <img alt="background" src="img/Principal.jpg"> </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-md-12 padding-left-title-typed">
                            <div class="typed-headline">
                                <i>
                                <span class="h1 inline-block color--primary">Vive experiencias</span>
                                <span class="h1 inline-block typed-text typed-text--cursor color--white" data-typed-strings=" únicas, inolvidables, de esquiar, de viajar"></span>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <a id="cover-text-2-parallax" class="in-page-link"></a>
            <section class="cover imagebg image--light text-center height-70" data-overlay="4">

                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-8 col-md-7">
                            <h1><b><i>Skirience</i></b></h1>
                            <p class="lead">Somos una joven agencia con ganas de ayudarte <br>a que tengas una experiencia inolvidable, <br>esquiando en los mejores resorts del mundo <br>sin la preocupación de tener que organizar <br>tú solo el viaje</p>
                            <a class="btn btn--primary type--uppercase" href="quienessomos.php"> <span class="btn__text">Leer más </span> </a>
                        </div>
                    </div>
                </div>
            </section>
            <a id="cover-text-4-boton-form" class="in-page-link"></a>
            <section class="imageblock switchable height-70 bg--ski">
                <div class="imageblock__content col-md-6 col-sm-4 pos-right">
                    <div class="background-image-holder"> <img alt="image" src="img/Block.jpg"> </div>
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-md-5 col-sm-7">
                            <h3><b><i>Conocer tus deseos para poder diseñar un viaje a medida es fundamental en SKIRIENCE</i></b></h3>
                            <p class="lead">Por eso te pedimos que nos ayudes con toda la información que puedas, será de gran<br>importancia para la planificación de tu experiencia.</p>
                            <a class="btn btn--primary type--uppercase" href="form.php"> <span class="btn__text">empezar viaje </span> </a>
                        </div>
                    </div>
                </div>
            </section>
            <a id="form-with-text-1-contacto" class="in-page-link"></a>
            <section class="switchable bg--primary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <p class="lead"> Email: info@skirience.com<br></p>
                            <p class="lead">No olvides en consultarnos cualquier duda que tengas, nos esforzamos por responder a todas las consultas en el menor tiempo posible. <br></p>
                            <p class="lead">Equipo de SKIRIENCE</p>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="row">
                                <form class="form-email" data-success="Gracias por su consulta, nos pondremos en contacto en breve." data-error="Por favor complete todos los campos correctamente.">
                                    <input type="hidden" name="consulta" value="consulta">
                                    <div class="col-sm-6 col-xs-12"> <label>NOMBRE:</label> <input name="name" class="validate-required" placeholder="Su nombre.." type="text"> </div>
                                    <div class="col-sm-6 col-xs-12"> <label>EMAIL:</label> <input name="email" class="validate-required validate-email" placeholder="Su email.." type="email"> </div>
                                    <div class="col-sm-12 col-xs-12"> <label>MENSAJE:</label> <textarea rows="4" name="mensaje" class="validate-required" placeholder="Su mensaje.."></textarea> </div>
                                    <div class="col-sm-5 col-md-4 col-xs-6"> <button type="submit" class="btn btn--primary type--uppercase">ENVIAR </button> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
                include("footer.html");
            ?>
        </div>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/granim.min.js"></script>

    </body>

</html>
