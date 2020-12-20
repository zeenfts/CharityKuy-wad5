<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'menu_id', 'pembayaran', 'money', 'status'
    ];

    public function trans_by()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function trans_from()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
