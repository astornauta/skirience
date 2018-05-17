<div class="nav-container">
    <div class="via-1512308039942" via="via-1512308039942" vio="Nav 2 skirience">
        <div class="bar bar--sm visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 col-sm-2">
                        <a href=<?php echo $l('home');?>>
                            <img class="logo logo-dark" alt="Skirience" src="img/SKIRIENCE_VERTICAL-02.svg">
                            <img class="logo logo-light" alt="Skirience" src="img/SKIRIENCE_VERTICAL-02.svg">
                        </a>
                    </div>
                    <div class="col-xs-9 col-sm-10 text-right">
                        <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs hidden-sm"> <i class="icon icon--sm stack-interface stack-menu"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <nav id="menu1" class="bar bar-1 hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-sm-2 hidden-xs">
                        <div class="bar__module">
                            <a href=<?php echo $l('home');?>>
                                <img class="logo heigth-vertical logo-dark" alt="Skirience" src="img/SKIRIENCE_VERTICAL-02.svg">
                                <img class="logo logo-light" alt="Skirience" src="img/SKIRIENCE_VERTICAL-02.svg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-11 col-sm-12 text-right text-left-xs text-left-sm">
                        <div class="padding-top-bar bar__module">
                            <ul class="menu-horizontal text-left color--white">
                                <li>
                                    <a href=<?php echo $l('home');?>><?php echo _("Inicio");?></a>
                                </li>
                                <li>
                                    <a href=<?php echo $l('comenzar');?>><?php echo _("Comenzar viaje");?></a>
                                </li>
                                <li>
                                    <a href=<?php echo $l('quienessomos');?>><?php echo _("Quiénes somos");?></a>
                                </li>
                                <li>
                                    <a href=<?php echo $l('home')."#form-with-text-1-contacto";?> class="inner-link" target="_self"><?php echo _("Contacto");?></a>
                                </li>
                                <li class="lang-icon">
                                    <a href=<?php echo "/en/".Router::$params['routeName'] ?>>
                                        <img src="/img/uk.png" />
                                    </a>
                                </li>
                                <li class="lang-icon">
                                    <a href=<?php echo "/es/".Router::$params['routeName'] ?>>
                                        <img src="/img/spain.png" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
