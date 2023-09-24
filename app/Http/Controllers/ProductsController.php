<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Product; 
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Arr;

class ProductsController extends Controller
{
    public function viewQuote()
    {   
       $data=session('cart');
        return  $data;
    }

   

    public function quote()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function home()
    {
        $products = Product::all();
        return view('home');
    }

    public function aboutUs()
    {
        $products = Product::all();
        return view('aboutUs');
    }

    public function services()
    {
        $products = Product::all();
        return view('services');
    }

    public function contactUs()
    {
        $products = Product::all();
        return view('contactUs');
    }
 
    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "photo" => $product->photo,
                "price" => $product->price,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }
 
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
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
            session()->flash('success', 'Product successfully removed!');
        }
    }

    public function generateQuote()
    {   
        $data=session('cart');
      
        
        $pdf = Pdf::loadView('quoteTemplate', $data);
        return $pdf->download('invoice.pdf');
    }

    public function getData(Request $req){
        
        return $req->input('title');
    }




}