<!doctype html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="description" content="">
  <title>Rick and Morty Encyclopedia</title>
  <link href ="/css/app.css" rel="stylesheet" />

</head>
<body>
<script src="/js/app.js"></script>
<div class="container">
  <header class="row">
    <div class="navbar">
      <div class="navbar-inner">
        <ul class="nav">
           <li><a href="/character">Characters</a></li>
           <li><a href="/location">Locations</a></li>
           <li><a href="/episode">Episodes</a></li>
        </ul>
        <form method="GET" action="{{ route('search') }}">
          <input type="text" name="query"/>
          <input type="submit" value="search"/>
        </form>
      </div>
  </div>
  </header>
  <div id="main" class="row">
    @yield('content')
  </div>
  <footer class="row">
    <div id="copyright text-right">© Copyright 2020 Paul McKay </div>
  </footer>
</div>
</body>
</html>