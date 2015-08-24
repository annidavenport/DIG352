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
        console.log(aObj);
        if(document.location.href.indexOf(aObj[i].href)>=0) {
          aObj[i].className='active';
        }else{aObj[i].className='';}
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

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="wrapper">