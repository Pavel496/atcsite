<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.inc.head')
</head>

<body>
	<!-- WRAPPER -->
	<div class="wrapper">
        @include('front.inc.slider')
        
        @include('front.inc.navbar')
        
        {{--@include('front.inc.breadcrumbs')--}}        

		<!-- PAGE CONTENT -->
		<div class="page-content">
            <div class="container">
                
                <div class="row">
                    
                    @yield('content')
                    
                </div>
                
            </div>
        </div>
		<!-- END PAGE CONTENT -->
        
        @include('front.inc.footer')        

	</div>
	<!-- END WRAPPER -->

        @include('front.inc.javascripts')    
	
</body>

</html>
