<!-- case-studies-section -->
<section class="ttm-row  case-studies-section ttm-bgcolor-grey clearfix" id="cabinets">
    <div class="container">
        <!--row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>NOS CABINETS</h3>
                        <h2 class="title">Europe/Afrique</h2>
                    </div>
                </div><!-- section title end -->
            </div>
        </div><!-- row end -->
        <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "autoplay":true, "dots":false, "infinite":true, "responsive":[{"breakpoint":1199,"settings": {"slidesToShow": 3}}, {"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":620,"settings":{"slidesToShow": 1}}]}'>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="featured-imagebox featured-imagebox-portfolio  style1">
                    <div class="featured-thumbnail">
                        <a href="{{ route('cabinet', 'paris') }}">
                            <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/locations/Paris.jpg') }}" alt="Image">
                        </a>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3><a href="{{ route('cabinet', 'paris') }}">Paris</a></h3>
                        </div> 
                        <div class="category">
                            <span>110 rue de la Jonquière, 75017 PARIS</span>
                        </div>  
                        <div class="featured-iconbox">
                           <a href="{{ route('cabinet', 'paris') }}" class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-grey ttm-icon_element-size-sm"><i class="flaticon flaticon-right-arrow"></i></a>
                        </div>                                 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="featured-imagebox featured-imagebox-portfolio  style1">
                    <div class="featured-thumbnail">
                        <a href="{{ route('cabinet', 'champigny') }}">
                            <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/locations/CHAMPIGNY.jpg') }}" alt="Image">
                        </a>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3><a href="{{ route('cabinet', 'champigny') }}">Champigny sur Marne</a></h3>
                        </div> 
                        <div class="category">
                            <span>34 RUE JEAN JAURES, 94500 CHAMPIGNY-SUR-MARNE</span>
                        </div>  
                        <div class="featured-iconbox">
                           <a href="{{ route('cabinet', 'champigny') }}" class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-grey ttm-icon_element-size-sm"><i class="flaticon flaticon-right-arrow"></i></a>
                        </div>                                 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="featured-imagebox featured-imagebox-portfolio  style1">
                    <div class="featured-thumbnail">
                        <a href="{{ route('cabinet', 'afrique') }}">
                            <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/locations/Cotonou-03.png') }}" alt="Image">
                        </a>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3><a href="{{ route('cabinet', 'afrique') }}">Afrique</a></h3>
                        </div> 
                        <div class="category">
                            <span>TOUR EZIN STRAUUS, 148/149 AVENUE VAN VOLLENHOVEN</span>
                        </div>  
                        <div class="featured-iconbox">
                           <a href="{{ route('cabinet', 'afrique') }}" class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-grey ttm-icon_element-size-sm"><i class="flaticon flaticon-right-arrow"></i></a>
                        </div>                                 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="featured-imagebox featured-imagebox-portfolio  style1">
                    <div class="featured-thumbnail">
                        <a href="{{ route('cabinet', 'chatillon') }}">
                            <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/locations/chatillon3.png') }}" alt="Image">
                        </a>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h3><a href="{{ route('cabinet', 'chatillon') }}">Chatillon</a></h3>
                        </div> 
                        <div class="category">
                            <span>57 RUE PIERRE SEMARD, 92320 CHATILLON</span>
                        </div>  
                        <div class="featured-iconbox">
                           <a href="{{ route('cabinet', 'chatillon') }}" class="ttm-icon ttm-icon_element-border ttm-icon_element-style-round ttm-icon_element-color-grey ttm-icon_element-size-sm"><i class="flaticon flaticon-right-arrow"></i></a>
                        </div>                                 
                    </div>
                </div>
            </div>
        </div>
        {{-- <!--row -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12 m-auto">
                <div class="text-center padding_top30">
                    <a class="ttm-btn ttm-btn-size-md  ttm-btn-shape-rounded ttm-btn-style-fill ttm-icon-btn-right ttm-btn-color-skincolor" href="#">Tous nos Cabinets<i class="flaticon flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div><!-- row end --> --}}
    </div>
</section><!-- case-studies-section end -->