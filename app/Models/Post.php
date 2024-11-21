<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Post extends Model
{
    use HasFactory;

    protected $table = 'tb_koi';
    protected $primaryKey = 'id';

    protected $fillable = ['nama', 'gambar', 'isi'];

    public function image()
    {
        if ($this->gambar && file_exists(public_path('images/post/' . $this->gambar))) {
            return asset('images/post/' . $this->gambar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function delete_image()
    {
        if ($this->gambar && File::exists('images/post/' . $this->gambar)) {
            return File::delete('images/post/' . $this->gambar);
        }
    }
}
