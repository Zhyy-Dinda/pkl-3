<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\berita;
use Illuminate\Http\Request;

class BerandaControlle extends Controller
{
    public function index(){
        $data = berita::orderby("created_at","desc")->paginate(6);
        $data2 = Beranda::all();
        return view("landingPage/beranda", compact("data","data2"));
    }
}
