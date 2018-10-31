<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <!-- need markup style decision for self closing tags -->
  <meta charset="utf-8">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="viewport" content="width="device-width, initial-scale=1.0">
  <meta http-equiv="cleartype" content="on">
  <meta name="title" content="Mary Mcdonnell | Artist in Slane
  <?php
       if (perch_layout_has('title')) {
           echo ( " | ");
           perch_layout_var('title'); 
       }
  ?>" />
  <link rel="shortlink" href="http://marymcdonnell-slane.com/" />
  <link rel="canonical" href="http://marymcdonnell-slane.com/"" />
  <!-- Make sure relevant meta tags are added for every page not just duplicating index: add keywords and phrases that are relevant and correspond to the text on that specific page -->
  <meta name="description" content="" />
  <!-- abstract tag used by some search engines to archive site -->
  <meta name="abstract"  content="" />
  <meta name="keywords" content="" />
  <title>Mary Mcdonnell | Artist in Slane
    <?php
       if (perch_layout_has('title')) {
           echo (' | ');
           perch_layout_var('title'); 
       }else{
         echo " | Hello";
       }
    ?> 
    </title> 

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
    <!-- respond js for media query support in ie8 follows immediately after css files-->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- global css -->
    <link rel="stylesheet" href="assets/css/style.test.css">

    <!-- jquery and carousel js and css for gallery only -->
    <?php // perch_layout('carousel/carousel.js') 
    if(perch_layout_has('carousel')) { ?>
    <!-- scripts -->
    <script defer src="assets/js/vendor/jquery.min.js"></script>
    <script defer src="assets/js/responsive-carousel.js"></script>
    <script defer src="assets/js/responsive-carousel.autoinit.js"></script>
    <script defer src="assets/js/globalenhance.js"></script>
    <?php } ?>
    <!-- css -->

</head>
<body>
  <!-- ACCESSIBILITY SKIP LINK -->
  <!-- <a href="#main" class="skip-link">Skip to main content</a>
  <a href="#main-content" class="visually-hidden focusable">Skip to main content</a> -->
  <a class="u-hide-element u-hide-element--focusable" href="#main-content">Skip to the main content</a>
  <!--  /accessibility skip link -->
  
