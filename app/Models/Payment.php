<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';

    //one to one from payments to transaksi
    public function transaksi()
    {
        return $this->belongsTo('App\Models\Transaksi', 'transaksi_id');
    }
}
