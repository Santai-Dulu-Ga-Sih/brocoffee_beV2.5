<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class ApiController extends Controller
{
    // API admin
    public function dashboard_coffee() {
        $coffees = Product::all();
        return response()->json(['message' => 'success: data show all', 'data' => $coffees]);
    }

    public function show_one($coffee_id) {
        $coffee = Product::find($coffee_id);
        return response()->json(['message' => 'success: data show one', 'data' => $coffee]);
    }

    public function add_coffee(Request $req) {
        $coffee = Product::create($req->all());
        return response()->json(['message' => 'success: data added', 'data' => $coffee]);
    }

    public function update_coffee(Request $req, $coffee_id) {
        $coffee = Product::find($coffee_id);
        $coffee->update($req->all());
        return response()->json(['message' => 'success: data updated', 'data' => $coffee]);
    }

    public function delete_coffee($coffee_id) {
        $coffee = Product::find($coffee_id);
        $coffee->delete();
        return response()->json(['message' => 'success: data deleted', 'data' => null]);
    }

    //API customer
    public function register(Request $req) {
        $input = $req->all();
        $input['customer_password'] = sha1($input['customer_password']);
        $customer = Customer::create($input);
        return response()->json(['meesage' => 'success: account registered', 'data' => $customer]);
    }

    public function login(Request $req) {
        $input = $req->all();
    
        if (!isset($input['customer_username']) || !isset($input['customer_password'])) {
            return response()->json(['message' => 'error: invalid request, missing customer_username or customer_password']);
        }
    
        $customer = Customer::where('customer_username', $input['customer_username'])
            ->where('customer_password', sha1($input['customer_password']))
            ->first();
    
        if ($customer) {
            // Login berhasil
            return response()->json(['message' => 'success: logged in', 'data' => $customer]);
        } else {
            // Login gagal
            return response()->json(['message' => 'error: invalid credentials']);
        }
    }

    public function show_customer() {
        $customer = Customer::all();
        return response()->json(['message' => 'success: data show all', 'data' => $customer]);
    }
    
    // API Product
    public function show_products() {
        $coffees = Product::all();
        return response()->json(['message' => 'success: data show all', 'data' => $coffees]);
    }

    public function detail_product($coffee_id) {
        $coffee = Product::find($coffee_id);
        return response()->json(['message' => 'success: one data', 'data' => $coffee]);
    }

    // API Cart
    public function add_to_cart(Request $req, $coffee_id) {
        $customer = $req->session()->get('customer');
        if ($customer != null) {
            $cart = new Cart;
            $cart->customer_id = Customer::where('customer_id', $customer->customer_id)->pluck('customer_id')->first();
            $cart->coffee_id = Product::where('coffee_id', $coffee_id)->pluck('coffee_id')->first();
            $cart->total_harga = Product::find($coffee_id)->coffee_harga;
            $cart->beans = $req->input('beans');
            $cart->cups = $req->input('cups');
            $cart->save();
    
            return response()->json(['message' => 'success: item added to cart', 'data' => $cart]);
        } else {
            return response()->json(['message' => 'error: customer not logged in'], 401);
        }
    }

    public function payment_success(Request $req, $customer_id) {
        $customer = Customer::find($customer_id);
        if ($customer) {
            $carts = Cart::where('customer_id', $customer->customer_id)->with('coffee')->get();
    
            foreach ($carts as $cart) {
                History::create([
                    'customer_id' => $cart->customer_id,
                    'coffee_id' => $cart->coffee_id,
                    'total_harga' => $cart->total_harga,
                    'beans' => $cart->beans,
                    'cups' => $cart->cups,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
    
                $cart->delete();
            }
    
            return response()->json(['message' => 'success: payment successful']);
        } else {
            return response()->json(['message' => 'error: customer not found'], 404);
        }
    }
    
}
