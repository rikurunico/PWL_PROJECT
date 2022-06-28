<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;


class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primarykey = 'id';

    public function suppliers(){
    	return $this->belongsTo('App\Models\Supplier' , 'supplier_id');
    }

    public function transaksi(){
    	return $this->belongsTo('App\Models\Transaksi', 'product_id');
    }
}
