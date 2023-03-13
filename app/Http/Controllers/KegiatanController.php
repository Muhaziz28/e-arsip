<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $data['kegiatan'] = Kegiatan::all();
        return view('admin.kegiatan.index', $data);
    }

    public function create()
    {
        return view('admin.kegiatan.create');
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
        $fileUpload->content = $content;
        $fileUpload->save();

        return redirect()->route('dashboard');
    }

    public function delete($id)
    {
        $kegiatan = Kegiatan::find($id);
        $kegiatan->delete();
        return redirect()->route('kegiatan.index');
    }
}
