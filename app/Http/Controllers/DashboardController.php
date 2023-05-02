<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title']      = 'Dashboard';
        $data['kegiatan']   = Kegiatan::count();
        $data['berita'] = Berita::count();

        return view('admin.dashboard', $data);
    }
}
