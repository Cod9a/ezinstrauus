@extends('layouts.main')

@section('title', 'Cabinet - ' . ucfirst(getCabinetDetails($cabinet)[0]))

@section('content')

	<!--site-main start-->
    <div class="site-main">
        <div class="ttm-row sidebar ttm-sidebar-left  ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 content-area">
                        <div class="ttm-service-single-content-area">
                            <div class="ttm-service-description">
                                <div class="padding_bottom25">
                                    <div class="ttm_fatured_image-wrapper">
                                        <img class="img-fluid" src="{{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/locations/' . getCabinetDetails($cabinet)[1]) }}" alt="{{ getCabinetDetails($cabinet)[0] }}">
                    					{!! getCabinetDetails($cabinet)[6] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 widget-area sidebar-left">
                        <aside class="widget widget-nav-menu">
                            <ul>
                                <li class="{{ $cabinet == 'paris' ? 'active' : '' }}"><a href="{{ route('cabinet', 'paris') }}">Paris</a></li>
                                <li class="{{ $cabinet == 'champigny' ? 'active' : '' }}"><a href="{{ route('cabinet', 'champigny') }}">Champigny sur Marne</a></li>
                                <li class="{{ $cabinet == 'chatillon' ? 'active' : '' }}"><a href="{{ route('cabinet', 'chatillon') }}">Chatillon</a></li>
                                <li class="{{ $cabinet == 'afrique' ? 'active' : '' }}"><a href="{{ route('cabinet', 'afrique') }}">Afrique</a></li>
                            </ul>
                        </aside>
                        <aside class="widget contact-widget with-title">
                            <h3 class="widget-title">EZIN & STRAUUS CP {{ getCabinetDetails($cabinet)[0] }}</h3>      
                            <ul class="contact-widget-wrapper">
                                {!! getCabinetDetails($cabinet)[2] !!}
                                {!! getCabinetDetails($cabinet)[3] !!}
                                {!! getCabinetDetails($cabinet)[4] !!}
                            </ul>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
    </div>

@endsection