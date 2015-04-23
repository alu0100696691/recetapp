@extends('home')



@section('header')
	<header>
        	<div class="top-row">
            	<div class="main">
                	<div class="wrapper">
                        <h1><a href="{{ url('index.html') }}">GoodCook</a></h1>
                        <ul class="pagination">
                            <li class="current"><a href="{{ url('images/bg-img1.jpg') }}">1</a></li>
                            <li><a href="{{ url('images/bg-img2.jpg') }}">2</a></li>
                            <li><a href="{{ url('images/bg-img3.jpg') }}">3</a></li>
                        </ul>
                        <strong class="bg-text">Background:</strong>
                    </div>
                </div>
            </div>
            <div class="menu-row">
            	<div class="menu-border">
                	<div class="main">
                        <nav>
                            <ul class="menu">
                                <li><a class="active" href="{{ url('index.html') }}">Main</a></li>
                                <li><a href="{{ url('about.html') }}">About Us</a></li>
                                <li><a href="{{ url('courses.html') }}">Courses</a></li>
                                <li><a href="{{ url('recipes.html') }}">New Recipes</a></li>
                                <li><a href="{{ url('calendar.html') }}">Calendar</a></li>
                                <li class="last"><a href="{{ url('contacts.html') }}">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
			<div class="ic">More Website Templates @ TemplateMonster.com - September 26, 2011!</div>
    </header>
@stop


@section('footer')
	<footer>
    	<div class="padding">
        	<div class="main">
                <div class="wrapper">
                	<div class="fleft footer-text">
                    	<span>Good Cook</span> &copy; 2015
                        <strong>Website Template by <a rel="nofollow" class="link" target="_blank" href="{{ url('http://www.templatemonster.com/') }}">TemplateMonster.com</a></strong>
                        <!-- {%FOOTER_LINK} -->
                    </div>
                    <ul class="list-services">
                    	<li>Link to Us:</li>
                    	<li><a class="tooltips" title="facebook" href="{{ url('#"') }}></a></li>
                        <li class="item-1"><a class="tooltips" title="twitter" href="{{ url('#') }}"></a></li>
                        <li class="item-2"><a class="tooltips" title="linkedin" href="{{ url('#') }}"></a></li>
                    </ul>
                </div>
            </div>
        </div>
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
@stop