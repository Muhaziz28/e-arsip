<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['kegiatan'] = Kegiatan::all();
        return view('admin.dashboard', $data);
    }
}
