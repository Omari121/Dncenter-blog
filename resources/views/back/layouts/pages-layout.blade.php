
<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/veltrix/layouts/ui-carousel.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Jan 2023 18:06:05 GMT -->
<head>
    
        <meta charset="utf-8">
        <title>@yield('pageTitle')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="/back/assets/images/favicon.ico">
    
        <!-- Bootstrap Css -->
        <link href="/back/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="/back/assets/css/icons.min.css" rel="stylesheet" type="text/css">
          @stack('stylesheets')
     @livewireStyles
        <!-- App Css-->
        <link href="/back/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
  
    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            
           @include("back.layouts.inc.header-inc")

           @yield('pageHeader')
        
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
            <div class="page-content">
            <div class="container-fluid">
                @yield('content')
                </div>
                </div>
              </div>
                <!-- End Page-content -->
                
                
            
     
@include('back.layouts.inc.footer-inc')
