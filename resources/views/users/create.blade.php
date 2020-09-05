@extends("layouts.global")

@section("title") Form Tambah Pengguna @endsection

@section("content")


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-text" data-background-color="green">
                    <h4 class="card-title">Form Tambah Pengguna</h4>
                </div>
                <div class="card-content">
                    <div class="col-12 text-right">
                        <a href="{{route('users.index')}}" class="btn btn-success">List Pengguna <div class="ripple-container"></div></a>
                    </div>
                    <form enctype="multipart/form-data" class="form-horizontal"  action="{{route('users.store')}}" method="POST">

                        @csrf
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Nama</label>
                            <div class="col-sm-7">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input class="form-control" placeholder="Nama Lengkap" type="text" name="name"  required="true" aria-required="true">
                                    <span class="material-input"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">NIP</label>
                            <div class="col-sm-7">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input class="form-control" placeholder="Nomor Induk Pegawai" type="text" name="username"  required="true" number="true">
                                    <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Email</label>
                            <div class="col-sm-7">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input class="form-control" placeholder="Alamat Email"  type="text" name="email" email="true">
                                <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Role</label>
                            @if(!empty($roles))
                                @foreach ($roles as $role)
                                    <div class="col-sm-10 checkbox-radios">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="roles[]"  id="roles" value="{{ $role['name'] }}">{{ $role['name'] }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">No HP</label>
                            <div class="col-sm-7">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" type="text" placeholder="No HP"  name="phone"  number="true">
                                <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Alamat Rumah</label>
                            <div class="col-sm-7">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label"></label>
                                    <input class="form-control" placeholder="Alamat Rumah"  type="text" name="address" id="address" >
                                <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Password</label>
                            <div class="col-sm-7">
                                <div class="form-group label-floating column-sizing is-empty">
                                    <label class="control-label"></label>
                                    <input class="form-control"  placeholder="password"  type="password"  name="password" id="password">
                                <span class="material-input"></span></div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 label-on-left">Password Confirmation</label>
                            <div class="col-sm-7">
                                <div class="form-group label-floating column-sizing is-empty">
                                    <label class="control-label"></label>
                                    <input class="form-control" placeholder="password confirmation" type="password" name="password_confirmation" id="password_confirmation">
                                <span class="material-input"></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 label-on-left">Password Confirmation</label>
                            <div class="col-md-4 col-sm-4">
                                <!-- <legend>Regular Image</legend> -->
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="{{asset('material/img/placeholder.jpg')}}" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input id="avatar"  name="avatar"  type="file">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Save"/>
                    </form>
                <div>
            </div>
        </div>
        <!-- end col-md-12 -->
    </div>
    <!-- end row -->
</div>   

@endsection