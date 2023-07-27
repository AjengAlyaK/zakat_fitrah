<!-- page content -->
<div class="right_col" role="main">
<div class="">
    <div class="page-title">
    <div class="title_left">
        <a href="/tambah_muzaki" class="btn btn-secondary">Tambah</a>
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
            <h2>Data Muzaki</h2>
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
            <table class="table table-striped projects table-hover">
            <thead>
                <tr>
                <th style="width: 1%">#</th>
                <th style="width: 20%">Nama Muzaki</th>
                <th>Jumlah Tanggungan</th>
                <th>Keterangan</th>
                <th style="width: 20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($muzaki as $m)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$m->nama_muzakki}}</td>
                    <td>{{$m->jumlah_tanggungan}}</td>
                    {{-- <td>{{$m->kategori_mustahik_id}}</td> --}}
                    <td>{{$m->nama_kategori}}</td>
                    <td>
                        {{-- <a href="" onclick="alert({{$m->nama_muzaki}})" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a> --}}
                        <!-- Trigger the modal with a button -->
                        <a href="/edit_data_muzaki/{{$m->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                        <a onclick="return confirm('Apakah data akan dihapus ?')" href="/delete_data_muzaki/{{$m->id}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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