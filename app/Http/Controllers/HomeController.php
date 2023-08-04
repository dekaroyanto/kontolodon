<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    
    public function about()
    {
        return view('home.about');
    }

    
    public function visi_misi()
    {
        return view('home.visi_misi');
    }

    
    public function sejarah()
    {
        return view('home.sejarah');
    }

    
    public function perangkat()
    {
        return view('home.perangkat');
    }

    
    public function geografis()
    {
        return view('home.geografis');
    }

    
    public function lembaga()
    {
        return view('home.lembaga');
    }
    public function perangkat_desa()
    {
        return view('home.perangkat');
    }

    
    public function informasi_layanan()
    {
        return view('home.informasi-layanan');
    }
    
}
