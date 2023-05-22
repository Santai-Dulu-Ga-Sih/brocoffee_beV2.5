<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Cart;
use DB;

class ProductController extends Controller
{
    public function after_cart() {
        return view('ezpz.ez-pz');
    }

    public function add_to_cart(Request $req, $coffee_id) {
        $customer = session('customer');
        if($customer != null) {
            $cart = new Cart;
            $cart->customer_id = Customer::where(['customer_id'=>$customer->customer_id])->pluck('customer_id')[0];
            $cart->coffee_id = Product::where(['coffee_id'=>$coffee_id])->pluck('coffee_id')[0];
            $cart->total_harga = Product::find($coffee_id)->coffee_harga;
            $cart->beans = $req->input('beans');
            $cart->cups = $req->input('cups');
            $cart->save();

            return redirect('/payment');
        } else {
            return redirect('/welcome');
        }
        
    }

    public function cart_to_payment() {
        $customer = session('customer');
        if($customer != null) {
            $carts = Cart::where('customer_id', $customer->customer_id)->with('coffee')->get();
            return view('ezpz.keranjang', ['carts'=>$carts]);  
        } else {
            return redirect('/welcome');
        }
    }

    public function payment_success($customer_id) {
        $customer = session('customer');
        $carts = Cart::where('customer_id', $customer->customer_id)->with('coffee')->get();
    
        foreach ($carts as $cart) {
            DB::table('histories')->insert([
                'customer_id' => $cart->customer_id,
                'coffee_id' => $cart->coffee_id,
                'total_harga' => $cart->total_harga,
                'beans' => $cart->beans,
                'cups' => $cart->cups,
                'created_at' => now(),
                'updated_at' => now()
            ]);
    
            // Cart::destroy($cart->customer_id);
            DB::table('carts')->where('customer_id', $customer_id)->delete();
        }
        // DB::table('carts')->where('customer_id', $customer_id)->delete();
        return redirect('/');
    }
}
