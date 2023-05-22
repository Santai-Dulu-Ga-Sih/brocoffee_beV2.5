<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class AdminController extends Controller
{
    public function dashboard_coffee() {
        $coffees = DB::select('select * from products');
        return view('bro-admin.dashboard-coffee-admin', ['coffees'=>$coffees]);
    }

    public function add_coffee(Request $req) {
        $product = new Product;
        $product->coffee_nama = $req->nama_coffee;
        $product->coffee_deskripsi = $req->deskripsi_coffee;
        $product->coffee_harga = $req->harga_coffee;
        $product->coffee_jenis = $req->jenis_coffee;
        $product->coffee_url = $req->picture_coffee;
        $product->save();

        return redirect('/admin/coffee');
    }

    public function add_coffee_view() {
        return view('bro-admin.tambah-coffee-admin');
    }

    public function update_coffee(Request $req) {
        Product::where('coffee_id', $req->coffee_id)->update([
            'coffee_nama' => $req->nama_coffee,
            'coffee_deskripsi' => $req->deskripsi_coffee,
            'coffee_harga' => $req->harga_coffee,
            'coffee_jenis' => $req->jenis_coffee,
            'coffee_url' => $req->picture_coffee,
        ]);

        return redirect('/admin/coffee');
    }

    public function show_exist($coffee_id) {
        $product = Product::findOrFail($coffee_id);
        return view('bro-admin.update-coffee-admin', compact('product'));
    }

    public function delete_coffee($coffee_id) {
        $product = Product::findOrFail($coffee_id);
        $product->delete();

        return redirect('/admin/coffee');
    }
}
