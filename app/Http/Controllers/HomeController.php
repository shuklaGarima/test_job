<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $products = Product::paginate(15);
        return view('home',compact('products'));
    }
    public function cart()
    {
        return view('cart');
    }
    public function productDetail($id){
        $product = Product::find($id); 
        return view('product',compact('product'));
          
    }
    public function addToCart($id)
    {
        $product = Product::find($id);
        if(!empty($product)){
            $cart = session()->get('cart');
            if(!$cart) {
                $cart = [
                        $id => [
                            "name" => $product->name,
                            "quantity" => 1,
                            "price" => $product->price,
                            "photo" => $product->photo,
                            "color" => $product->color
                        ]
                ];
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
 
            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product added to cart successfully!');
            }
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->photo,
                "color" => $product->color
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');  
        }else{
             return redirect()->back()->with('error', 'Product not found'); 
        }
        
    }
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }
}
