<div class="container">
    <div class="main-body">

        <nav aria-label="breadcrumb" class="main-breadcrumb">

        </nav>

        <div class="row gutters-sm">
            
            <div class="col-md-8 offset-2">
                <div class="card mb-3">
                    <form action="/simpan_perubahan _profile/{{$user->id}}" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3 d-flex align-items-center">
                                    <h6 class="mb-0">Nama</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{$user->name}}" name="name">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3 d-flex align-items-center">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{$user->email}}" name="email">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3 d-flex align-items-center">
                                    <h6 class="mb-0">No Hp</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{$user->no_hp}}" name="no_hp">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3 d-flex align-items-center">
                                    <h6 class="mb-0">Telepon</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{$user->telepon}}" name="telepon">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3 d-flex align-items-center">
                                    <h6 class="mb-0">Alamat</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="{{$user->address}}" name="address">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3 d-flex align-items-center">
                                    <h6 class="mb-0">Foto Profile</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="file" class="form-control" value="{{$user->profile_photo_path}}" name="profile_photo_path">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " target="__blank" type="submit ">Simpan Perubahan</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript"></script>
