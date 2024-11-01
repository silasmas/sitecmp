<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Portail web de l'église Centre Missionnaire Philadelphie" />
    <meta name="author" content="silasmas.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    @yield("metaPartage")

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} |{{ isset($titre) ? $titre : '' }}</title>
    {{-- @if (Route::current()->getName() == 'home')
    {{ __('miscellaneous.main_menu.home') }}
    @endif

    @if (Route::current()->getName() == 'about')
    {{ __('miscellaneous.main_menu.who_are_we.about') }}
    @endif

    @if (Route::current()->getName() == 'articles')
    @lang('miscellaneous.main_menu.news')
    @endif

    @if (Route::current()->getName() == 'events')
    @lang('miscellaneous.main_menu.events')
    @endif

    @if (Route::current()->getName() == 'news')
    {{ __('miscellaneous.main_menu.news') }}
    @endif

    @if (Route::current()->getName() == 'news_details')
    {{ __('miscellaneous.inner_page.news.details.title') }}
    @endif

    @if (Route::current()->getName() == 'contact')
    @lang('miscellaneous.main_menu.who_are_we.contact')
    @endif

    @if (Route::current()->getName() == 'projects')
    {{ __('miscellaneous.main_menu.projects') }}
    @endif --}}



    {{-- <link rel="shortcut icon" href="{{ asset('assets/site/img/favicon.png') }}" /> --}}
    @if($setting !== null && $setting->site_favicon!==null)
    <link rel="shortcut icon" href="{{ asset('storage/'.$setting->site_favicon) }}" />

    @endif

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/plugins-css.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/revolution/css/settings.css') }}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/typography.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/shortcodes/shortcodes.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/css/responsive.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/js/parsley/parsley.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/site/js/sweetalert/sweetalert.css') }}">
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PCXRNMCG');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCXRNMCG" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="{{ asset('assets/site/images/pre-loader/GIFT.gif') }}" alt="">
        </div>
