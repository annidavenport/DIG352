<?php $server_url = "http://".$_SERVER["SERVER_NAME"].":8888/DIG352" ;?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Little Tin Rocket</title>
  <meta name="description" content="Little Tin Rocket - Freelance Web Development">
  <meta name="author" content="Anni Davenport">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONTS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Crimson+Text:400,600,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/type.css">
  <link rel="stylesheet" href="css/responsive.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript">
    $(window).scroll(function() {
      if ($(window).scrollTop() > 500) {
          $('#nav').addClass('stuck');
      } else {$('#nav').removeClass('stuck');}

    //Active section script
      aObj = document.getElementById('nav').getElementsByTagName('a');
      for(i=0;i<aObj.length;i++) {
        if(document.location.href.indexOf(aObj[i].href)>=0) {
          aObj[i].className='active';
        }else{aObj[i].className='';}
      }

    });
  </script>
  <script src="js/jquery.singlePageNav.min.js"></script>
  <script>

      // Prevent console.log from generating errors in IE for the purposes of the demo
      if ( ! window.console ) console = { log: function(){} };

      // The actual plugin
      $('#nav').singlePageNav({
          offset: $('#nav').outerHeight(),
          filter: ':not(.external)',
          updateHash: true,
          beforeStart: function() {
              console.log('begin scrolling');
          },
          onComplete: function() {
              console.log('done scrolling');
          }
      });
  </script>
  <!-- Fancybox scripts - Provided by FancyApps http://fancyapps.com/fancybox/
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
  <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>
  <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>
  <link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
  <!-- Responsive Nav code - Brought to you by @viljamis http://responsive-nav.com/
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/responsive-nav.css">
  <script src="js/responsive-nav.js"></script>
</head>
<body>
  <div id="nav-mobile" >
    <div class="nav-collapse">
      <ul >
        <li><a href="#hero-unit">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="wrapper">