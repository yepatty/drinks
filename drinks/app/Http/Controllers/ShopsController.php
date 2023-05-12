<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Shops;

class ShopsController extends Controller
{
    public function __invoke(){
        // $stores = DB::select("select * from shops");
        $stores = Shops::all();
        return view('03-shops', ['stores' =>  $stores]);
    }
}
