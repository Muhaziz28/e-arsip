<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KegiatanController extends Controller
{
    public function index()
    {
        $data['title']      = 'Data Gallery Kegiatan';
        return view('admin.kegiatan.index', $data);
    }

    public function getKegiatanList()
    {
        $kegiatan = Kegiatan::get();
        return Datatables::of($kegiatan)
            ->addIndexColumn()
            ->addColumn('action', function ($kegiatan) {
                return '<div class="btn-group">
                <a href="' . route('kegiatan.detail', $kegiatan->slug) . '" class="btn btn-outline-warning btn-sm"><i class="fa fa-eye"></i> Detail</a>
                        <a href="' . route('kegiatan.delete', $kegiatan->id) . '" class="btn btn-outline-danger btn-sm"><i class="align-middle" data-feather="trash"></i> Hapus</a>
                        </div>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $data['title']      = 'Tambah Gallery Kegiatan';
        return view('admin.kegiatan.create', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $content = $request->content;
        $dom = new \DomDocument();
        @$dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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

        $content = $dom->saveHTML();
        $fileUpload = new Kegiatan();
        $fileUpload->title = $request->title;
        $fileUpload->slug = strtolower(str_replace(' ', '-', $request->title));
        $fileUpload->content = $content;
        $fileUpload->save();

        return redirect()->route('dashboard');
    }

    public function detail($slug)
    {
        $data['title']      = 'Detail Gallery Kegiatan';
        $data['kegiatan']   = Kegiatan::where('slug', $slug)->first();

        return view('admin.kegiatan.detail', $data);
    }

    public function delete($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect()->route('kegiatan.index');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $content = $request->content;
        $dom = new \DomDocument();
        @$dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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

        $content = $dom->saveHTML();
        $fileUpload = Kegiatan::find($id);
        $fileUpload->title = $request->title;
        $fileUpload->slug = strtolower(str_replace(' ', '-', $request->title)) . date('dMyh');
        $fileUpload->content = $content;
        $fileUpload->save();

        return redirect()->route('dashboard');
    }
}
