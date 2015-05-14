

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
                          <ul class="nav nav-tabs menu">
                            <li><a class="active" href="{{ url('/') }}">Main</a></li>
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                            <li><a href="{{ url('/recipes') }}">Recipes</a></li>
                            <li><a href="{{ url('/calendar') }}">Calendar</a></li>
                            <li><a href="{{ url('/contact') }}">Contacts</a></li>
                            @if (Auth::check())
                              <li>
                                <div class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Profile</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Configure</a></li>
                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('/logout') }}">Logout</a></li>
                                  </ul>
                                </div>
                              </li>
                            @else
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            @endif
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="ic">More Website Templates @ TemplateMonster.com - September 26, 2011!</div>
