<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\Payment;
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
        $total = Product::count();
        return view ('HomePage.gallery',['galeri' => $data1],['tittle' => 'Gallery Page',
        'total' => $total]);
    }

    function gallerySort(Request $request)
    {
        $data1 = Product::orderBy($request->sorting, 'asc')->get();
        $total = Product::count();
        return view ('HomePage.gallery',['galeri' => $data1],['tittle' => 'Gallery Page',
        'total' => $total]);
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
        foreach($products as $product){
            $total += $cart[$product->id]['quantity'] * $product->harga;
        }
        $kuantitas = array_sum(array_column($cart, 'quantity'));
        return view('HomePage.checkout', ['tittle' => 'Checkout Page', 'produk' => $products, 'total' => $total, 'cart' => $cart, 'kuantitas' => $kuantitas]);
    }

    public function searchProduct(Request $request)
    {
        $data = Product::where('product', 'like', '%'.$request->cari.'%')->get();
        return view('HomePage.search', ['tittle' => 'Search Page', 'barang' => $data]);
    }

    public function purchase(){
        return view('HomePage.purchase', ['tittle' => 'Purchase Page']);
    }

    public function postCheckOut(Request $request)
    {
        $cart = session()->get('cart');
        
        foreach($cart as $item){
            $transaksi = new Transaksi();
            $transaksi->user_id = Auth::user()->id;
            $transaksi->product_id = $item['id'];
            $transaksi->qty = $item['quantity'];
            $transaksi->Tanggal_beli = now()->format('Y-m-d');
            $transaksi->created_at = now();
            $transaksi->save();

            $product = Product::find($item['id']);
            $payment = new Payment();
            $total = $cart[$product->id]['quantity'] * $product->harga;
            $payment->total_bayar = $total;
            $payment->transaksi_id = $transaksi->id;
            $payment->tanggal_bayar = now();
            $payment->created_at = now();
            $payment->save();
            $product->stok = $product->stok - $cart[$product->id]['quantity'];
            $product->save();
        }
        //destroy session
        session()->forget('cart');
        return redirect('/purchase')->with('success', 'Pembayaran berhasil, silahkan cek email anda');
    }

    public function purchaseHistory()
    {
        $transaksi = Transaksi::with('products')->orderBy('created_at', 'desc')->where('user_id', Auth::user()->id)->get();
        $transaksiid = array_column($transaksi->toArray(), 'id');
        $payment = Payment::with('transaksi')->whereIn('transaksi_id', $transaksiid)->paginate(5);
        return view('HomePage.purchaseHistory', ['tittle' => 'Purchase History Page', 'transaksi' => $transaksi, 'payment' => $payment]);
    }
}
