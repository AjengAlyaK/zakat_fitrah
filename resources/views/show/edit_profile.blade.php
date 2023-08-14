<!DOCTYPE html>
<html lang="en">
<head>
<base href="/public">
@include('show.head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<title>Profile</title>
<style type="text/css">
    body {
        /* margin-top: 20px; */
        color: #1a202c;
        text-align: left;
        background-color: #f7f7f7;
    }

    .main-body {
        padding: 15px;
    }

    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .gutters-sm {
        margin-right: -8px;
        margin-left: -8px;
    }

    .gutters-sm>.col,
    .gutters-sm>[class*=col-] {
        padding-right: 8px;
        padding-left: 8px;
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
    }

    .bg-gray-300 {
        background-color: #e2e8f0;
    }

    .h-100 {
        height: 100% !important;
    }

    .shadow-none {
        box-shadow: none !important;
    }

</style>
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
                    <h2>Edit Profile</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="x_content">
                    @include('show.ubah_profile')
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
    </div>
    </div>
    @include('show.script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
