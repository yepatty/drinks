<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductsController extends Controller
{
    public function __invoke(){
        // $teas = DB::select("select * from products where series ='愛茶的牛'");
        // $milkteas = DB::select("select * from products where series ='牧場鮮奶茶'");
        // $milks = DB::select("select * from products where series ='綠光牧場鮮奶'");
        // $spals = DB::select("select * from products where series ='手作特調'");
        $teas = Products::where('series', '=', '愛茶的牛')->get();
        $milkteas = Products::where('series', '=', '牧場鮮奶茶')->get();
        $milks = Products::where('series', '=', '綠光牧場鮮奶')->get();
        $spals = Products::where('series', '=', '手作特調')->get();
        return view('02-00-products',[
            'teas' => $teas,
            'milkteas' => $milkteas,
            'milks' => $milks,
            'spals' => $spals
        ]);
    }

    public function tea(){
        // $teas = DB::select("select * from products where series ='愛茶的牛'");
        $teas = Products::where('series', '=', '愛茶的牛')->get();
        return view('02-01-tea', ['teas' => $teas]);
    }

    public function milktea(){
        // $milkteas = DB::select("select * from products where series ='牧場鮮奶茶'");
        $milkteas = Products::where('series', '=', '牧場鮮奶茶')->get();
        return view('02-02-mktea', ['milkteas' => $milkteas]);
    }

    public function milk(){
        // $milks = DB::select("select * from products where series ='綠光牧場鮮奶'");
        $milks = Products::where('series', '=', '綠光牧場鮮奶')->get();
        return view('02-03-milk', ['milks' => $milks]);
    }

    public function specials(){
        // $spals = DB::select("select * from products where series ='手作特調'");
        $spals = Products::where('series', '=', '手作特調')->get();
        return view('02-04-sp', ['spals' => $spals]);
    }

}
