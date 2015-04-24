<!DOCTYPE html>
<html lang="es">
<head>
	@include('includes.head')
</head>
<body id="page1">
<div id="bgSlider"></div>
    <div class="bg_spinner"></div>
	<div class="extra">	
        <!--==============================header=================================-->
<header>
	@include('includes.header')   
</header>    
        <!--==============================content================================-->
        
	@yield('content')
    
	<!--==============================footer=================================-->
<footer>
    	@include('includes.footer')   
</footer>
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuart',
				preset:'simpleFade',
				slideshow:10000,
				banners:'fade',
				pauseOnHover:true,
				waitBannerAnimation:false,
				pagination:'.pags'
			});
		});
    </script>
   
</body>
</html>
