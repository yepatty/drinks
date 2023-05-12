<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use App\Models\Shops;
use App\Models\Orders;
use App\Http\Requests\MyFormRequest;


class ListController extends Controller
{
    public function __invoke(){
        // $listpds = DB::select("select * from products");
        // $stores = DB::select("select * from shops");
        // $listpds = Products::all();
        $teas = Products::where('series', '=', '愛茶的牛')->get();
        $milkteas = Products::where('series', '=', '牧場鮮奶茶')->get();
        $milks = Products::where('series', '=', '綠光牧場鮮奶')->get();
        $spals = Products::where('series', '=', '手作特調')->get();
        $stores = Shops::all();
        return view('04-01-order', [
            // 'listpds' => $listpds,
            'teas' => $teas,
            'milkteas' => $milkteas,
            'milks' => $milks,
            'spals' => $spals,
            'stores' =>  $stores
        ]);
    }

    public function receipt(MyFormRequest $request){
        $request->validated();
        $order = new Orders();
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->sname = $request->sname;
        $order->pdinfo = $request->pdinfo;
        $order->amount = $request->amount;
        $order->save();
        return view('04-02-info');

    }

    // public function query(MyFormRequest $request){
    //     $orders = Orders::where('phone', $request->phone)->get()->reverse();
    //     $orders = Orders::where('phone', $request->phone)
    //                     ->orderBy('oid', 'desc')->get();
    //     return view('04-02-info',[
    //         'orders'=>$orders
    //     ]);
    // }

    public function query(MyFormRequest $request){
        $query = Orders::query();
        if ($request->filled('phone')) {
            $query->where('phone', $request->phone);
        }
        if ($request->filled('name')) {
            $query->where('name', $request->name);
        }
        $orders = $query->orderBy('createdate', 'desc')->get();
        return view('04-02-info', [
            'orders' => $orders
        ]);
    }
    

}
