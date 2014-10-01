<?php
function gravatar($email) {
  return md5( strtolower( trim( $email ) ) );
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          
          ga('create', 'UA-41884884-7', 'puzl.io');
          ga('send', 'pageview');
        </script>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Puzl</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>

<div class="navbar navbar-fixed-top alt" data-spy="affix" data-offset-top="1000">
  <div class="container-fluid">
    <div class="navbar-header">
      <img src="/img/puzllogo.png" style="height: 50px">
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#staff">Staff</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
   </div>
</div>

<div class="blurb" id="home">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>Puzl Inc</h1>
        <p class="lead">Professional Freelance Developers</p>
      </div>
      <div class="col-md-5">
        <h1 class="pull-right logo"><i class="icon-puzzle-piece icon-3x"></i></h1>
      </div>
    </div>
  </div>
</div>

<div class="featurette" id="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Services</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 col-md-offset-3 text-center">
        <div class="featurette-item">
          <i class="icon-cogs"></i>
          <h4>Java development</h4>
          <p></p>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <div class="featurette-item">
          <i class="icon-bullseye"></i>
          <h4>Project management</h4>
          <p></p>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <div class="featurette-item">
          <i class="icon-shield"></i>
          <h4>Server administration</h4>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="staff" id="staff" style="background: url('/img/Jigsaw.png') no-repeat center center fixed;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Staff</h1>
      </div>
    </div>
    <div class="row">
     <div class="col-md-2 col-md-offset-1 staff-item">
       <a href="https://twitter.com/drtshock"><img class="img-circle grayscale" src="https://secure.gravatar.com/avatar/<?php echo gravatar("trent@puzlinc.com"); ?>"></a><p>Trent Hensler</p>
     </div>
     <div class="col-md-2 staff-item">
       <img class="img-circle grayscale" src="https://secure.gravatar.com/avatar/<?php echo gravatar("cionescu@gmail.com"); ?>"><p>Catalin Ionescu</p>
     </div>
     <div class="col-md-2 staff-item">
       <a href="https://twitter.com/turt2live"><img class="img-circle grayscale" src="img/staff/turt2live.jpg"></a><p>Travis Ralston</p>
     </div>
     <div class="col-md-2 staff-item">
       <a href="https://twitter.com/blha303"><img class="img-circle grayscale" src="img/staff/blha303.jpg"></a><p>Steven Smith</p>
     </div>
     <div class="col-md-2 staff-item">
       <a href="http://mfendley.com/"><img class="img-circle grayscale" src="https://secure.gravatar.com/avatar/<?php echo gravatar("ad@mfendley.com"); ?>"></a><p>Adam Fendley</p>
     </div>
    </div>
    </div>
  </div>
</div>

<div class="contact" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Contact</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2 col-md-offset-4 text-center">
        <div class="contact-item">
          <a href="mailto:sales@puzlinc.com"><i class="icon-envelope"></i>
          <h4>Sales</h4>
          <p>sales@puzlinc.com</p></a>
        </div>
      </div>
      <div class="col-md-2 text-center">
        <div class="contact-item">
          <a href="mailto:jobs@puzlinc.com"><i class="icon-envelope"></i>
          <h4>Jobs</h4>
          <p>jobs@puzlinc.com</p></a>
        </div>
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <ul class="list-inline">
          <li><a href="https://twitter.com/puzl_inc"><i class="icon-twitter icon-2x"></i></a></li>
        </ul>
        <hr>
        <p>Built with <i class="icon-heart-empty"></i> at <a href="http://www.bootply.com">Bootply</a>.<br>Puzl Inc. ©2014</p>
      </div>
    </div>
  </div>
</footer>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>