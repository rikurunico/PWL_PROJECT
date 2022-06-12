<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;
use Auth;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function destroyproduct($id)
    {
        Product::where('id', $id)->delete();
        return redirect('/dataProduct')-> with('success', 'Barang  Berhasil Dihapus');
    }

    function editproduct($id)
    {
        $product = Product::find($id);
        return view('AdminView.editDataProduct',['tittle' => 'Edit Data Product',
            'user' => $product,
        ]);
    }

    function updateDataProduct(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'product' => 'required',
            'kategori' => 'required',
            'merk' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'gambar' => 'required',
            'supplier_id' => 'required',
            
            ]);

            $product = Product::with('suplier_id')->where('id', $id)->first();
            // $product -> id = $request->get('id');
            $product -> product = $request->get('product');
            
            if($product->photo_product && file_exists(storage_path('./app/public/'. $product->photo_product))){
                Storage::delete(['./public/', $product->photo_product]);
            }
    
            $image_name = $request->file('gambar')->store('image', 'public');
            
            $product->photo_product = $image_name;
            $product -> kategori = $request->get('kategori');
            $product -> merk = $request->get('merk');
            $product -> stok = $request->get('stok');
            $product -> harga = $request->get('harga');
            $product -> supplier_id = $request->get('supplier_id');

            $product->save();
                return redirect()->route('/dataProduct')->with('success', 'Data Berhasil Diubah');
    }

    function cetakDataProdut()
    {
        $dataProduct = Product::all();
        $pdf = PDF::loadView('AdminView.cetakDataProduct',['dataProduct' => $dataProduct]);
        return $pdf->download('Data Product.pdf');
    }
}
