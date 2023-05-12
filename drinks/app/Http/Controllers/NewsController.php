<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function __invoke(){
        return view('01-00-news');
    }

    public function del01st(){
        return view('01-01');
    }

    public function del02nd(){
        return view('01-02');
    }

    public function del03rd(){
        return view('01-03');
    }

    public function del04th(){
        return view('01-04');
    }

    public function del05th(){
        return view('01-05');
    }

    public function del06th(){
        return view('01-06');
    }

    public function del07th(){
        return view('01-07');
    }

    public function del08th(){
        return view('01-08');
    }

    public function del09th(){
        return view('01-09');
    }

    public function del10th(){
        return view('01-10');
    }
}
