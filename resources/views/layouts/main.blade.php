@include('partials.start')

<body>
	<!--page start-->
    <div class="page">

    	{{-- @include('includes.preloader') --}}

    	@include('partials.header')

        @if(Route::currentRouteName() == "index")
    	   @include('partials.banner')
        @else
           @include('partials.pageTitle')
        @endif


    	<!--site-main start-->
        <div class="site-main">

        	@yield('content')

        </div>

        @include('partials.footer')

    </div>

    @include('partials.scripts')

	@yield('customScripts')

</body>
</html>