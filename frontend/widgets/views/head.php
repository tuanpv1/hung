<?php
/**
 * Created by PhpStorm.
 * User: TuanPV
 * Date: 10/6/2017
 * Time: 9:44 PM
 */
?>
<title>Repair Theme | </title>
<meta name="description" content=" | "/>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/jnm.js"></script>
<link rel="profile" href="//gmpg.org/xfn/11"/>
<link rel="icon" href="#" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" media="all" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" media="all" href="css/camera.css"/>
<link rel="stylesheet" type="text/css" media="all" href="css/style.css"/>
<link rel='stylesheet' id='flexslider-css' href='css/flexslider.css?ver=2.2.0' type='text/css' media='all'/>
<link rel='stylesheet' id='owl-carousel-css' href='css/carousel.css?ver=1.24' type='text/css' media='all'/>
<link rel='stylesheet' id='owl-theme-css' href='css/theme.css?ver=1.24' type='text/css' media='all'/>
<link rel='stylesheet' id='font-awesome-css' href='css/font-awesome.css?ver=3.2.1' type='text/css' media='all'/>
<link rel='stylesheet' id='cherry-plugin-css' href='css/cherry-plugin.css?ver=1.2.7' type='text/css' media='all'/>
<link rel='stylesheet' id='contact-form-7-css' href='css/styles.css?ver=4.1.2' type='text/css' media='all'/>
<link rel='stylesheet' id='theme53761-css' href='css/main-style.css' type='text/css' media='all'/>
<link rel='stylesheet' id='magnific-popup-css' href='css/magnific-popup.css?ver=0.9.3' type='text/css' media='all'/>
<script type='text/javascript' src='js/jquery-1.7.2.min.js?ver=1.7.2'></script>
<script type='text/javascript' src='js/jquery.easing.1.3.js?ver=1.3'></script>
<script type='text/javascript' src='js/elastislide.js?ver=1.2.7'></script>
<script type='text/javascript' src='js/jquery-migrate-1.2.1.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='js/swfobject.js?ver=2.2-20120417'></script>
<script type='text/javascript' src='js/modernizr.js?ver=2.0.6'></script>
<script type='text/javascript' src='js/jflickrfeed.js?ver=1.0'></script>
<script type='text/javascript' src='js/custom.js?ver=1.0'></script>
<script type='text/javascript' src='js/bootstrap.min.js?ver=2.3.0'></script>
<style type='text/css'>
    body {
        background-color: #363636;
        color: black;
    }

    .header {
        background-color: #ffffff
    }

    h1 {
        font: normal 34px/40px Ubuntu;
        color: #3c3c3c;
    }

    h2 {
        font: normal 34px/40px Ubuntu;
        color: #3c3c3c;
    }

    h3 {
        font: normal 34px/40px Ubuntu;
        color: #3c3c3c;
    }

    h4 {
        font: normal 15px/20px Ubuntu;
        color: #333333;
    }

    h5 {
        font: normal 15px/26px Ubuntu;
        color: #31c1e4;
    }

    h6 {
        font: normal 12px/18px Ubuntu;
        color: #333333;
    }

    body {
        font-weight: normal;
    }

    .logo_h__txt, .logo_link {
        font: normal 26px/26px Ubuntu;
        color: #3c3c3c;
    }

    .sf-menu > li > a {
        font: normal 15px/18px Ubuntu;
        color: black;
    }

    .nav.footer-nav a {
        font: normal 11px/23px Ubuntu;
        color: black;
    }
</style>
<!--[if lt IE 9]>
<div id="ie7-alert" style="width: 100%; text-align:center;">
    <img src="https://tmbhtest.com/images/ie7.jpg" alt="Upgrade IE 8" width="640" height="344" border="0"
         usemap="#Map"/>
    <map name="Map" id="Map">
        <area shape="rect" coords="496,201,604,329"
              href="https://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank"
              alt="Download Interent Explorer"/>
        <area shape="rect" coords="380,201,488,329" href="https://www.apple.com/safari/download/" target="_blank"
              alt="Download Apple Safari"/>
        <area shape="rect" coords="268,202,376,330" href="https://www.opera.com/download/" target="_blank"
              alt="Download Opera"/>
        <area shape="rect" coords="155,202,263,330" href="https://www.mozilla.com/" target="_blank"
              alt="Download Firefox"/>
        <area shape="rect" coords="35,201,143,329" href="https://www.google.com/chrome" target="_blank"
              alt="Download Google Chrome"/>
    </map>
</div>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="js/jquery.mobile.customized.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(function () {
        jQuery('.sf-menu').mobileMenu({defaultText: "Navigate to..."});
    });
</script>
<!--<![endif]-->
<script type="text/javascript">
    // Init navigation menu
    jQuery(function () {
        // main navigation init
        jQuery('ul.sf-menu').superfish({
            delay: 1000, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
            animation: {
                opacity: "show",
                height: "show"
            }, // used to animate the sub-menu open
            speed: "normal", // animation speed
            autoArrows: true, // generation of arrow mark-up (for submenu)
            disableHI: true // to disable hoverIntent detection
        });

        //Zoom fix
        //IPad/IPhone
        var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
            ua = navigator.userAgent,
            gestureStart = function () {
                viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
            },
            scaleFix = function () {
                if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                    viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                    document.addEventListener("gesturestart", gestureStart, false);
                }
            };
        scaleFix();
    })
</script>
<!-- stick up menu -->
<script type="text/javascript">
    jQuery(document).ready(function () {
        if (!device.mobile() && !device.tablet()) {
            jQuery('.row-2').tmStickUp({
                correctionSelector: jQuery('#wpadminbar')
                , listenSelector: jQuery('.listenSelector')
                , active: true, pseudo: true
            });
        }
    })
</script>
