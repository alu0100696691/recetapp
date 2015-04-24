<html>
  <head>
    {{-- Common Header Stuff Here --}}
  </head>
  <body>
    <div class="navigation">
      @section('navigation')
        <a href="/">Home</a>
        <a href="/contact">Contact</a>
      @show
    </div>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
