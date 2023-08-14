<div class="container">
    <div class="main-body">

        <nav aria-label="breadcrumb" class="main-breadcrumb">

        </nav>

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <form action="">
                                <img src="gentelella/production/images/admin2.jpg" alt="Admin" class="rounded-circle"
                                    width="150">
                                <div class="mt-3">
                                    <h4>{{ $user->name }}</h4>
                                    {{-- <p class="text-secondary mb-1">Full Stack Developer</p> --}}
                                    <p class="text-muted font-size-sm">{{ $user->address }}</p>
                                    <label style="cursor:pointer" for="input_image" class="text-primary mb-3"><i
                                            class="bi bi-upload"></i><span class="ml-2">pilih foto</span></label><br>
                                    <input name="profile_photo_path" id="input_image" class="d-none" type="text"
                                        class="" />
                                    <input type="submit" class="btn btn-primary" value="Ubah Foto">
                                    {{-- <button class="btn btn-outline-primary">Message</button> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nama</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->name }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">{{ $user->email }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">No Hp</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->nohp }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Telepon</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->telepon }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Alamat</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->address }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-info " target="__blank"
                                    href="/edit_profile/{{$user->id}}">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript"></script>
