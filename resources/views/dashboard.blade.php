<!DOCTYPE html>
<html lang="en">
<head>
@include('show.head')
<title>Dashboard</title>
</head>

<body class="nav-md footer_fixed"> 
{{-- Ajeng Alya Kartika Sari (217006056) --}}
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="/dashboard" class="site_title"><i class="fa fa-paw" aria-hidden="true"></i><span> Zakat Fitrah</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
            {{-- href="{{ route('profile.show') }}" --}}
            <a href="/profile"><img src="/images/{{Auth::user()->profile_photo_path}}" alt="..." class="img-circle profile_img"></a>
        {{-- <img src="gentelella/production/images/admin2.jpg" alt="..." class="img-circle profile_img"> --}}
        </div>
        <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{Auth::user()->name}}</h2>
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
@include('show.table')



<!-- /page content -->


<!-- footer content -->
<!-- /footer content -->
</div>
</div>
@include('show.script')
</body>
</html>
