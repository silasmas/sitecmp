<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name') }} | {{ isset($titre) ? $titre : '' }}</title>
<link rel="shortcut icon" href="{{ asset('assets/site/img/favicon.png') }}" />

<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">


<link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/plugins-css.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/site/revolution/css/settings.css') }}" media="screen" >
<link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/typography.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/shortcodes/shortcodes.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/responsive.css') }}" />

</head>

<body>
    <div class="wrapper">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="{{ asset('assets/site/images/pre-loader/GIFT.gif') }}" alt="">
</div>

