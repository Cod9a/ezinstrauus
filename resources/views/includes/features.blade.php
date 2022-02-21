<!-- features-section -->
<section class="ttm-row features-section bg-img4 ttm-bg ttm-bgimage-yes ttm-col-bgcolor-yes ttm-bgcolor-skincolor clearfix" id="brochure">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <!--row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title style2 res-991-margin_bottom0">
                    <div class="title-header text-right">
                        <h3>Notre brochure</h3>
                        <h2 class="title mr_10">Téléchargez notre brochure</h2>
                    </div>
                    <div class="title-desc padding_left100 padding_top20  res-991-padding_left0 res-991-padding_top0">
                        <p class="padding_bottom20 res-991-padding_bottom0">Notre dépliant renseigne sur tout à notre sujet. Que ce soit nos objectifs, nos compétences etc...</p>
                        <div class="ttm-play-icon-btn text-left margin_top30 style2 res-991-margin_left20">
                            <div class="ttm-play-icon-animation">
                                <a href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/docs/Plaquette-v3.pdf') }}" class="ttm_prettyphoto" download="Brochure.pdf">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                        <i class="fa fa-file-text-o ttm-textcolor-skincolor"></i>
                                    </div>
                                </a>

                            </div>
                            <div class="ttm-play-icon-btn-content">
                                <h3 class="ttm-play-icon-title">
                                    <a href="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/docs/Plaquette-v3.pdf') }}" class="rajdhani text-capitalize" download="Brochure.pdf">Téléchargez notre dépliant</a>
                                </h3>
                                <p class="ttm-play-icon-description">Pour tout savoir sur nous</p>
                            </div>
                        </div>
                    </div>
                </div><!-- section title end -->
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- features-section end -->