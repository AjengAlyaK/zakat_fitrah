<!DOCTYPE html>
<html lang="en">
<head>
<base href="/public">
@include('show.head')
<title>Muzaki View</title>
</head>

<body class="nav-md footer_fixed">
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        
        <a href="#" class="site_title"><span> Zakat Fitrah </span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
        <img src="gentelella/production/images/admin2.jpg" alt="..." class="img-circle profile_img">
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
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        </div>
        
        <div class="clearfix"></div>
    
        <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
            <div class="x_title">
                <h2>Muzaki View</h2>
                <ul class="nav navbar-right panel_toolbox">
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <h3></h3>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <footer>
        <div class="pull-right">
        </div>
        <div class="clearfix"></div>
    </footer>


<!-- /page content -->


<!-- footer content -->
<!-- /footer content -->
</div>
</div>
@include('show.script')
</body>
</html>
