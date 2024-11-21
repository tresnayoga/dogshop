@extends('layout.main')
@section('container')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <strong>TAMBAH DATA</strong>
            </div>
            <div class="card-body">
                
                <br />
                <form action="{{ route('post.store') }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group">
                        <label>Nama Koi</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama ..">

                        @if ($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control">

                        @if ($errors->has('gambar'))
                            <div class="text-danger">
                                {{ $errors->first('gambar') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Isi Postingan</label>
                        <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea>

                        @if ($errors->has('isi'))
                            <div class="text-danger">
                                {{ $errors->first('isi') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <a href="{{ route('post.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </form>
@endsection
