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
    
    <script>!function(e){"use strict";var n=function(n,t,o){function i(e){if(a.body)return e();setTimeout(function(){i(e)})}function r(){l.addEventListener&&l.removeEventListener("load",r),l.media=o||"all"}var d,a=e.document,l=a.createElement("link");if(t)d=t;else{var f=(a.body||a.getElementsByTagName("head")[0]).childNodes;d=f[f.length-1]}var s=a.styleSheets;l.rel="stylesheet",l.href=n,l.media="only x",i(function(){d.parentNode.insertBefore(l,t?d:d.nextSibling)});var u=function(e){for(var n=l.href,t=s.length;t--;)if(s[t].href===n)return e();setTimeout(function(){u(e)})};return l.addEventListener&&l.addEventListener("load",r),l.onloadcssdefined=u,u(r),l};"undefined"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}("undefined"!=typeof global?global:this);</script>
    
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></ script>
    <![endif]-->
    
    <script>loadCSS("<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css");</script>
    <noscript><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css"</noscript>
        
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
                                <?php wp_nav_menu( array('menu' => 'Main Menu') ); ?>
                            </div>
                        </nav>
                        <form class="search-form clearfix" role="search" action="<?php echo site_url('/'); ?>">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="search" name="s" placeholder="Search" class="search-text">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <main class="main">
        
