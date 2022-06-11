<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use PDF;

class ProductController extends Controller
{
    public function destroyproduct($id)
    {
        Product::where('id', $id)->delete();
        return redirect('/dataProduct')-> with('success', 'Barang  Berhasil Dihapus');
    }
}
