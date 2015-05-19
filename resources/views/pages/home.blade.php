@extends('layouts.default')

@section('content')
<title>HOME</title>
  <div class="inner">
            <div class="main">
                <section id="content">
                     <div class="slider">
                        <ul class="items">
                            <li>
                              <img src="{{ asset('/images/slider-img1.jpg') }}">
                                <div class="banner">
                                    <strong class="title">
                                        <strong>Hot</strong><em>Recipe</em>
                                    </strong>
                                    <p class="p3">Lorem ipsum dolor sit amet consecteur adipising elit, sed do eiusmod tem por incididunt ut labore et dolore magna.</p>
                                    <a class="button-1" href="{{ url('#') }}">Read More</a>
                                </div>
                            </li>
                            <li>
                              <img src="{{ asset('/images/slider-img2.jpg') }}">
                                <div class="banner">
                                    <strong class="title">
                                        <strong>Hot</strong><em>Recipe</em>
                                    </strong>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                    <a class="button-1" href="{{ url('#') }}">Read More</a>
                                </div>
                            </li>
                            <li>
                              <img src="{{ asset('/images/slider-img3.jpg') }}">
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
                                    <a href="{{ url('#') }}">{{ asset('img/images/banner-1.jpg') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="block"></div>
            </div>
        </div>
    </div>
@stop
