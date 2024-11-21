@extends('layout.main')
@section('container')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <strong>UBAH DATA</strong>
            </div>
            <div class="card-body">
                <br />
                <form action="{{ route('post.update', $post) }}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama Koi</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama .."
                            value="{{ old('nama', $post->nama) }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        @if ($post->gambar)
                            <img src="{{ $post->image() }}" alt="Current Image" height="100">
                        @endif
                        <input type="file" name="gambar" class="form-control">
                        @error('gambar')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Isi Postingan</label>
                        <textarea class="form-control" name="isi" cols="30" rows="10">{{ old('isi', $post->isi) }}</textarea>
                        @error('isi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-success" value="Simpan">
                        <a href="{{ route('post.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
