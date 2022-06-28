<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primarykey = 'id';

    //one to many from transaksi to user
    public function users(){
    	return $this->belongsTo('App\Models\User', 'user_id');
    }

    //one to one from transaksi to payments
    public function payments()
    {
        return $this->hasOne('App\Models\Payment', 'transaksi_id');
    }

    //one to many from transaksi to product
    public function products(){
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}

