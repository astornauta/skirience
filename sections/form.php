<section class="text-center imagebg" data-overlay="5">
    <div class="background-image-holder"> <img alt="background" src="img/Formulario_bg.jpg"> </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-8">
            <h1><b><i><?php echo _("El sistema  es simple");?></i></b></h1>
            <h3><b><i><?php echo _("contestas esta simple encuesta");?><br><?php echo _("y ya empiezas tu viaje");?></i></b></h3>
            </div>
        </div>
    </div>
</section>
<section class="bg--secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="boxed boxed--border">
                    <form class="text-left form-email" data-success="<?php echo _("Gracias por comunicarse, nos pondremos en contacto en breve.");?>" data-error="<?php echo _("Por favor complete todos los campos correctamente.");?>">
                            <input type="hidden" name="formulario" value="formulario">
                            <div class="col-sm-6 boxed">
                            <h5><?php echo _("Nombre");?></h5>
                            <input class="validate-required" type="text" name="name" placeholder="<?php echo _("Ingrese su nombre");?>" />
                            </div>
                            <div class="col-sm-6 boxed">
                            <h5><?php echo _("Email");?></h5>
                            <input name="email" class="validate-required validate-email" type="email" placeholder="<?php echo _("Ingrese su correo electrónico");?>">
                            </div>
                            <div class="col-sm-12 boxed">
                            <h5><?php echo _("¿De dónde eres?");?><span> <span class="no-bolt"><?php echo _("Queremos saber desde qué provincia y país te gustaría iniciar tu viaje");?></span></h5>
                            </div>
                            <div class="col-sm-12">
                            <input class="validate-required" type="text" name="inicio_viaje" placeholder="Provincia, país donde inicia viaje" />
                            </div>
                            <div class="col-sm-12 boxed">
                            <h5><?php echo _("¿A dónde te gustaría viajar?");?></h5>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-checkbox">
                                    <input class="validate-required" id="Aspen" type="checkbox" name="Aspen_Snowmas,Colorado" />
                                    <label for="Aspen"></label>
                                </div>
                                <span>Aspen Snowmas, Colorado</span>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-checkbox">
                                    <input class="validate-required" id="Chapelco" type="checkbox" name="Chapelco,San_Martin_de_los_Andes" />
                                    <label for="Chapelco"></label>
                                </div>
                                <span>Chapelco, San Martin de los Andes</span>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-checkbox">
                                    <input class="validate-required" id="LasLenas" type="checkbox" name="Las_Lenas,Argentina" />
                                    <label for="LasLenas"></label>
                                </div>
                                <span>Las Leñas, Argentina</span>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-checkbox">
                                    <input class="validate-required" id="Grandvalira" type="checkbox" name="Grandvalira,Andorra" />
                                    <label for="Grandvalira"></label>
                                </div>
                                <span>Grandvalira, Andorra</span>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-checkbox">
                                    <input class="validate-required" id="SierraNevada" type="checkbox" name="Sierra_Nevada,España" />
                                    <label for="SierraNevada"></label>
                                </div>
                                <span>Sierra Nevada, España</span>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-checkbox">
                                    <input class="validate-required" id="Baquera" type="checkbox" name="Baquera_Beret,España" />
                                    <label for="Baqueira"></label>
                                </div>
                                <span>Baqueria Beret, España</span>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-checkbox">
                                    <input class="validate-required" id="Niseko" type="checkbox" name="Niseko,Japon" />
                                    <label for="Niseko"></label>
                                </div>
                                <span>Niseko, Japon</span>
                            </div>
                            <div class="col-sm-2">
                                <div class="input-checkbox">
                                    <input class="validate-required" id="Otro" type="checkbox" name="Otro_Destino_check" />
                                    <label for="Otro"></label>
                                </div>
                                <span>Otro: </span>
                            </div>
                            <div class="col-sm-10">
                            <input type="text" name="otro_destino" placeholder="¿Cuál sería?" />
                            </div>
                            <div class="col-sm-5">
                            </div>
                            <div class="col-sm-12 boxed">
                            <h5><?php echo _("¿En qué fecha desea viajar?");?></h5>
                            </div>
                            <div class="col-sm-6 text-center">
                            <input type="text" name="fecha_desde" class="datepicker validate-required" placeholder="<?php echo _("Desde");?>" />
                            </div>
                            <div class="col-sm-6 text-center">
                            <input type="text" name="fecha_hasta" class="datepicker validate-required" placeholder="<?php echo _("Hasta");?>" />
                            </div>
                            <div class="col-sm-12">
                                <div class="input-checkbox input-checkbox--switch">
                                    <input id="checkbox-switch" type="checkbox" name="fechas_flexibles" />
                                    <label for="checkbox-switch"></label>
                                </div>
                                <span><?php echo _("¿Las fechas pueden ser flexibles?");?></span>
                            </div>
                            <div class="col-sm-12 boxed">
                            <h5><?php echo _("¿Cuantas personas viajan?");?></h5>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-number">
                                <input type="number" name="cantidad_personas" placeholder="<?php echo _("Cantidad de personas");?>" value="1" min="1" max="20" />
                                    <div class="input-number__controls">
                                        <span class="input-number__increase"><i class="stack-up-open"></i></span>
                                        <span class="input-number__decrease"><i class="stack-down-open"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 text-center">
<?php echo _("¿Cuantos niños viajan? (menores de 12)");?> 
                            </div>
                            <div class="col-sm-3 text-center">
                                <div class="input-number">
                                    <input type="number" name="cantidad_niños" value="0" min="0" max="9" />
                                </div>
                            </div>
                            <div class="col-sm-3 text-center">
<?php echo _("Edad promedio");?> 
                            </div>
                            <div class="col-sm-3 text-center">
                                <div class="input-number">
                                    <input type="number" name="edad_promedio_niños" value="0" min="1" max="20" />
                                </div>
                            </div>
                            <div class="col-sm-12 boxed">
                            <h5><?php echo _("¿Alguna preferencia para el hotel?");?><span class="no-bolt"> <?php echo _("Actividades nocturnas, ubicación, etc.");?></span></h5>
                            </div>
                            <div class="col-sm-12">
                            <input type="text" name="preferencia_hotel" placeholder="<?php echo _("Preferencia para el hotel");?>" />
                            </div>
                            <div class="col-sm-6">
                                <div class="input-checkbox input-checkbox--switch">
                                    <input id="checkbox-switch-alquiler" type="checkbox" name="alquilar_equipo" />
                                    <label for="checkbox-switch-alquiler"></label>
                                </div>
                                <span><?php echo _("¿Necesita alquilar equipo de esqui?");?></span>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-checkbox input-checkbox--switch">
                                    <input id="checkbox-switch-clases" type="checkbox" name="tomara_clases" />
                                    <label for="checkbox-switch-clases"></label>
                                </div>
                                <span><?php echo _("¿Tomará clases de esquí o snowboard?");?></span>
                            </div>
                            <div class="col-sm-12 boxed">
                            <h5><?php echo _("¿Cuál es el objetivo de su viaje?");?></h5>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-checkbox">
                                    <input id="Esquiar" type="checkbox" name="Esquiar" />
                                    <label for="Esquiar"></label>
                                </div>
                                <span><?php echo _("Esquiar");?></span>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-checkbox">
                                    <input id="Familia" type="checkbox" name="Familia" />
                                    <label for="Familia"></label>
                                </div>
                                <span><?php echo _("Familia");?></span>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-checkbox">
                                    <input id="Vida Nocturna" type="checkbox" name="Vida_Nocturna" />
                                    <label for="Vida Nocturna"></label>
                                </div>
                                <span><?php echo _("Vida Nocturna");?></span>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-checkbox">
                                    <input id="Relax/Spa" type="checkbox" name="Relax/Spa" />
                                    <label for="Relax/Spa"></label>
                                </div>
                                <span><?php echo _("Relax/Spa");?></span>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-checkbox">
                                    <input id="Shopping" type="checkbox" name="Shopping" />
                                    <label for="Shopping"></label>
                                </div>
                                <span><?php echo _("Shopping");?></span>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-checkbox">
                                    <input id="Otro-objetivo" type="checkbox" name="Otro_objetivo_check" />
                                    <label for="Otro-objetivo"></label>
                                </div>
                                <span><?php echo _("Otro:");?></span>
                            </div>
                            <div class="col-sm-12">
                            <input type="text" name="otro_objetivo" placeholder="<?php echo _("Otro objetivo..");?>" />
                            </div>
                            <div class="col-sm-12 boxed">
                            <h5>Observaciones <span class="no-bolt"> <?php echo _("Comentanos todos los datos que creas necesarios para que tu viaje sea el mejor");?></span></h5>
                            </div>
                            <div class="col-sm-12">
                            <input type="text" name="observaciones" placeholder="<?php echo _("Observaciones..");?>" />
                            <div class="col-xs-12 col-sm-6 boxed pull-right"> <button type="submit" class="btn btn--primary type--uppercase"><?php echo _("Enviar");?></button> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
