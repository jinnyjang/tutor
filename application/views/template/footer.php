<!doctype html>
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> 
<!--<![endif]-->
	<head> 	
		<!-- Grab Google CDN's jQuery, fall back to local if offline -->
    <!-- 2.0 for modern browsers, 1.10 for .oldie -->
    <script>
    var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
    if(!oldieCheck) {
        document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
    } else {
        document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
    }
    </script>
    <script>
    if(!window.jQuery) {
    if(!oldieCheck) {
      document.write('<script src="<?=base_url("js/libs/jquery-2.0.2.min.js")?>"><\/script>');
    } else {
      document.write('<script src="<?=base_url("js/libs/jquery-1.10.1.min.js")?>"><\/script>');
    }
    }
    </script>
    <!--<script src="js/libs/gumby.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>-->
    
    <script src="<?=base_url("js/libs/gumby.min.js")?>"></script>
    <script src="<?=base_url("js/plugins.js")?>"></script>
    <script src="<?=base_url("js/main.js")?>"></script>

    <!-- Change UA-XXXXX-X to be your site's ID -->
    <!--<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
    </script>-->

    <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
    <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->
 	</head>
 	<body>
  	</body>
</html>