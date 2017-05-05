<!doctype html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Common drive is a notes pooling platform where students can upload or download any type of study material.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Commondrive - A Notes Pooling Platform For Students</title>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Common drive">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Common drive">
    <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/chrome-touch-icon-192x192.png">
    <meta name="msapplication-TileColor" content="#40bcff">

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#40bcff">

    <!-- Social -->
    <meta property="og:title" content="Commondrive">
    <meta property="og:description" content="Commondrive is a notes pooling platform where students can upload or download any type of study material.">
    <meta property="og:image" content="/images/social/cmndrv.png">
    <meta property="og:url" content="https://commondrive.net">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Commondrive">
    <meta name="twitter:description" content="I love using this notes pooling platform called commondrive @cmndrv. I think you will like it too. Use this link to get started.">
    <meta name="twitter:image" content="/images/social/cmndrv.png">

    <!-- stylesheets -->
    <link rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app_temp.css">

    <!--scripts-->
    <!-- <script src="/js/libraries/jquery-3.0.0.min.js"></script> -->

  </head>
  <body>
    <!-- Add your site or app content here -->

    @yield('content')

    <script src="/js/libraries/jquery-3.0.0.min.js"></script>
    <script src="/js/app.js"></script>
    <script type="text/javascript">
    function openDrawer(){
            $('.drawer-handle').toggleClass('open');
            $('.drawer-space').toggleClass('open');
    }
    function scrollpage(str){
        $('html,body').animate({
          scrollTop: $(str).offset().top},
          500
        );
      }
      function hello(){
        alert("hello");
      }
    </script>
    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59009e9045159ccf"></script> 
  </body>
</html>
