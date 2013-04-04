<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?=$title?></title>
        <meta name="description" content="<?=$meta_description?>">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="theme/style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <style>
                <?=$style?>
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header id="above">
            <?=getHTMLForKmomNavlinks($navkmom, "nav-kmom")?>
        </header>

        <header id="header">
            <div id="banner">
                <a href="index.php">
                    <span class="site-title">phpmvc</span>
                </a>
                <br>
                <span class="site-slogan">Att koda ett PHP-baserat och MVC-inspirerat ramverk</span>
            </div>
            <?=getHTMLForNavigation($navbar, "navbar")?>
        </header>
        
        <div id="main" role="main">
            <?=$main?>
        </div>

        <footer id="footer">

            <p>&copy; Daniel Jönsson, djazz.mine.nu</p>
            
            <p>Tools: 
                <a href="http://validator.w3.org/check/referer">html5</a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">css3</a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css21">css21</a>
                <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">unicorn</a>
                <a href="http://validator.w3.org/checklink?uri=<?=$currentUrl?>">links</a>
                <a href="http://validator.w3.org/i18n-checker/check?uri=<?=$currentUrl?>">i18n</a>
            </p>
        </footer>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
