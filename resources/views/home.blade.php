<!DOCTYPE html>
<html lang="es">
<head>
    	<title>HOME</title>
    	<meta charset="utf-8">
    	<link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}" type="text/css" media="screen">
    	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css" media="screen">
    	<link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}" type="text/css" media="screen">
    	<link href='http://fonts.googleapis.com/css?family=Adamina' rel='stylesheet' type='text/css'>
    	<script src="{{ URL::asset('js/jquery-1.6.3.min.js') }}" type="text/javascript"></script>
    	<script src="{{ URL::asset('js/cufon-yui.js') }}" type="text/javascript"></script>
    	<script src="{{ URL::asset('js/cufon-replace.js') }}" type="text/javascript"></script>
    	<script src="{{ URL::asset('js/Lobster_13_400.font.js') }}" type="text/javascript"></script>
    	<script src="{{ URL::asset('js/NewsGoth_BT_400.font.js') }}" type="text/javascript"></script>
    	<script src="{{ URL::asset('js/FF-cash.js') }}" type="text/javascript"></script>
   	    <script src="{{ URL::asset('js/easyTooltip.js') }}" type="text/javascript"></script>
	    <script src="{{ URL::asset('js/script.js') }}" type="text/javascript"></script>
    	<script src="{{ URL::asset('js/bgSlider.js') }}" type="text/javascript"></script>
    	<script src="{{ URL::asset('js/jquery.easing.1.3.js') }}" type="text/javascript"></script>
    	<script src="{{ URL::asset('js/tms-0.3.js') }}" type="text/javascript"></script>
    	<script src="{{ URL::asset('js/tms_presets.js') }}" type="text/javascript"></script>
	<!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="{{ url('http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode') }}">
        	<img src="{{ url('http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg') }}" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="{{ URL::asset('js/html5.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/ie.css') }}" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page1">
	<div id="bgSlider"></div>
    <div class="bg_spinner"></div>
	<div class="extra">
        <!--==============================header=================================-->
        @yield('header')
        <!--==============================content================================-->
        <div class="inner">
            <div class="main">
                <section id="content">
                    <div class="slider">
                        <ul class="items">
                            <li>
                                <img {{ URL::to_asset('images/slider-img1.jpg') }}" alt="">
                                <div class="banner">
                                    <strong class="title">
                                        <strong>Hot</strong><em>Recipe</em>
                                    </strong>
                                    <p class="p3">Lorem ipsum dolor sit amet consecteur adipising elit, sed do eiusmod tem por incididunt ut labore et dolore magna.</p>
                                    <a class="button-1" href="{{ url('#') }}">Read More</a>
                                </div>
                            </li>
                            <li>
                                <img {{ URL::to_asset('images/slider-img2.jpg') }}" alt="">
                                <div class="banner">
                                    <strong class="title">
                                        <strong>Hot</strong><em>Recipe</em>
                                    </strong>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    <a class="button-1" href="{{ url('#') }}">Read More</a>
                                </div>
                            </li>
                            <li>
                                <img {{ URL::to_asset('images/slider-img3.jpg') }}" alt="">
                                <div class="banner">
                                    <strong class="title">
                                        <strong>Hot</strong><em>Recipe</em>
                                    </strong>
                                    <p>Neque porro quisquam estui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam.</p>
                                    <a class="button-1" href="{{ url('#') }}">Read More</a>
                                </div>
                            </li>
                        </ul>
                        <a class="banner-2" href="{{ url('#') }}"></a>
                    </div>
                    <ul class="pags">
                        <li><a href="{{ url('#') }}">1</a></li>
                        <li><a href="{{ url('#') }}">2</a></li>
                        <li><a href="{{ url('#') }}">3</a></li>
                    </ul>                    
                    <div class="bg">
                        <div class="padding">
                            <div class="wrapper">
                                <article class="col-1">
                                    <h3>Weight Loss Ideas</h3>
                                    <p>Good Cook is one of <a class="link" href="{{ url('http://blog.templatemonster.com/free-website-templates/') }}" target="_blank">free website templates</a> created by TemplateMonster.com team. This template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.</p>
                                    <div class="relative">
                                        <a class="button-2" href="{{ url('#') }}">Read More</a>
                                    </div>
                                </article>
                                <article class="col-1">
                                    <h3>Fast Food. Yes or No?</h3>
                                    <p>This <a class="link" target="_blank" href="{{ url('http://blog.templatemonster.com/2011/09/26/free-website-template-slideshow-cooking/') }}">Good Cook Template</a> goes with two pack ages – with PSD source files and without them. PSD source files are available for free for the registered members of Templates.com.</p>
                                    <div class="relative">
                                        <a class="button-2" href="{{ url('#') }}">Read More</a>
                                    </div>
                                </article>
                                <article class="col-2">
                                    <h3>Taste of Asia</h3>
                                    <p>This web template has several pages: <a class="link" href="{{ url('index.html') }}">Main</a>, <a class="link" href="{{ url('about.html') }}">About Us</a>, <a class="link" href="{{ url('courses.html') }}">Courses</a>, <a class="link" href="{{ url('recipes.html') }}">New Recipes</a>, <a class="link" href="{{ url('calendar.html') }}">Calendar</a>, <a class="link" href="{{ url('contacts.html') }}">Contact Us</a> (please note that contact us form – doesn’t work).</p>
                                    <div class="relative">
                                        <a class="button-2" href="{{ url('#') }}">Read More</a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="padding-2">
                        <div class="indent-top">
                            <div class="wrapper">
                                <article class="col-3">
                                    <h4><strong>Welcome</strong> <em>to Our Site!</em></h4>
                                    <p class="color-2 p1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas:</p>
                                    <ul class="list-1">
                                        <li><a href="{{ url('#') }}">Sit aspernatur aut odit aut fugit quia consequuntur</a></li>
                                        <li><a href="{{ url('#') }}">Magni dolores eos qui ratione voluptatem sequi nesciunt eque</a></li>
                                        <li><a href="{{ url('#') }}">Qui dolorem ipsum quia dolor sit amet, consectetur adipisci</a></li>
                                        <li><a href="{{ url('#') }}">Sed quia non numquam eius modi tempora incidunt</a></li>
                                    </ul>
                                </article>
                                <div class="extra-wrap">
                                    <a href="{{ url('#') }}">{{ HTML::image('img/images/banner-1.jpg') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="block"></div>
            </div>
        </div>
    </div>
    
	<!--==============================footer=================================-->
    @yield('footer')
    
   
</body>
</html>
