<!DOCTYPE html>
<html lang="en">
<head>
@include('show.head')
<title>Laporan Distribusi Zakat Fitrah</title>
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
            <a href="/profile"><img src="/images/{{Auth::user()->profile_photo_path}}" alt="..." class="img-circle profile_img"></a>
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
            <a href="/print-laporan-distribusi" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Print </a>
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
                <h2>Laporan Distribusi Zakat Fitrah</h2>
                <ul class="nav navbar-right panel_toolbox">
                
                </li>
                
                
                </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table class="table table-striped projects table-hover">
                <thead>
                    <tr>
                    <th style="width: 1%">#</th>
                    <th style="width: 20%">Kategori Mustahik</th>
                    <th>Hak Beras</th>
                    <th>Hak Uang</th>
                    <th>Jumlah KK</th>
                    <th>Total Beras</th>
                    <th>Total Uang</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{$r1a}}</td>
                        <td>{{$r1b}}</td>
                        <td>{{$r1c}}</td>
                        <td>{{$r1d}}</td>
                        <td>{{$r1b * $r1d}}</td>
                        <td>{{$r1c * $r1d}}</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>{{$r2a}}</td>
                        <td>{{$r2b}}</td>
                        <td>{{$r2c}}</td>
                        <td>{{$r2d}}</td>
                        <td>{{$r2b * $r2d}}</td>
                        <td>{{$r2c * $r2d}}</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>{{$r3a}}</td>
                        <td>{{$r3b}}</td>
                        <td>{{$r3c}}</td>
                        <td>{{$r3d}}</td>
                        <td>{{$r3b * $r3d}}</td>
                        <td>{{$r3c * $r3d}}</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>{{$r5a}}</td>
                        <td>{{$r5b}}</td>
                        <td>{{$r5c}}</td>
                        <td>{{$r5d}}</td>
                        <td>{{$r5b * $r5d}}</td>
                        <td>{{$r5c * $r5d}}</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>{{$r6a}}</td>
                        <td>{{$r6b}}</td>
                        <td>{{$r6c}}</td>
                        <td>{{$r6d}}</td>
                        <td>{{$r6b * $r6d}}</td>
                        <td>{{$r6c * $r6d}}</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>{{$r7a}}</td>
                        <td>{{$r7b}}</td>
                        <td>{{$r7c}}</td>
                        <td>{{$r7d}}</td>
                        <td>{{$r7b * $r7d}}</td>
                        <td>{{$r7c * $r7d}}</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>{{$r8a}}</td>
                        <td>{{$r8b}}</td>
                        <td>{{$r8c}}</td>
                        <td>{{$r8d}}</td>
                        <td>{{$r8b * $r8d}}</td>
                        <td>{{$r8c * $r8d}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td>{{$r1d + $r2d + $r3d + $r5d + $r6d + $r7d + $r8d}}</td>
                        <td>{{($r1b * $r1d)+($r2b * $r2d)+($r3b * $r3d)+($r5b * $r5d)+($r6b * $r6d)+($r7b * $r7d)+($r8b * $r8d)}}</td>
                        <td>{{($r1c * $r1d)+($r2c * $r2d)+($r3c * $r3d)+($r5c * $r5d)+($r6c * $r6d)+($r7c * $r7d)+($r8c * $r8d)}}</td>
                    </tr>
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
</div>
</div>
@include('show.script')
</body>
</html>
