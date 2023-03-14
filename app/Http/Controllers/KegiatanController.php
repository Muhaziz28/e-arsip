<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $data['title']      = 'Data Gallery Kegiatan';
        $data['kegiatan']   = Kegiatan::paginate(10);
        return view('admin.kegiatan.index', $data);
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
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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

        dd($data);
    }

    public function delete($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect()->route('kegiatan.index');
    }
}
