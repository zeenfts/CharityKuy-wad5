<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'deskripsi', 'gambar', 'jumlah', 'progress', 'tipe', 'user_id'
    ];

    public function create_by()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
