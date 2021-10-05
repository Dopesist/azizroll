<html><head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6e8e0a04dc.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
	<link rel="shortcut icon" type="image/jpg" href="{{ asset('frontend/img/favicon.png') }}"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>عَــزّو</title>
</head>
<b>
<center>
@yield('content')
</center>
<div class="footer-basic">
  <footer>
      <div class="social">
        <a href="https://twitter.com/azizroll"><i class="iconify" data-icon="akar-icons:twitter-fill" data-inline="false"></i></a>
        <a href="https://open.spotify.com/user/80tbr2ziz8ihge5sxx6a42g8o"><i class="iconify" data-icon="akar-icons:spotify-fill" data-inline="false"></i></a>
        <a href="https://letterboxd.com/azizroll"><i class="iconify" data-icon="simple-icons:letterboxd" data-inline="false"></i></a>
      </div>
      <p class="copyright">Developed By: <a href="https://fahad.one" class="copyright">Fahad.one</a> © {{ date('Y') }} </p>
  </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</b>
</body>
</html>
