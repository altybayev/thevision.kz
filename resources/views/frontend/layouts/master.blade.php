<!doctype html>
<html lang="en" class="">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>@yield('title', 'A7 Consult')</title>
    
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="//fonts.googleapis.com" crossorigin="">
    
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- <meta name="robots" content="noindex"> -->
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="A7 Consultant">
    <meta property="og:url" content="">
    <!-- <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- META DATA -->
    <script type="text/javascript">
    var googleAnalytics = "";
    var ipAnonymization = false;
    var googleRemarketing = "";
    var googleTagManager = "";
    var facebookRemarketing = "";
    var yandexMetrika = "";
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

    @yield('styles_import')

    <style>
        @yield('styles_body')
    </style>
</head>

<body class="" style="">    

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32oNMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    @yield('scripts_import')

    <script type="text/javascript">
        @yield('scripts_global')

        $(document).ready(function() {
            @yield('scripts_body')
        })
    </script>

</body>
</html>