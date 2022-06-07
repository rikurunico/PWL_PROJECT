<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';

    //many to many from transaksi to user
    public function users(){
        return $this->belongsTo(Users::class);
    }

    //many to many from transaksi to barang
    public function products(){
        return $this->belongsTo(products::class);
    }
}
