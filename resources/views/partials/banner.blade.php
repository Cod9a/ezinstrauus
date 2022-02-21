 <!-- Banner -->
<div class="banner_slider banner_slider_2 banner_slider_wide">
    <div class="slide s1">
        <div class="slide_img" style="background-image: url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/bg-img/slider-mainbg-01.jpg') }});"></div>
        <div class="slide__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-8">
                        <div class="slide__content--headings ttm-textcolor-white text-left">
                            <img class="ECLogo" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/logo_oec.png') }}" alt="Logo Ordre des experts comptables">
                            <h2 data-animation="fadeInDown" data-delay="0.1s">L’<span class="ttm-textcolor-skincolor">Expertise</span> est <br>notre cœur de métier</h2>
                            <p  data-animation="fadeInDown" data-delay="0.5s">Le groupe EZIN & STRAUUS CP, des experts comptables et commissaires aux comptes à vos côtés.<br> Votre expert-comptable, votre partenaire pour bien gérer et développer votre entreprise.</p>
                            <div class="d-inline-block margin_top20" data-animation="fadeInUp" data-delay="0.6s">
                                <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor" href="#skills">Nos compétences<i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide s2">
        <div class="slide_img" style="background-image: url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/bg-img/slider-mainbg-04.jpg') }});"></div>
        <div class="slide__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-8">
                        <div class="slide__content--headings ttm-textcolor-white text-left">
                            <img class="ECLogo" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/logo_oec.png') }}" alt="Logo Ordre des experts comptables">
                            <h2 data-animation="fadeInDown" data-delay="0.1s">Des<span class="ttm-textcolor-skincolor"> Compétences</span><br> comptables par service</h2>
                            <p  data-animation="fadeInDown" data-delay="0.5s">Vous souhaitez être accompagné sur les divers aspects de votre activité :<br> économiques, financiers, juridiques, sociaux et fiscaux ?</p>
                            <div class="d-inline-block margin_top20" data-animation="fadeInUp" data-delay="0.6s">
                                <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor" href="#skills">Nos compétences<i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide s3">
        <div class="slide_img" style="background-image: url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/bg-img/slider-mainbg-03.jpg') }});"></div>
        <div class="slide__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-8">
                        <div class="slide__content--headings ttm-textcolor-white text-left">
                            <img class="ECLogo" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/logo_oec.png') }}" alt="Logo Ordre des experts comptables">
                            <h2 data-animation="fadeInDown" data-delay="0.1s">Une <span class="ttm-textcolor-skincolor">Expertise</span> <br>personnalisée</h2>
                            <p  data-animation="fadeInDown" data-delay="0.5s">Nous mettons à votre disposition des compétences adaptées à vos métiers et à vos besoins, <br> nous apportons à chaque client une expertise personnalisée à son entreprise et à ses particularités <br> dans de nombreux secteurs d’activité.</p>
                            <div class="d-inline-block margin_top20" data-animation="fadeInUp" data-delay="0.6s">
                                <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor" href="{{ route('contact') }}">Contactez-nous<i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide s4">
        <div class="slide_img" style="background-image: url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/bg-img/slider-mainbg-04.jpg') }});"></div>
        <div class="slide__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-8">
                        <div class="slide__content--headings ttm-textcolor-white text-left">
                            <img class="ECLogo" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/logo_oec.png') }}" alt="Logo Ordre des experts comptables">
                            <h2 data-animation="fadeInDown" data-delay="0.1s">Répondre à <br> vos <span class="ttm-textcolor-skincolor">Besoins</span></h2>
                            <p  data-animation="fadeInDown" data-delay="0.5s">La stratégie de notre réseau est de vous apporter des solutions concrètes, simples,<br> rapides ou innovantes, répondant à vos besoins de gestion dans tous les domaines <br> contribuant à la vie et au développement de votre Métier.</p>
                            <div class="d-inline-block margin_top20" data-animation="fadeInUp" data-delay="0.6s">
                                <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor" href="#cabinets">Nos cabinets<i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        {{--<div class="slide s2">
            <div class="slide_img" style="background-image: url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/bg-img/slider-mainbg-01.jpg') }});">
            </div>
            <div class="slide__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-8">
                            <div class="d-flex justify-content-end video_icon">
                                <!-- <div class="ttm-play-icon-btn style4">
                                    <div class="ttm-play-icon-animation">
                                        <a href="https://youtu.be/7e90gBu4pas" target="_self" class="ttm_prettyphoto">
                                            <div class="ttm-icon ttm-icon_element-fill  ttm-icon_element-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                                <i class="fa fa-play ttm-textcolor-white"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                            <div class="slide__content--headings ttm-textcolor-white text-left">
                                <h2  data-animation="fadeInDown" data-delay="0.1s" class="margin_top105 res-1199-margin_top0">Faîtes-nous <br>
                                   <span class="ttm-textcolor-skincolor"> Confiance</span>
                                </h2>
                                <h3 class="sm-hide"  data-animation="fadeInDown" data-delay="0.5s">Lorem Ipsum is simply dummy text of the printing.</h3>
                                <div data-animation="fadeInUp" data-delay="0.9s" class="featured-icon-box icon-align-before-content style8">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-skincolor ttm-icon_element-style-round ttm-icon_element-size-md">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                           <h3>Contactez-nous au :<span> 01 41 77 93 50</span></h3>
                                           <span>Heures d'ouverture : Lundi au vendredi 08h à 18h</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- <p data-animation="fadeInUp" data-delay="1.2s">Address : 115 Westport Street New Kensington, PA 15068</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
</div><!-- Banner end