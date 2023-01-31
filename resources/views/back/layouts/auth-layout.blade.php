
<!doctype html>
<html lang="en">

    
<head>
    
        <meta charset="utf-8">
        <title>@yield('pageTitle')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="back/assets/images/favicon.ico">
        
        <!-- Bootstrap Css -->
        <link href="/back/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="/back/assets/css/icons.min.css" rel="stylesheet" type="text/css">

          @stack('stylesheets')
           @livewireStyles
        <!-- App Css-->
        <link href="/back/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
   
    
    </head>

    <body class="account-pages">
    @yield('content')
        <!-- Begin page -->
        

    

                <!-- JAVASCRIPT -->
                <script src="/back/assets/libs/jquery/jquery.min.js"></script>
                <script src="/back/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
                <script src="/back/assets/libs/metismenu/metisMenu.min.js"></script>
                <script src="/back/assets/libs/simplebar/simplebar.min.js"></script>
                  @stack('scripts')
                  @livewireScripts
                <script src="/back/assets/libs/node-waves/waves.min.js"></script>


        <script src="/back/assets/js/app.js"></script>

    </body>


</html>
