@extends('layout.main')
@section('container')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <strong>TAMBAH DATA</strong>
            </div>
            <div class="card-body">
                
                <br />
                <form action="{{ route('user.store') }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_user" class="form-control" placeholder="Nama ..">

                        @if ($errors->has('nama_user'))
                            <div class="text-danger">
                                {{ $errors->first('nama_user') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username ..">

                        @if ($errors->has('username'))
                            <div class="text-danger">
                                {{ $errors->first('username') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Password ..">

                        @if ($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <a href="{{ route('user.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </form>
@endsection
