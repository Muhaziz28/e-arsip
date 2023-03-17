<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $data['berita'] = Berita::get();

        return view('welcome', $data);
    }

    public function berita($slug)
    {
        $data['berita'] = Berita::get();
        $data['news'] = Berita::where('slug', $slug)->first();

        return view('berita.detail', $data);
    }
}
