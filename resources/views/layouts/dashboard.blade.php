
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title') -  Habiclothiers admin panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Habi Clothiers" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('backend_assets') }}/images/favicon.ico">

        @include('partials.backend_partials.css')
    </head>

    <body class="dark-sidenav">
        <!-- Left Sidenav -->
        @include('partials.backend_partials.sidenav')
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            @include('partials.backend_partials.topnav')
            <!-- Top Bar End -->

            <!-- Page Content-->
            @yield('section')
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        @include('partials.backend_partials.scripts')
        
    </body>

</html>