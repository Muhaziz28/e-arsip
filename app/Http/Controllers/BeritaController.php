<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $data['title']      = 'Data Berita';
        return view('admin.berita.index', $data);
    }

    public function getBeritaList()
    {
        $berita = Berita::get();
        return Datatables::of($berita)
            ->addIndexColumn()
            ->addColumn('action', function ($berita) {
                return '<div class="btn-group">
                            <a href="' . route('berita.detail', $berita->slug) . '" class="btn btn-outline-warning btn-sm"><i class="fa fa-eye"></i> Detail</a>
                            <a href="' . route('berita.delete', $berita->id) . '" class="btn btn-outline-danger btn-sm"><i class="align-middle" data-feather="trash"></i> Hapus</a>
                        </div>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $data['title']      = 'Tambah Berita Baru';
        return view('admin.berita.create', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_berita'   => 'required',
            'isi_berita'     => 'required',
        ]);

        $isi_berita = $request->isi_berita;
        $dom = new \DomDocument();
        @$dom->loadHtml($isi_berita, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('imageFile');
        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/upload/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $slug = strtolower(str_replace(' ', '-', $request->judul_berita));
        $cek_slug = Berita::where('slug', $slug)->first();

        if ($cek_slug) {
            $slug = $slug . '-' . rand(1, 100);
        }

        $isi_berita = $dom->saveHTML();
        $fileUpload = new Berita();
        $fileUpload->judul_berita = $request->judul_berita;
        $fileUpload->slug = $slug;
        $fileUpload->isi_berita = $isi_berita;
        $fileUpload->save();

        return redirect()->route('berita.index');
    }

    public function detail($slug)
    {
        $data['title']      = 'Detail Berita';
        $data['berita']   = Berita::where('slug', $slug)->first();

        return view('admin.berita.detail', $data);
    }

    public function delete($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect()->route('berita.index');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul_berita'   => 'required',
            'isi_berita'     => 'required',
        ]);

        $isi_berita = $request->isi_berita;
        $dom = new \DomDocument();
        @$dom->loadHtml($isi_berita, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('imageFile');
        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/upload/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $slug = strtolower(str_replace(' ', '-', $request->judul_berita));
        $cek_slug = Berita::where('slug', $slug)->first();

        if ($cek_slug) {
            $slug = $slug . '-' . rand(1, 100);
        }


        $isi_berita = $dom->saveHTML();
        $fileUpload = Berita::find($id);
        $fileUpload->judul_berita = $request->judul_berita;
        $fileUpload->isi_berita = $isi_berita;
        $fileUpload->slug = $slug;
        $fileUpload->save();

        return redirect()->route('berita.index');
    }
}
