<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderanController extends Controller
{
    public function index(Request $request)
    {
        # search query
        $query = Order::orderBy('created_at', 'desc');

        # filter orderan
        if ($request->has('invoice') && $request->invoice != '') {
            // convert INV-1 to 1
            $invoice = str_replace('INV-', '', $request->invoice);
            $query->where('id', $invoice);
        }

        if ($request->has('cari') && $request->cari != '') {
            $query->where('name', 'like', '%' . $request->cari . '%');
        }

        if ($request->has('statusp') && $request->statusp != '') {
            $query->where('status', $request->statusp);
        }

        # list orderan gunakan variabel untuk menampung seluruh isi
        $orders = $query->get();
        return view('backend.orders.index', compact('orders'));
    }

    public function confirm(Request $request)
    {
        # konfirmasi orderan
        $order = Order::findOrFail($request->id);
        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('success', 'Orderan berhasil diproses');
    }
}
