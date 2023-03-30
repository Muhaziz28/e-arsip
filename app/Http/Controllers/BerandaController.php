<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $data['berita_terbaru'] = Berita::orderBy('created_at', 'desc')->limit(3)->get();

        return view('home', $data);
    }

    public function profile()
    {

        return view('profile');
    }

    public function berita($slug)
    {
        $data['berita'] = Berita::get();
        $data['news'] = Berita::where('slug', $slug)->first();

        return view('berita.detail', $data);
    }
}
