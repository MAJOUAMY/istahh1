<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        admin
    </title>
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/charts-c3/plugin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.min.css') }}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">

</head>

<body>
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48"
                    alt="Aero"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Main Search -->
    <div id="search">
        <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
        <form>
            <input type="search" value="" placeholder="Search..." />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>


    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <div class="navbar-brand">
            <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
            <a href="index.html"><img src="assets/images/logo.svg" width="25" alt="Aero"><span
                    class="m-l-10">Aero</span></a>
        </div>
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info">
                        <a class="image" href="profile.html"><img src="assets/images/profile_av.jpg"
                                alt="User"></a>
                        <div class="detail">
                            <h4>Michael</h4>
                            <small>Super Admin</small>
                        </div>
                    </div>
                </li>
                <li class="active open"><a href="index.html"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                </li>

                <li> <a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-assignment"></i><span>Formateur</span></a>
                    <ul class="ml-menu">
                        <li><a href="project-list.html">Projects List</a></li>
                        <li><a href="taskboard.html">Taskboard</a></li>
                        <li><a href="ticket-list.html">Ticket List</a></li>
                        <li><a href="ticket-detail.html">Ticket Detail</a></li>
                    </ul></li>

                <li> <a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                    <ul class="ml-menu">
                        <li><a href="blog-dashboard.html">Dashboard</a></li>
                        <li><a href="blog-post.html">Blog Post</a></li>
                        <li><a href="blog-list.html">List View</a></li>
                        <li><a href="blog-grid.html">Grid View</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>








            </ul>
        </div>
    </aside>

    <section class="content">
        <div class="">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard 1</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                class="zmdi zmdi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            @yield('main')
        </div>
    </section>








    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js (jquery.v3.2.1, Bootstrap4 js) -->
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
    <script src="{{ asset('assets/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->
    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>

    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/index.js') }}"></script>

</body>

</html>
