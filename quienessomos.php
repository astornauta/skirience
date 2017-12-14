<?php
    include("head.html");
?>
    <body data-smooth-scroll-offset="77">
        <?php
            include("nav.html");
        ?>
        <div class="main-container">
            <section class="text-center imagebg section--ken-burns" data-overlay="4">
                <div class="background-image-holder"> <img alt="background" src="img/Quienes_BG.jpg"> </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-md-8">
                            <h1><b><i>Quiénes&nbsp; somos</i></b><br></h1>
                            <p class="lead">Gracias a nuestros años de experiencia, a los momentos de telesillas y pistas de esquí con nuestros clientes, sabemos brindarte todas las comodidades que buscas, poniendo nuestra atención a cada detalle que hace de tu viaje una experiencia.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="imageblock switchable height-70 switchable--switch bg--ski">
                <div class="imageblock__content col-md-6 col-sm-4 pos-right">
                    <div class="background-image-holder"> <img alt="image" src="img/Block-quienes.jpg"> </div>
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-md-5 col-sm-7">
                            <p class="lead"><b>Planificar un viaje acorde a tus demandas y exigencias nos permite que disfrutes una experiencia única armada exclusivamente para ti, <br>para que tu única ocupación sea <br>llegar a disfrutar de las amplias posibilidades que <br>brinda el turismo invernal.</b></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cover height-70 imagebg image--light text-center" data-overlay="4">
                <div class="background-image-holder"> <img alt="background" src=""> </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-8 col-md-7">
                            <p class="lead"><b>Entre nuestros objetivos, queremos proponerte infinidad de destinos de esquí, alrededor de todo el mundo</b></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-center cta cta-4 space--sm border--bottom bg--ski">
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="lead"><b>Para ello contamos con los resorts mejores situados en el ranking de estaciones de esquí,entre ellos</b></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="unpad">
                <div class="masonry masonry--gapless">
                    <div class="masonry__container masonry--active">
                        <div class="masonry__item col-md-4 col-sm-6 col-xs-12 filter-digital" data-masonry-filter="Digital">
                            <div class="project-thumb hover-element height-50">
                                <div class="hover-element__initial">
                                    <div class="background-image-holder"> <img alt="background" src="img/Niseko.jpg"> </div>
                                </div>
                                <div class="hover-element__reveal" data-overlay="9">
                                    <div class="project-thumb__title">
                                        <h5>Japón, Niseko</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry__item col-md-8 col-sm-6 col-xs-12 filter-digital" data-masonry-filter="Digital">
                            <div class="project-thumb hover-element height-50">
                                <div class="hover-element__initial">
                                    <div class="background-image-holder"> <img alt="background" src="img/aspen.jpg"> </div>
                                </div>
                                <div class="hover-element__reveal" data-overlay="9">
                                    <div class="project-thumb__title">
                                        <h5>EE.UU, Aspen</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="masonry__item col-md-8 col-sm-6 col-xs-12 filter-digital" data-masonry-filter="Digital">
                            <div class="project-thumb hover-element height-50">
                                    <div class="hover-element__initial">
                                        <div class="background-image-holder"> <img alt="background" src="img/baqueira_beret.jpg"> </div>
                                    </div>
                                    <div class="hover-element__reveal" data-overlay="9">
                                        <div class="project-thumb__title">
                                            <h5>España, Baqueira Beret</h5>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="masonry__item col-md-4 col-sm-6 col-xs-12 filter-digital" data-masonry-filter="Digital">
                            <div class="project-thumb hover-element height-50">
                                <div class="hover-element__initial">
                                    <div class="background-image-holder"> <img alt="background" src="img/laslenas.jpg"> </div>
                                </div>
                                <div class="hover-element__reveal" data-overlay="9">
                                    <div class="project-thumb__title">
                                        <h5>Argentina, Las leñas</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cover height-70 imagebg text-center image--light" data-overlay="4">
                <div class="background-image-holder"> <img alt="background" src=""> </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-8 col-md-7">
                            <h1>Contestá estas preguntas y empezá el viaje !<br></h1>
                            <a class="btn btn--primary type--uppercase" href="form.php"> <span class="btn__text">comenzar viaje </span> </a>
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
        <script src="js/isotope.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scripts.js"></script>

    </body>

</html>
