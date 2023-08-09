<!DOCTYPE html>
<html lang="en">
<head>
@include('show.head')
<title>Laporan Pengumpulan Zakat Fitrah</title>
</head>

<body class="nav-md ">
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="#" class="site_title"><span> Zakat Fitrah</span></a>
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
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        <div class="title_left">
            <a href="/print-laporan-pengumpulan" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Print </a>
        </div>
    
        <div class="title_right">
            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
                
            </div>
            </div>
        </div> 
        </div>
        
        <div class="clearfix"></div>
    
        <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
            <div class="x_title">
                <h2>Laporan Pengumpulan Zakat Fitrah</h2>
                <ul class="nav navbar-right panel_toolbox">
                
                </li>
                
                
                </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <!-- start project list -->
                <table class="table table-striped projects table-hover">
                <thead>
                    <tr>
                    <th style="width: 20%">Total Muzakki</th>
                    <th>Total Jiwa</th>
                    <th>Total Beras</th>
                    <th>Total Uang</th>
                    </tr>
                </thead>
                <tbody>
                        <td>{{$muzakki->count()}}</td>
                        <td>{{$j_t}}</td>
                        <td>{{$b_b}}</td>
                        <td>{{$b_u}}</td> 
                </tbody>
                </table>
                <!-- end project list -->
    
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
