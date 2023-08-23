<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <title>Bayar Zakat</title>
    @include('show.head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body class="nav-md footer_fixed">
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
                                <li class="active"><a href="/muzaki_sudah_bayar"><i class="fa fa-credit-card-alt"></i>
                                        Pengumpulan Zakat Fitrah <span class="fa"></span></a>
                                </li>
                                <li><a href="/warga_sudah_menerima_zakat"><i class="fa fa-share-alt"></i> Distribusi
                                        Zakat Fitrah Warga <span class="fa"></span></a>
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
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Edit Pengumpulan Zakat Fitrah</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><a href="/muzaki_sudah_bayar" class="btn btn-secondary">Kembali</a></h2>
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
                                    <script>
                                        var x, y;

                                        function mult(value) {
                                            x = 45000 * value;
                                            y = 2.5 * value;
                                            document.getElementById("bayar_uang").value = x;
                                            document.getElementById("bayar_beras").value = y;
                                        }

                                        function disableJenisBayar(bayar) {
                                            if (bayar.value == "bayar uang") {
                                                document.getElementById("bayar_beras").disabled = true;
                                                // document.getElementById('bayar_beras').style.visibility="hidden";
                                                // document.getElementById('bayar_uang').style.visibility="visible";
                                                document.getElementById('bayar_beras').style.color = "#e9ecef";
                                                document.getElementById('bayar_uang').style.color = "black";
                                                document.getElementById("bayar_uang").disabled = false;
                                            } else if (bayar.value == "bayar beras") {
                                                document.getElementById("bayar_uang").disabled = true;
                                                // document.getElementById('bayar_uang').style.visibility="hidden";
                                                // document.getElementById('bayar_beras').style.visibility="visible";
                                                document.getElementById('bayar_beras').style.color = "black";
                                                document.getElementById('bayar_uang').style.color = "#e9ecef";
                                                document.getElementById("bayar_beras").disabled = false;
                                            }
                                        }

                                        var a = document.getElementById("jenis_bayar").value;
                                        if (a == "bayar uang") {
                                            document.getElementById("bayar_beras").reset;
                                        } else if (a == "bayar beras") {
                                            document.getElementById("bayar_uang").reset;
                                        }
                                    </script>
                                    <form action="/edit_data_muzaki_bayar/{{ $m_bayar->id }}" method="post"
                                        id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        @csrf

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="muzakki_id">Muzzaki Id<span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input value="{{ $m_bayar->muzakki_id }}" name="muzakki_id"
                                                    type="text" id="muzakki_id" required="required"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="nama_KK">Nama KK<span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input value="{{ $m_bayar->nama_KK }}" name="nama_KK" type="text"
                                                    id="nama_KK" required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="jumlah_tanggungan"
                                                class="col-form-label col-md-3 col-sm-3 label-align">Jumlah
                                                Tanggungan</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input value="{{ $m_bayar->jumlah_tanggungan }}"
                                                    name="jumlah_tanggungan" id="jumlah_tanggungan" class="form-control"
                                                    type="number">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="jenis_bayar">Jenis Bayar<span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select name="jenis_bayar" id="jenis_bayar"
                                                    onchange="disableJenisBayar(this)">
                                                    <option value="{{ $m_bayar->jenis_bayar }}">
                                                        {{ $m_bayar->jenis_bayar }}</option>
                                                    <option value="bayar beras">Bayar Beras</option>
                                                    <option value="bayar uang">Bayar Uang</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                for="jumlah_tanggunganyangdibayar">Jumlah Tanggungan yang Dibayar<span
                                                    class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input onkeyup="mult(this.value);"
                                                    value="{{ $m_bayar->jumlah_tanggungan }}"
                                                    name="jumlah_tanggunganyangdibayar" type="number"
                                                    id="jumlah_tanggunganyangdibayar" required="required"
                                                    class="form-control">
                                                {{-- value="{{$m_bayar->jumlah_tanggungan}}" --}}
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="bayar_beras"
                                                class="col-form-label col-md-3 col-sm-3 label-align">Bayar
                                                Beras</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input value="{{ $m_bayar->bayar_beras }}" name="bayar_beras"
                                                    id="bayar_beras" class="form-control" type="float">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="bayar_uang"
                                                class="col-form-label col-md-3 col-sm-3 label-align">Bayar Uang</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input value="{{ $m_bayar->bayar_uang }}"name="bayar_uang"
                                                    id="bayar_uang" class="form-control" type="number">
                                                {{-- <input name="bayar_uang" id="bayar_uang" class="form-control" type="number"> --}}
                                            </div>
                                        </div>

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
