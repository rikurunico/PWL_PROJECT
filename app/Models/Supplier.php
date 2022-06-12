<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    public $table = 'suppliers';
    protected $primarykey = 'id';

    public function products(){
    	return $this->hasMany('App\Models\Product' , 'supplier_id');
    }

}
