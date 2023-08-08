<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('show.head')
<title>Kategori Mustahik</title>
</head>

<body class="nav-md ">
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="/dashboard" class="site_title"><span> Zakat Fitrah </span></a>
    </div>

    <div class="clearfix"></div>
    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
        <a href="/profile"><img src="gentelella/production/images/admin2.jpg" alt="..." class="img-circle profile_img"></a>
        </div>
        <div class="profile_info">
        <span>Welcome,</span>
        <h2>Admin</h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    @include('show.sidebar_menu')
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
@include('show.top_nav')
<!-- /top navigation -->

<!-- page content -->

@include('show.data_kategori_mustahik')


<!-- /page content -->


<!-- footer content -->
<!-- /footer content -->
</div>
</div>
@include('show.script')
</body>
</html>
