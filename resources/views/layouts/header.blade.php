<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{!!url('public/images/logo.png')!!}" alt="logo" width="50" height="20">

    <title>@yield('title_tag')</title>
    <!-- BEGIN: SOURCE CODE NEW GUI -->
    @yield('add_style')
    <base href="{{asset('')}}">
    <link href="public/watch/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="public/watch/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="public/watch/css/stylesheet.css" rel="stylesheet">
    <link href="public/watch/css/responsive.css" rel="stylesheet">
    <link href="public/watch/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="public/watch/owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
    <style>
    #gmap_canvas img{max-width:none!important;background:none!important}
    </style>
    <!-- add css at here -->
    
    <!-- the end -->
    <link rel="stylesheet" href="public/watch/css/custom.css" rel="stylesheet">
    <!-- THE END --> 
  </head>