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

    // create data user
    public function createProduct()
    {
        $supplier = Supplier::all();
        $tittle = 'Create Product';
        return view('AdminView.createDataProduct', compact('supplier', 'tittle'));

    }
    // fungsi store data user
    public function storeProduct(Request $request)
    {
       //melakukan validasi data
        $request->validate([
        'product' => 'required',
        'kategori' => ['required'],
        'merk' => ['required'],
        'stok' => 'required|numeric',
        'harga' => 'required|numeric',
        'gambar'=>'required',
        'supplier'=>'required',
        ]);

        if($request->file('gambar')){
            $image_name = $request->file('gambar')->store('image', 'public');
        }
        
        $product = new Product;
        $product -> product = $request->get('product');
        $gambar = $request->file('gambar')->store('gambar', 'public');
        $product -> gambar = $gambar;
        $product -> kategori = $request->get('kategori');
        $product -> merk = $request->get('merk');
        $product -> stok = $request->get('stok');
        $product -> harga = $request->get('harga');
        $product -> supplier_id = $request->get('supplier');
        $product -> save();

        return redirect('/homeAdmin') -> with('success', 'Data Barang berhasil Ditambahkan');
    }

    public function destroyproduct($id)
    {
        Product::where('id', $id)->delete();
        return redirect('/dataProduct')-> with('success', 'Barang  Berhasil Dihapus');
    }

    function editproduct($id)
    {
        $product = Product::find($id);
        $supplier = Supplier::all();
        return view('AdminView.editDataProduct',['tittle' => 'Edit Data Product',
            'product' => $product,
            'supplier' => $supplier
        ]);
    }

    function updateDataProduct(Request $request, $id)
    {
        //melakukan validasi data
        $request->validate([
            'product' => 'required',
            'kategori' => 'required',
            'merk' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'gambar' => 'required',
            'supplier' => 'required',
            ]);

            if($request -> hasFile('gambar')){
                $product = Product::with('suppliers')->where('id', $id)->first();
                // $product -> id = $request->get('id');
                $product -> product = $request->get('product');
                $gambar = $request->file('gambar')->store('gambar', 'public');
                $product -> gambar = $gambar;
                $product -> kategori = $request->get('kategori');
                $product -> merk = $request->get('merk');
                $product -> stok = $request->get('stok');
                $product -> harga = $request->get('harga');
                $product -> supplier_id = $request->get('supplier');
                $product->save();
                return redirect('/dataProduct')->with('success', 'Data Berhasil Diubah');
            } else {
               $product = Product::with('suppliers')->where('id', $id)->first();
                // $product -> id = $request->get('id');
                $product -> product = $request->get('product');
                $product -> kategori = $request->get('kategori');
                $product -> merk = $request->get('merk');
                $product -> stok = $request->get('stok');
                $product -> harga = $request->get('harga');
                $product -> supplier_id = $request->get('supplier');
                $product->save();
                return redirect('/dataProduct')->with('success', 'Data Berhasil Diubah');
            }
    }

    function cetakDataProduct()
    {
        $dataProduct = Product::with('suppliers')->get();
        $pdf = PDF::loadView('AdminView.cetakDataProduct',['dataProduct' => $dataProduct]);
        return $pdf->download('Data Product.pdf');
    }
}
