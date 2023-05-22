<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;
use App\Models\Product;
use App\Models\History;
use DB;

class CustomerController extends Controller
{
    public function blank() {
        return view('login-regist');
    }

    // Register
    public function register(Request $req) {
        $acc_customer = new Customer;
        $acc_customer->customer_username = $req->username;
        $acc_customer->customer_password = sha1($req->password);
        $acc_customer->save();

        return redirect('/login');
    }

    // Login

    public function session() {
        return session('customer');
    }

    public function login(Request $req) {
        $acc_customer = Customer::where('customer_username', $req->username) -> where('customer_password', sha1($req->password)) -> first(); 
        if($acc_customer == null) {
            return redirect('/registrasi');
        } elseif ($acc_customer->customer_username == 'admin') {
            return redirect('/admin');
        }
        return redirect('/my/'.str($acc_customer->customer_username));
    }

    public function welcome(Request $req) {
        $session = session('customer');
        if ($session != null) {
            return redirect('/my/'.str($session->customer_username));
        } 
        return redirect('/registrasi');
    }

    // logout
    public function logout(){
        session(['customer'=>null]);
        return redirect('/');
    }

    // show dashboard
    public function dashboard($customer_username) {
        
        $login_user = DB::table('customers')->where('customer_username', $customer_username)->first();
        session(['customer'=>$login_user]);
        return view('user-dashboard.dashboard', ['login_user'=>$login_user]);

    }

    // show product
    public function show_products() {
        $menus = DB::select('select * from products');
        return view('ezpz.ez-pz', ['menus' => $menus]);
    }

    // show detail product
    public function detail_product($coffee_id) {
        $menu = Product::where(['coffee_id'=>$coffee_id])->first();
        return view('ezpz.add-to-chart', ['menu'=>$menu]);
    }

    public function history_order($customer_username) {
        // $history = DB::table('customers')->where('customer_username', $customer_username)->first();
        // session(['customer'=>$history]);
        $customer = Customer::where('customer_username', $customer_username)->first();

        $history = History::where('customer_id', $customer->customer_id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        // Mendapatkan hanya tanggal dari kolom 'created_at'
        // $history->transform(function ($item) {
        //     $item->created_at = $item->created_at->format('y-m-d');
        //     return $item;
        // });

        // Mendapatkan 'coffee_nama' dari models 'Product'
        $coffee_nama = Product::whereIn('coffee_id', $history->pluck('coffee_id'))
        ->pluck('coffee_nama', 'coffee_id');

        session(['customer' => $customer]);
        return view('user-dashboard.orders', ['history'=>$history, 'coffee_nama'=>$coffee_nama]);
    }

    public function show_indonesian() {
        $indonesian = DB::select('select * from products');
        return view('ezpz.indoneesian-coffee', ['indonesian'=>$indonesian]);
    }
}
