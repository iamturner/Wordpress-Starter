<!DOCTYPE html>
<!--[if IE 8 ]> <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    
    <? wp_head(); ?>
    
    <style><?php echo file_get_contents(get_template_directory_uri().'/assets/css/critical.min.css'); ?></style>
    
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/assets/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#dddddd">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/img/ms-icon-144x144.png">
    
    <script>!function(e){"use strict";var n=function(n,t,o){function i(e){if(a.body)return e();setTimeout(function(){i(e)})}function r(){l.addEventListener&&l.removeEventListener("load",r),l.media=o||"all"}var d,a=e.document,l=a.createElement("link");if(t)d=t;else{var f=(a.body||a.getElementsByTagName("head")[0]).childNodes;d=f[f.length-1]}var s=a.styleSheets;l.rel="stylesheet",l.href=n,l.media="only x",i(function(){d.parentNode.insertBefore(l,t?d:d.nextSibling)});var u=function(e){for(var n=l.href,t=s.length;t--;)if(s[t].href===n)return e();setTimeout(function(){u(e)})};return l.addEventListener&&l.addEventListener("load",r),l.onloadcssdefined=u,u(r),l};"undefined"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}("undefined"!=typeof global?global:this);</script>
    
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></ script>
    <![endif]-->
    
    <script>loadCSS("<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css");</script>
    <noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" /></noscript>
        
    <script>
        (function () { 
            document.documentElement.className = document.documentElement.className.replace('no-js','js');
        })();
    </script>
    
</head>
    
<body>
    
    <div class="wrapper">
        
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col col-md-12">
                        <a class="toggle-full-nav" onclick="toggleMainNav()">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </a>
                        <nav class="full-nav">
                            <a href="<?php echo home_url(); ?>" class="logo-home">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" width="90" />
                            </a>
                            <div class="menu">
                                <!-- Use wp_nav_menu or markup below -->
                                <?php //wp_nav_menu( array('menu' => 'Main Menu') ); ?>
                                <div class="menu-main-menu-container">
                                    <ul class="menu">
                                        <li class="menu-item">
                                            <a href="#">Link</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End -->
                            </div>
                        </nav>
                        <form class="search-form clearfix" role="search" action="<?php echo site_url('/'); ?>">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="text" name="s" placeholder="Search" class="search-text">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <main class="main">
        
