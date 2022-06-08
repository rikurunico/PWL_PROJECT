<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';

    //one to many from transaksi to user
    public function users(){
    	return $this->belongsTo(User::class);
    }

    //one to one from transaksi to payments
    public function payments()
    {
    	return $this->hasOne(Payment::class);
    }
}

