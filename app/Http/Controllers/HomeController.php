<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function info()
    {
        return view('frontend.home.info');
    }

    public function index()
    {
        //
        return view('frontend.home.index');
    }

    /**
     * Function untuk logout pengguna
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * ini adalah function untuk seluruh product
     * webiste toko online yang buat
     */
    public function product()
    {
        //
        return view('frontend.product.index');
    }

    /**
     * ini adalah function untuk halaman detail
     * dari product yang kita buat pada crud product
     */
    public function detail($slug)
    {
        //
        return view('frontend.product.detail');
    }

    /**
     * ini adalah function untuk melihat product
     * yang sudah dimasukan dalam database cart / keranjang
     */
    public function cart()
    {
        //
        return view('frontend.cart.index');
    }

    /**
     * ini adalah function memasukan product ke dalam
     * keranjang belanja kita, atau add to cart
     */
    public function add_to_cart(Request $request)
    {
        //
    }

    /**
     * ini adalah function menghapus salah satu product
     * yang ada dalam keranjang belanja
     */
    public function destroy_cart_product($id)
    {
        //
    }

    /**
     * ini adalah function untuk melihat paket
     */
    public function package(Package $package)
    {
        //
        return view('frontend.package.index', compact('package'));
    }

    /**
     * ini adalah function untuk melakukan order
     * dari product yang sudah kita beli
     */
    public function order(Request $request, Package $package)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'nullable|email',
            'phone' => 'required',
            'address' => 'required',
            'payment_proof' => 'required|image|mimes:png,jpg,jpeg',
            'quantity' => 'required|min:1',
            'total' => 'required'
        ]);

        $order = new Order();
        $order->package = $package->name;
        $order->price = $package->price;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->quantity = $request->quantity;
        $order->total = $request->total;

        $file = $request->file('payment_proof');
        $fileName = $file->hashName();
        $order->payment_proof = $file->move('img/payment/', $fileName);

        $order->status = 0;
        $order->save();

        return redirect()->back()->with('success', "Order berhasil dengan nomor invoice #INV-{$order->id}, silahkan tunggu konfirmasi dari admin");
    }

}
