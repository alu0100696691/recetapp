

        	<div class="top-row">
                <div class="main">
                    <div class="wrapper">
                        <h1><a href="{{ url('index.html') }}">Recetapp</a></h1>
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
                                <li><a class="active" href="{{ url('/') }}">Main</a></li>
                                <li><a href="{{ url('about.html') }}">About Us</a></li>
                                <li><a href="{{ url('recipes.html') }}">Recipes</a></li>
                                <li><a href="{{ url('calendar.html') }}">Calendar</a></li>
                                <li class="last"><a href="{{ url('contacts.html') }}">Contacts</a></li>
                                @if (Auth::check())
                                  <li><a href="{{ url('/logout') }}">Logout</a></li>
                                @else
                                  <li><a href="{{ url('/login') }}">Login</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="ic">More Website Templates @ TemplateMonster.com - September 26, 2011!</div>
