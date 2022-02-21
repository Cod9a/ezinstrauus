@extends('layouts.main')

@section('title', getServiceDetails($service)[0])

@section('content')

    <!--site-main start-->
    <div class="site-main">
        <div class="ttm-row sidebar ttm-sidebar-left  ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-4 widget-area sidebar-left">
                        <aside class="widget widget-nav-menu">
                            <ul>
                                <li class="{{ $service == 'expertise-comptable' ? 'active' : '' }}"><a href="{{ route('serviceDetails', 'expertise-comptable') }}">Expertise Comptable</a></li>
                                <li class="{{ $service == 'expertise-sociable' ? 'active' : '' }}"><a href="{{ route('serviceDetails', 'expertise-sociable') }}">Expertise Sociable</a></li>
                                <li class="{{ $service == 'conseil-en-gestion' ? 'active' : '' }}"><a href="{{ route('serviceDetails', 'conseil-en-gestion') }}">Conseil En Gestion</a></li>
                                <li class="{{ $service == 'creation-reprise-entreprise' ? 'active' : '' }}"><a href="{{ route('serviceDetails', 'creation-reprise-entreprise') }}">Création et Reprise d'Entreprise</a></li>
                                <li class="{{ $service == 'juridiques-fiscales' ? 'active' : '' }}"><a href="{{ route('serviceDetails', 'juridiques-fiscales') }}">Juridiques et Fiscales</a></li>
                                <li class="{{ $service == 'pilotage-performance' ? 'active' : '' }}"><a href="{{ route('serviceDetails', 'pilotage-performance') }}">Pilotage de la Performance</a></li>
                                <li class="{{ $service == 'due-diligence' ? 'active' : '' }}"><a href="{{ route('serviceDetails', 'due-diligence') }}">DUE Diligence</a></li>
                                <li class="{{ $service == 'audit-legal-contractuel' ? 'active' : '' }}"><a href="{{ route('serviceDetails', 'audit-legal-contractuel') }}">Audit Légal et Contractuel</a></li>
                            </ul>
                        </aside>
                        {{-- <aside class="widget widget-download with-title">
                            <h3 class="widget-title">Download</h3>
                            <ul class="download">
                                <li><i class="fa fa-file-pdf-o"></i>
                                    <a href="#"> Download .zip (5.2mb)</a>
                                </li>
                                <li><i class="fa fa-file-text-o"></i>
                                    <a href="#"> Download .txt (6.8kb)</a>
                                </li>
                            </ul>
                        </aside> --}}
                        {{-- <aside class="widget widget-banner">
                            <div class="ttm-col-bgcolor-yes ttm-bgcolor-darkgrey col-bg-img-thirteen ttm-col-bgimage-yes ttm-bg padding_top50 padding_left25 padding_right20 padding_bottom50">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                    <div class="ttm-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <div class="widget-banner-inner">
                                        <h3>First-Class<br>Finance Authority</h3>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor font-weight-600" href="services-1.html">Get in Touch<i class="flaticon flaticon-right-arrow font-weight-bold"></i></a>
                                    </div>
                                </div>
                            </div>
                        </aside> --}}
                        <aside class="widget contact-widget with-title">
                            <h3 class="widget-title">Contacts</h3>      
                            <ul class="contact-widget-wrapper">
                                {{-- <li><i class="ttm-textcolor-skincolor ti ti-location-pin"></i>Tour ANANI - 148/149 Avenue Van Vollenhoven - Cotonou BENIN</li> --}}
                                <li><i class="ttm-textcolor-skincolor ti ti-email"></i><a href="mailto:info@example.com" target="_blank">contact@ezinstrauus.fr</a></li>
                                <li><i class="ttm-textcolor-skincolor ti ti-mobile"></i> 01 41 77 93 50 / +(229) 21 31 76 30</li>
                                {{-- <li><i class="ttm-textcolor-skincolor ti ti-alarm-clock"></i>Mon to Sat - 9:00am to 6:00pm <br> (Sunday Closed)</li> --}}
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-8 content-area">
                        <div class="ttm-service-single-content-area">
                            <div class="ttm-service-description">
                                <div class="padding_bottom25">
                                    <div class="ttm_fatured_image-wrapper">
                                        <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/services/' . getServiceDetails($service)[1]) }}" alt="{{ getServiceDetails($service)[0] }}">
                                    </div>
                                </div>
                                {{-- <h3>Business Analytics & Market Research</h3> --}}
                                <div class="padding_bottom5">
                                    <div class="text-justify">{!! getServiceDetails($service)[2] !!}</div>
                                </div>
                                {{-- <div class="row">
                                   <div class="col-md-4">
                                       <!--featured-icon-box-->
                                       <div class="featured-icon-box icon-align-top-content style16 text-center">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="flaticon flaticon-money-bag"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Business Solution</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                   </div> 
                                   <div class="col-md-4">
                                       <!--featured-icon-box-->
                                       <div class="featured-icon-box icon-align-top-content style16 text-center">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="flaticon flaticon-light-bulb"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Best Consulting</h3>
                                                </div>
                                                <div class="featured-desc">
                                                   Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                   </div> 
                                   <div class="col-md-4">
                                       <!--featured-icon-box-->
                                       <div class="featured-icon-box icon-align-top-content style16 text-center">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="flaticon flaticon-time"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Corporate Solution</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio
                                                </div>
                                            </div>
                                        </div><!-- featured-icon-box end-->
                                   </div> 
                                </div>
                                <div class="padding_top20 margin_bottom25">
                                  <h3>Our Leadership Management Team</h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 ttm-box-col-wrapper">
                                        <!-- featured-imagebox-team -->
                                        <div class="featured-imagebox featured-imagebox-team style1">
                                            <div class="ttm-box-view-overlay">
                                                <div class="featured-iconbox ttm-media-link">
                                                    <div class="media-block">
                                                        <a href="team-detail.html" class="media-btn"><i class="ti ti-plus"></i></a>
                                                        <ul class="social-icons list-inline">
                                                            <li class="social-facebook"><a href="#"><i class="ti ti-facebook"></i></a></li>
                                                            <li class="social-twitter"><a href="#"><i class="ti ti-twitter-alt"></i></a></li>
                                                            <li class="social-instagram"><a href="#"><i class="ti ti-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="featured-thumbnail">
                                                    <img class="img-fluid" src="https://via.placeholder.com/450x500/808080?text=450x500+team-04.jpg" alt="image"> 
                                                </div>
                                            </div>
                                            <div class="featured-content featured-content-team">
                                                <div class="featured-title">
                                                    <h3><a href="team-detail.html">Andrew Bert</a></h3>
                                                </div>
                                                <div class="team-position">Accounts Manager</div>
                                                <a href="team-detail.html" class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right fs-18 rajdhani">
                                                  <strong>View Profile<i class="flaticon flaticon-right-arrow"></i></strong>
                                                </a>
                                            </div>
                                        </div><!-- featured-imagebox-team end-->
                                    </div>
                                    <div class="col-md-4 ttm-box-col-wrapper">
                                        <!-- featured-imagebox-team -->
                                        <div class="featured-imagebox featured-imagebox-team style1">
                                            <div class="ttm-box-view-overlay">
                                                <div class="featured-iconbox ttm-media-link">
                                                    <div class="media-block">
                                                        <a href="team-detail.html" class="media-btn"><i class="ti ti-plus"></i></a>
                                                        <ul class="social-icons list-inline">
                                                            <li class="social-facebook"><a href="#"><i class="ti ti-facebook"></i></a></li>
                                                            <li class="social-twitter"><a href="#"><i class="ti ti-twitter-alt"></i></a></li>
                                                            <li class="social-instagram"><a href="#"><i class="ti ti-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="featured-thumbnail">
                                                    <img class="img-fluid" src="https://via.placeholder.com/450x500/808080?text=450x500+team-01.jpg" alt="image"> 
                                                </div>
                                            </div>
                                            <div class="featured-content featured-content-team">
                                                <div class="featured-title">
                                                    <h3><a href="team-detail.html">Michael Bean</a></h3>
                                                </div>
                                                <div class="team-position">Marketing Head</div>
                                                <a href="team-detail.html" class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right fs-18 rajdhani">
                                                  <strong>View Profile<i class="flaticon flaticon-right-arrow"></i></strong>
                                                </a>
                                            </div>
                                        </div><!-- featured-imagebox-team end-->
                                    </div>
                                    <div class="col-md-4 ttm-box-col-wrapper">
                                        <!-- featured-imagebox-team -->
                                        <div class="featured-imagebox featured-imagebox-team style1">
                                            <div class="ttm-box-view-overlay">
                                                <div class="featured-iconbox ttm-media-link">
                                                    <div class="media-block">
                                                        <a href="team-detail.html" class="media-btn"><i class="ti ti-plus"></i></a>
                                                        <ul class="social-icons list-inline">
                                                            <li class="social-facebook"><a href="#"><i class="ti ti-facebook"></i></a></li>
                                                            <li class="social-twitter"><a href="#"><i class="ti ti-twitter-alt"></i></a></li>
                                                            <li class="social-instagram"><a href="#"><i class="ti ti-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="featured-thumbnail">
                                                    <img class="img-fluid" src="https://via.placeholder.com/450x500/808080?text=450x500+team-02.jpg" alt="image"> 
                                                </div>
                                            </div>
                                            <div class="featured-content featured-content-team">
                                                <div class="featured-title">
                                                    <h3><a href="team-detail.html">John Martin</a></h3>
                                                </div>
                                                <div class="team-position">Finance Head</div>
                                                <a href="team-detail.html" class="ttm-btn btn-inline ttm-btn-color-skincolor ttm-icon-btn-right fs-18 rajdhani">
                                                  <strong>View Profile<i class="flaticon flaticon-right-arrow"></i></strong>
                                                </a>
                                            </div>
                                        </div><!-- featured-imagebox-team end-->
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-sm-12">
                                       {{-- <div class="padding_top50 margin_bottom15">
                                         <h3>Why Choose Invess</h3>
                                       </div> 
                                       <div class="margin_bottom20">
                                           Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer.
                                       </div> --}}
                                       <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor margin_top15">
                                            {!! getServiceDetails($service)[3] !!}
                                        </ul>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <div class="padding_top45">
                                            <div class="ttm_fatured_image-wrapper">
                                                <img class="img-fluid" src="https://via.placeholder.com/1024x550/808080?text=1024x550+services-03-1024x550.jpg" alt="services-1">
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
    </div>
@endsection