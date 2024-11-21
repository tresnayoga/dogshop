<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where('nama', 'like', '%' . $request->get('q') . '%')->paginate(5)->withQueryString();
        $data = [
            'title' => 'Koi',
            'posts' => $posts,
            'q' => $request->get('q'),
        ];
        return view('post.index', $data);
    }

    public function create()
    {
        $data['title'] = 'Tambah Post';
        return view('post.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $post = new Post([
            'nama' => $request->nama,
            'isi' => $request->isi,
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $filename = rand(1000, 9999) . $gambar->getClientOriginalName();
            $gambar->move('images/post/', $filename);
            $post->gambar = $filename;
        }

        $post->save();

        return redirect()->route('post.index')->with('msg', 'Data berhasil ditambah');
    }

    public function edit(Post $post)
    {
        $data['title'] = 'Ubah Post';
        $data['post'] = $post;
        return view('post.edit', $data);
    }

    public function update(Request $request, Post $post)
    {
    
        $request->validate([
            'nama' => 'required',
        ]);

        $post->nama = $request->nama;
        $post->isi = $request->isi;

        if ($request->hasFile('gambar')) {
            $post->delete_image();
            $gambar = $request->file('gambar');
            $filename = rand(1000, 9999) . $gambar->getClientOriginalName();
            $gambar->move('images/post/', $filename);
            $post->gambar = $filename;
        }

        $post->save();

        return redirect()->route('post.index')->with('msg', 'Data berhasil diubah');
    }

    public function destroy(Post $post)
    {
        $post->delete_image();
        $post->delete();
        return redirect()->route('post.index')->with('msg', 'Data berhasil dihapus');
    }
}
