<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix" style="background-image: url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/bg-img/' . (Route::currentRouteName() == 'cabinet' ? 'bg2.jpg' : 'bg1.jpg')) }});">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">
                            @if(Route::currentRouteName() == "contact")
                                Contactez-nous
                            @elseif(Route::currentRouteName() == "cabinet")
                                Cabinet - {{ getCabinetDetails($cabinet)[0] }}
                            @else
                                {{ getServiceDetails($service)[0] }}
                            @endif
                        </h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="Homepage" href="/"><i class="fa fa-home"></i>Accueil</a>
                        </span>
                        <span>
                            @if(Route::currentRouteName() == "contact")
                                Contactez-nous
                            @elseif(Route::currentRouteName() == "cabinet")
                                Cabinet - {{ getCabinetDetails($cabinet)[0] }}
                            @else
                                {{ getServiceDetails($service)[0] }}
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                    
<!-- page-title end -->