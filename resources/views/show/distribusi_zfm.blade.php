<!DOCTYPE html>
<html lang="en">
<head>
@include('show.head')
<title>Distribusi Zakat Fitrah Mustahik Lainnya</title>
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
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
        <div class="title_left">
            <a href="/tambah_mustahik_lainnya" class="btn btn-secondary">Tambah</a>
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
                <h2>Data Mustahik Lainnya Sudah Menerima Zakat</h2>
                <ul class="nav navbar-right panel_toolbox">
                
                </li>
                
                
                </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if (session('status'))
                <div class="alert alert-success alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>{{session('status')}}</strong>
                </div>
                @endif
    
                <!-- start project list -->
                <table class="table table-striped projects">
                <thead>
                    <tr>
                    <th style="width: 1%">#</th>
                    <th style="width: 20%">Nama Mustahik Lainnya</th>
                    <th>Kategori</th>
                    <th>Hak Beras</th>
                    <th>Hak Uang</th>
                    <th style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ml as $m)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$m->nama}}</td>
                        <td>{{$m->kategori_mustahik->nama_kategori}}</td>
                        <td>{{$m->kategori_mustahik->jumlah_hak}}</td>
                        <td>{{$m->kategori_mustahik->hak_uang}}</td>
                        <td>
                            {{-- <a href="" onclick="alert({{$ml->nama_muzaki}})" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a> --}}
                            <!-- Trigger the modal with a button -->
                            
                            <a href="/edit_data_ml/{{$m->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a onclick="return confirm('Apakah data akan dihapus ?')" href="/delete_data_ml/{{$m->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
                        </td>
                        </tr>
                    @endforeach
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



<!-- /page content -->


<!-- footer content -->
<!-- /footer content -->
</div>
</div>
@include('show.script')
</body>
</html>
