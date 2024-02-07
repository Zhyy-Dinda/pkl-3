<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class DashboardControlle extends Controller
{
    public function index(){
        $data = berita::orderby("created_at", "DESC")->paginate(3);
        return view("admin.dashboard", compact("data"));
    }
}
