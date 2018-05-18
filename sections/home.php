<section class="cover cover-features imagebg text-left section--ken-burns space--md" data-overlay="2">
    <div class="background-image-holder"> <img alt="background" src="img/Principal.jpg"> </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-12 padding-left-title-typed shadow-title">
                <div class="typed-headline">
                    <i>
                        <?php if($translate->getLang() == 'es'): ?>
                        <span class="h1 inline-block color-blue-logo">
                            Vive experiencias
                        </span>
                        <span class="h1 inline-block typed-text typed-text--cursor color--white" data-typed-strings=" únicas, inolvidables, de esquiar, de viajar"></span>
                        <?php else: ?>
                        <span class="h1 inline-block color-blue-logo">
                            Live
                        </span>
                        <span class="h1 inline-block typed-text typed-text--cursor color--white" data-typed-strings=" ski, travelling, unique, unforgettable"></span>
                        <span class="h1 inline-block color-blue-logo">
                            experiences
                        </span>
                        <?php endif; ?>
                    </i>
                </div>
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
                <p class="lead"><?php echo _("Somos una joven agencia con ganas de ayudarte a que tengas una experiencia inolvidable, esquiando en los mejores resorts del mundo sin la preocupación de tener que organizar tú solo el viaje");?></p>
                <a class="btn btn--primary type--uppercase" href=<?php echo $l('quienessomos'); ?>> <span class="btn__text"><?php echo _("Leer más");?></span> </a>
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
            <div class="col-md-5 col-sm-7 text-center">
                <h3><b><i><?php echo _("Conocer tus deseos para poder diseñar un viaje personalizado es fundamental para SKIRIENCE");?></i></b></h3>
                <p class="lead"><?php echo _("Por eso te pedimos que nos ayudes con toda la información que puedas, será de gran importancia para la planificación de tu experiencia.");?></p>
                <a class="btn btn--primary type--uppercase" href=<?php echo $l("comenzar");?>> <span class="btn__text"><?php echo _("Comenzar viaje");?></span> </a>
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
                <p class="lead"><?php echo _("No olvides consultarnos cualquier duda que tengas, nos esforzamos por responder a todas las consultas en el menor tiempo posible.");?><br></p>
                <p class="lead"><?php echo _("Equipo de SKIRIENCE");?></p>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="row">
                    <form class="form-email" data-success="Gracias por su consulta, nos pondremos en contacto en breve." data-error="Por favor complete todos los campos correctamente.">
                        <input type="hidden" name="consulta" value="consulta">
                        <div class="col-sm-6 col-xs-12"> <label><?php echo _("NOMBRE");?>:</label> <input name="name" class="validate-required" placeholder="<?php echo _("Su nombre..");?>" type="text"> </div>
                        <div class="col-sm-6 col-xs-12"> <label><?php echo _("EMAIL");?>:</label> <input name="email" class="validate-required validate-email" placeholder="<?php echo _("Su email..");?>" type="email"> </div>
                        <div class="col-sm-12 col-xs-12"> <label><?php echo _("MENSAJE");?>:</label> <textarea rows="4" name="mensaje" class="validate-required" placeholder="<?php echo _("Su mensaje..");?>"></textarea> </div>
                        <div class="col-sm-5 col-md-4 col-xs-6"> <button type="submit" class="btn btn--primary type--uppercase"><?php echo _("ENVIAR");?> </button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
