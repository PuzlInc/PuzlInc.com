
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Puzl website.">
    <meta name="author" content="drtshock">
    <link rel="shortcut icon" href="/img/favicon.png">

    <title>Puzl - <?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<?php include_once("analyticstracking.php") ?>
     <div class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" alt="Puzl"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
<?php $cactive = " class=\"active\""; ?>
            <li<?php if ($title == "Home") { echo $cactive; }; ?>><a href="/">Home</a></li>
            <li<?php if ($title == "About") { echo $cactive; }; ?>><a href="/about">About</a></li>
            <li<?php if ($title == "Support") { echo $cactive; }; ?>><a href="/contact">Support</a></li>
            <li<?php if ($title == "Jobs") { echo $cactive; }; ?>><a href="/jobs">Jobs</a></li>
            <li<?php if ($title == "Sales") { echo $cactive; }; ?>><a href="/sales">Sales</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<?php echo $content; ?>

    <div id="footer">
      <hr>
      <div class="container" style="height: 100%;">
        <p style="display: inline-block; font-size: 12px; padding-top: 24px;">&copy;Puzl Inc. - Professionally Awesome - 2014. All Rights Reserved.</p>
        <p class="pull-right" style="display: inline-block; font-size: 14px; padding-top: 23px;">
          <a href="http://puzlinc.com" style="margin-right: 15px;">Home</a>
          <a href="/about" style="margin-right: 15px;">About Us</a>
          <a href="/contact" style="margin-right: 15px;">Support</a>
          <a href="/jobs" style="margin-right: 15px;">Jobs</a>
          <a href="/faq" style="margin-right: 15px;">FAQ</a>
          <a href="/sales" style="margin-right: 15px;">Sales</a>
        </p>
        <br><a href="http://beastnode.com"><img src="/assets/img/beastnode.png" width=150 height=70></a>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>

</html>
