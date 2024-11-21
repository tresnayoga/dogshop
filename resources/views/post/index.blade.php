@extends('layout.main')
@section('container')
    @if (session('msg'))
        <p class="alert alert-success">{{ session('msg') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif
    <div class="card card-outline card primary">
        <div class="card-header">
            <form class="form-inline">
                <div class="form-group mr-1">
                    <input class="form-control" name="q" placeholder="Search..." value="{{ $q }}">
                </div>
                <div class="form-group mt-1">
                    <button class="btn btn-success">Search</button>
                    <a href="{{ route('post.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a>
                </div>
            </form>
        </div>
        <div class="panel-body">
            <table class="table table-border table-striped table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Koi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
                <?php $no = ($posts->currentPage() - 1) * $posts->perPage() + 1; ?>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $post->nama }}</td>
                        <td>
                            <img src="{{$post->image()}}" height="75">
                        </td>
                        <td>
                            <a href="{{ route('post.edit', $post) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>Ubah</a>
                            <form style="display: inline-block " action="{{ route('post.destroy', $post) }}" method="POST" onsubmit="return confirm('Hapus data')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="card-footer">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
