<!-- footer start-->
<footer class="footer widget-footer ttm-bgcolor-darkgrey ttm-bg clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="first-footer">
            <div class="row">
                <div class="widget-area col-sm-3 col-md-3 col-lg-3">
                    <div class="widget newsletter_widget clearfix">
                        <h3>Inscrivez-vous pour<br>
                            obtenir les dernières mises à jour</h3>
                    </div>
                </div>
                <div class="widget-area col-sm-9 col-md-9 col-lg-5">
                    <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                        <div class="mailchimp-inputbox clearfix" id="subscribe-content"> 
                            <p>
                             <input type="email" name="email" placeholder="Votre adresse email" required="">
                            </p>
                            <p><button class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Abonnez-vous!<i class="flaticon flaticon-right-arrow"></i></button></p>
                        </div>
                        <div id="subscribe-msg"></div>
                    </form>
                </div>
                <div class="widget-area col-sm-12 col-md-12 col-lg-4 text-right">
                    <div class="featured-box float-right res-991-padding_top20 ">
                        <div class="featured-title">
                            <h3>Contactez-nous au</h3>
                            <p>01 41 77 93 50</p>
                        </div>
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <i class="flaticon  flaticon-phone-call-1"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="row">
                <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="widget widget_text  clearfix">
                        <div class="footer-logo">
                           <img id="logo-img-1" class="img-center standardlogo" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/ES.jpg') }}" alt="Logo du Cabinet EZIN & STRAUUS">
                        </div>
                        <p style="text-align: justify">Depuis 2004, notre objectif est de vous accompagner depuis la création de votre activité sur les parties comptables, fiscales, sociales, juridiques et financières, pour que vous puissiez optimiser votre temps pour le développement commercial de votre activité.</p>
                    </div>
                    <div class="widget d-flex padding_top15 res-575-margin_bottom20">
                        <h3 class="widget-title margin_right10">Réseaux sociaux:</h3>
                        <div class="social-icons">
                            <ul class="list-inline d-flex">
                                <li>
                                    <a class="tooltip-top" target="_blank" href="https://www.facebook.com/cabinet.comptable.ezin.strauss" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="tooltip-top" target="_blank" href="mailto:contact@ezinstrauus.fr" data-tooltip="Mail"><i class="fa fa-envelope"></i></a>
                                </li>
                                <li>
                                    <a class="tooltip-top" target="_blank" href="https://www.linkedin.com/company/ezin-&-strauus" data-tooltip="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="widget widget_nav_menu clearfix">
                       <h3 class="widget-title">Menu</h3>
                        <ul class="menu-footer-quick-links">
                            <li><a href="{{ route('index') }}">Accueil</a></li>
                            <li><a href="{{ route('index') }}#cabinets">Nos Cabinets</a></li>  
                            <li><a href="{{ route('index') }}#skills">Nos Compétences</a></li>
                            <li><a href="{{ route('index') }}#brochure">Brochure</a></li>
                            <li><a href="{{ route('contact') }}">Contactez-nous</a></li>
                            <li><a href="https://leportail.cegid.com/cwe-portal" target="_blank" rel="noopener">Espace privé</a></li>  
                        </ul>
                    </div>
                </div>
                <div class="widget-area col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="widget widget_nav_menu res-991-margin_top30 clearfix">
                       <h3 class="widget-title">Contacts</h3>
                        <ul class="menu-footer-quick-service-links">
                            <li><a href="tel:0141779350"><i class="fa fa-phone"></i> 01 41 77 93 50 / +(229) 21 31 76 30</a></li>  
                            <li><a href="mailto:contact@ezinstrauus.fr"><i class="fa fa-envelope"></i> contact@ezinstrauus.fr</a></li>
                        </ul>
                    </div>
                </div>
            </div>  
        </div>
        <div class="bottom-footer-text ">
            <div class="row copyright text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 d-md-flex d-sm-block justify-content-center">
                    <span>Copyright &#169; 2021 <a href="{{ route('index') }}"> Cabinet EZIN & STRAUUS.</a>Tous droits réservés.</span>
                    <div id="footer-nav-menu">
                        <ul class="footer-nav-menu">
                             <li><a href="#">Politique de confidentialité</a></li>
                             <li><a href="#">Contactez-nous</a></li>
                             <li><a href="#">Mentions légales</a></li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- footer end-->

<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end