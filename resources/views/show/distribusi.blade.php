<!DOCTYPE html>
<html lang="en">

<head>
    @include('show.head')
    <title>Distribusi Zakat Fitrah Mustahik Warga</title>
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
                            <a href="/profile">
                                <img src="/images/{{ Auth::user()->profile_photo_path }}"" alt="..."
                                class="img-circle profile_img">
                            </a>
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Admin</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu ">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="/dashboard"><i class="fa fa-user"></i> Master Data Muzaki <span
                                            class="fa"></span></a>
                                </li>
                                <li><a href="/kategori_mustahik"><i class="fa fa-user"></i> Master Data Kategori
                                        Mustahik <span class="fa"></span></a>
                                </li>
                                <li><a href="/muzaki_sudah_bayar"><i class="fa fa-credit-card-alt"></i> Pengumpulan
                                        Zakat Fitrah <span class="fa"></span></a>
                                </li>
                                <li class="active"><a href="/warga_sudah_menerima_zakat"><i class="fa fa-share-alt"></i>
                                        Distribusi Zakat Fitrah Warga <span class="fa"></span></a>
                                </li>
                                <li><a href="/distribusi_zfm"><i class="fa fa-share-alt"></i> Distribusi Zakat Fitrah
                                        Mustahik<span class="fa"></span></a>
                                </li>
                                <li><a href="/laporan_pengumpulan"><i class="fa fa-file"></i> Laporan Pengumpulan Zakat
                                        Fitrah<span class="fa"></span></a>
                                </li>
                                <li><a href="/laporan_distribusi"><i class="fa fa-file"></i> Laporan Distribusi Zakat
                                        Fitrah<span class="fa"></span></a>
                                </li>
                            </ul>
                        </div>

                    </div>
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
                            <a href="/warga_sudah_menerima_zakat" class="btn btn-secondary">View</a>
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
                                    <h2>Data Mustahik Warga</h2>
                                    {{-- @foreach ($muzaki as $m)
                    <h3>{{dd($m->kategori_mustahik)}}</h3>
                @endforeach --}}
                                    {{-- @foreach ($muzaki as $item)
                <h3>{{$item->bayar_zakat}}</h3>
                @endforeach  --}}
                                    <ul class="nav navbar-right panel_toolbox">

                                        </li>


                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    @if (session('status'))
                                        <div class="alert alert-success alert-dismissible " role="alert">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <strong>{{ session('status') }}</strong>
                                        </div>
                                    @endif
                                    <!-- start project list -->
                                    <table class="table table-striped projects table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width: 1%">#</th>
                                                <th style="width: 20%">Nama_Muzaki</th>
                                                <th>Jumlah Tanggungan</th>
                                                <th>Kategori</th>
                                                <th>Hak Beras</th>
                                                <th>Hak Uang</th>
                                                <th>Keterangan</th>
                                                <th style="width: 20%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($muzaki as $m)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $m->nama_muzakki }}</td>
                                                    <td>{{ $m->jumlah_tanggungan }}</td>
                                                    <td>{{ $m->kategori_mustahik->nama_kategori }}</td>
                                                    <td>{{ $m->kategori_mustahik->jumlah_hak }}</td>
                                                    <td>{{ $m->kategori_mustahik->hak_uang }}</td>
                                                    <td style="color:green; font-style: italic">{{ $m->keterangan2 }}
                                                    </td>
                                                    <td>
                                                        <a href="/tambah_distribusi/{{ $m->id }}"
                                                            class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>
                                                            Tambah </a>
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
