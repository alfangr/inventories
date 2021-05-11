<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Inventory;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'id_user',
        'id_barang',
        'jumlah'
    ];

    public function has_user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function has_barang() {
        return $this->belongsTo(Inventory::class, 'id_barang', 'id');
    }
}
