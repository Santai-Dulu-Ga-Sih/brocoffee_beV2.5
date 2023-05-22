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
}
