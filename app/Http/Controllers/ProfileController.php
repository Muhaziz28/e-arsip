<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data['profile'] = Profile::get();
        $data['title'] = 'Profile';

        return view('admin.profile.index', $data);
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'profile' => 'required',
        ]);

        $cekProfile = Profile::all();

        if ($cekProfile->count() > 1) {
            Profile::truncate();

            $profile = $request->profile;
            $dom = new \DomDocument();
            @$dom->loadHtml($profile, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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

            $profile = $dom->saveHTML();
            $fileUpload = new Profile();
            $fileUpload->profile = $profile;
            $fileUpload->save();
        } else {
            Profile::truncate();

            $profile = $request->profile;
            $dom = new \DomDocument();
            @$dom->loadHtml($profile, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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

            $profile = $dom->saveHTML();
            $fileUpload = new Profile();
            $fileUpload->profile = $profile;
            $fileUpload->save();
        }

        return redirect()->route('profile')->with('success', 'Profile berhasil ditambahkan');
    }
}
