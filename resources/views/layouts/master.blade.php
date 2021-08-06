<!DOCTYPE html>
<html>

<head>
   @include('pertials.meta')
    <title>@yield('title','Page Name')</title>
    <!-- Favicon-->


    @include('pertials.link')



</head>
<body class="theme-red">
    <!-- Page Loader -->
 @include('pertials.page-loader')
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->


   @include('pertials.search-bar')


    <!-- #END# Search Bar -->
    <!-- Top Bar -->


    @include('pertials.nav')



    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->


    @include('pertials.left-sidebar')



        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        @include('pertials.right-sidebar')
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">


    @yield('main_content')




        </div>
    </section>

    <!-- Jquery Core Js -->


   @include('pertials.script')



</body>

</html>
