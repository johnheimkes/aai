<!DOCTYPE html>
<html lang="en" xml:lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>AAI Business Services &mdash; Home</title>
    <meta name="Robots" content="index,all" />
    <meta name="Keywords" content="Key Words" />
    <meta name="Description" content="Descritpion" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" media="screen">
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.2.72.js"></script>
    
    <script type="text/javascript"> 
    $(document).ready(function() {
        $('.slideshow').cycle({
    		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    	});
    });
    </script>
    
  </head>
  <body>
    <div id="wrapper">
      <div id="header">
        <h1><a href="<?php bloginfo('url') ?>">AAI Business Services</a></h1>
        <div id="search">
            <form action="?s" method="post" accept-charset="utf-8">
              <fieldset>
                <label for="search_field">Search</label><input type="text" name="search" value="" id="search_field" />
                <input type="submit" value="Search" id="search_button" />
              </fieldset>
            </form>
        </div>
        <ul id="nav">
          <li class="active">
            <a class="dropdown">AAI Secure Docs</a>
            <ul>
              <li><a href="<?php bloginfo('url') ?>/?page_id=40">Shredding and Recycling</a></li>
              <li><a href="<?php bloginfo('url') ?>/?page_id=42">Scanning and Data Entry</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php bloginfo('url') ?>/?page_id=26">Manufacturing and Production</a>
          </li>
          <li>
            <a href="<?php bloginfo('url') ?>/?page_id=16">Janitorial and Food Service</a>
          </li>
          <li><a href="<?php bloginfo('url') ?>/?page_id=3">On-site Employment</a></li>
          <!-- <li><a href="#">Subscribe</a></li> -->
        </ul>
      </div>
