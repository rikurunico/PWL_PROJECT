<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('HomePage.index',['barang' => $data],['tittle' => 'Home Page',
        ]);
    }

    function profile()
    {
        return view('HomePage.profile',[],['tittle' => 'Profile Page']);
    }

    function gallery()
    {
        $data1 = Product::all();
        return view('HomePage.gallery',['galeri' => $data1], ['tittle' => 'Gallery Page']);
    }

    function contact()
    {
        return view('HomePage.contact', ['tittle' => 'Contact Page']);
    }   

    function updateDataUser(Request $request)
    {   
        //validate laravel
        $this->validate($request,[
            'email' => 'email|unique:users,email,'.Auth::user()->id,
            'notelp' => 'numeric|unique:users,notelp,'.Auth::user()->id,
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request -> hasFile('foto')){
            $foto = $request->file('foto')->store('photoUser', 'public');
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->foto = $foto;
            $user->notelp = $request->notelp;
            $user->alamat = $request->alamat;
            $user->save();
            return redirect('/profile') -> with('success', 'Data berhasil diubah');
        } else {
            $user = User::find(Auth::user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->notelp = $request->notelp;
            $user->alamat = $request->alamat;
            $user->save();
            return redirect('/profile') -> with('success', 'Data berhasil diubah');
        }
    }

    function updateDataPassword(Request $request)
    {
        //validate laravel
        $this->validate($request,[
            'currentpassword'=> 'required|current_password|min:8|',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/profile') -> with('success', 'Password berhasil diubah');
    }

    
    function shopingcart()
    {
        return view('HomePage.shoppingcart', ['tittle' => 'Shoping Card | Shop']);
    } 

    // function shopingcart()
    public function cart()
    {
        return view('HomePage.shoppingcart', ['tittle' => 'Shoping Card | Shop']);
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $id,
                "product" => $product->product,
                "quantity" => 1,
                "kategori" => $product->kategori,
                "harga" => $product->harga,
                "gambar" => $product->gambar
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
                session()->flash('success', 'Product removed successfully');
            }
        }
    }

    public function checkout()
    {
        //get id from cart
        $cart = session()->get('cart');
        $id = array_keys($cart);
        //get product from id
        $products = Product::find($id);
        $total = 0;
        $kuantitas = 0;
        foreach($products as $product){
            $kuantitas += $cart[$product->id]['quantity'];
            $total += $cart[$product->id]['quantity'] * $product->harga;
        }

        return view('HomePage.checkout', ['tittle' => 'Checkout Page', 'produk' => $products, 'total' => $total, 'cart' => $cart, 'kuantitas' => $kuantitas]);
    }

    public function search(Request $request)
    {
        //Menangkap data pencarian
        $search = $request->search;
        $product = Product::where ('merk','like',"%".$search."%");

        return view ('HomePage.gallery',['product' => $product]);
      
    }

}
