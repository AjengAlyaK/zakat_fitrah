<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <title>Edit Mustahik Lainnya</title>
    @include('show.head')
</head>

<body class="nav-md footer_fixed">
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
							<a href="/profile"><img src="/images/{{ Auth::user()->profile_photo_path }}" alt="..."
                                class="img-circle profile_img"></a>
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
                                <li><a href="/warga_sudah_menerima_zakat"><i class="fa fa-share-alt"></i> Distribusi
                                        Zakat Fitrah Warga <span class="fa"></span></a>
                                </li>
                                <li class="active"><a href="/distribusi_zfm"><i class="fa fa-share-alt"></i> Distribusi
                                        Zakat Fitrah Mustahik<span class="fa"></span></a>
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
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Edit Data Mustahik Lainnya</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><a href="/distribusi_zfm" class="btn btn-secondary">Kembali</a></h2>

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
                                    <form action="/save_perubahan_ml/{{ $ml->id }}" method="post" id="demo-form2"
                                        data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="nama">Nama <span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input value="{{ $ml->nama }}" name="nama" type="text"
                                                    id="nama" required="required" class="form-control ">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="jumlah_tanggungan">Kategori<span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="kategori_mustahik_id" id="">
                                                    <option value="{{ $ml->kategori_mustahik_id }}">
                                                        {{ $ml->kategori_mustahik_id }}</option>
                                                    <option value="5">Amilin</option>
                                                    <option value="6">Fisabilillah</option>
                                                    <option value="7">Mualaf</option>
                                                    <option value="8">Ibnu Sabil</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="item form-group"> --}}
                                        {{-- <label class="col-form-label col-md-3 col-sm-3 label-align" for="jumlah_tanggungan">Jumlah Tanggungan <span class="required"></span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<select name="kategori" id="">
                                                    <option value="{{$ml->kategori}}">{{$ml->kategori}}</option>
													<option value="Amilin">Amilin</option>
                                                    <option value="Fisabilillah">Fisabilillah</option>
                                                    <option value="Mualaf">Mualaf</option>
                                                    <option value="Ibnu Sabil">Ibnu Sabil</option>
												</select>
											</div> --}}
                                        {{-- </div> --}}
                                        {{-- <div class="item form-group">
											<label for="hak" class="col-form-label col-md-3 col-sm-3 label-align">Hak</label>
											<div class="col-md-6 col-sm-6 ">
												<input value="{{$ml->hak}}" name="hak" type="text" id="hak" required="required" class="form-control ">
											</div>
										</div> --}}

                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /page content -->

                    <!-- footer content -->

                    <!-- /footer content -->
                </div>
            </div>

            @include('show.script')
</body>

</html>
