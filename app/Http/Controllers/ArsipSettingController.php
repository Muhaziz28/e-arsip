<?php

namespace App\Http\Controllers;

use App\Models\Bentuk;
use App\Models\Keterangan;
use App\Models\TingkatPerkembangan;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;

class ArsipSettingController extends Controller
{
    public function index()
    {
        $data['title']      = 'Arsip Setting';

        return view('admin.arsip-setting.index', $data);
    }

    public function getTingkatPerkembangan()
    {
        $perkembangan = TingkatPerkembangan::get();

        return Datatables::of($perkembangan)
            ->addIndexColumn()
            ->addColumn('action', function ($perkembangan) {
                return '<div class="btn-group">
                             <button class="btn btn-primary btn-edit" data-id="' . $perkembangan['id'] . '" ><i class="fa fa-edit"></i></button>
                             <button class="btn btn-danger btn-delete" data-id="' . $perkembangan['id'] . '"><i class="fa fa-trash"></i></button>
                        </div>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function createTingkatPerkembangan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_tingkat_perkembangan' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 0, 'msg' => 'Data tidak boleh kosong']);
        }

        $cek = TingkatPerkembangan::where('nama_tingkat_perkembangan', $request->nama_tingkat_perkembangan)->first();

        if ($cek) {
            return response()->json(['code' => 0, 'msg' => 'Data sudah ada']);
        }

        try {
            TingkatPerkembangan::create([
                'nama_tingkat_perkembangan' => $request->nama_tingkat_perkembangan,
            ]);

            return response()->json(['code' => 1, 'msg' => 'Data berhasil ditambahkan']);
        } catch (\Throwable $th) {
            return response()->json(['code' => 0, 'msg' => 'Data gagal ditambahkan']);
        }
    }

    public function showTingkatPerkembangan(Request $request)
    {
        $tingkat_perkembangan = TingkatPerkembangan::find($request->id);

        return response()->json([
            'status' => Response::HTTP_OK,
            'data'   => $tingkat_perkembangan
        ], Response::HTTP_OK);
    }

    public function updateTingkatPerkembangan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_tingkat_perkembangan' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 0, 'msg' => 'Data tidak boleh kosong']);
        }

        $cek = TingkatPerkembangan::where('nama_tingkat_perkembangan', $request->nama_tingkat_perkembangan)->first();
        if ($cek) {
            return response()->json(['code' => 0, 'msg' => 'Data sudah ada', 'data' => $cek]);
        }

        try {
            $tingkat_perkembangan = TingkatPerkembangan::find($request->id);

            $tingkat_perkembangan->update([
                'nama_tingkat_perkembangan' => $request->nama_tingkat_perkembangan,
            ]);

            return response()->json(['code' => 1, 'msg' => 'Data berhasil diubah', 'data' => $request->id]);
        } catch (\Throwable $t) {
            return response()->json(['code' => 0, 'msg' => 'Data gagal diubah ' . $t->getMessage()]);
        }
    }

    public function deleteTingkatPerkembangan(Request $request)
    {
        try {
            TingkatPerkembangan::where('id', $request->id)->delete();

            return response()->json(['code' => 1, 'msg' => 'Data berhasil dihapus']);
        } catch (\Throwable $th) {
            return response()->json(['code' => 0, 'msg' => 'Data gagal dihapus']);
        }
    }

    public function getBentuk()
    {
        $bentuk = Bentuk::get();

        return Datatables::of($bentuk)
            ->addIndexColumn()
            ->addColumn('action', function ($bentuk) {
                return '<div class="btn-group">
                             <button class="btn btn-primary btn-edit-bentuk" data-id="' . $bentuk['id'] . '" ><i class="fa fa-edit"></i></button>
                             <button class="btn btn-danger btn-delete-bentuk" data-id="' . $bentuk['id'] . '"><i class="fa fa-trash"></i></button>
                        </div>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function createBentuk(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_bentuk' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['code' => 0, 'msg' => 'Data tidak boleh kosong']);
        }

        $cek = Bentuk::where('nama_bentuk', $request->nama_bentuk)->first();
        if ($cek) {
            return response()->json(['code' => 0, 'msg' => 'Data sudah ada']);
        }

        try {
            Bentuk::create([
                'nama_bentuk' => $request->nama_bentuk,
            ]);

            return response()->json(['code' => 1, 'msg' => 'Data berhasil ditambahkan']);
        } catch (\Throwable $th) {
            return response()->json(['code' => 0, 'msg' => 'Data gagal ditambahkan']);
        }
    }

    public function showBentuk(Request $request)
    {
        $bentuk = Bentuk::find($request->id);

        return response()->json([
            'status' => Response::HTTP_OK,
            'data'   => $bentuk
        ], Response::HTTP_OK);
    }

    public function updateBentuk(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_bentuk' => ['required'],
        ]);
        if ($validator->fails()) {
            return response()->json(['code' => 0, 'msg' => 'Data tidak boleh kosong']);
        }

        $cek = Bentuk::where('nama_bentuk', $request->nama_bentuk)->first();
        if ($cek) {
            return response()->json(['code' => 0, 'msg' => 'Data sudah ada', 'data' => $cek]);
        }

        try {
            $bentuk = Bentuk::find($request->id);
            $bentuk->update([
                'nama_bentuk' => $request->nama_bentuk,
            ]);

            return response()->json(['code' => 1, 'msg' => 'Data berhasil diubah', 'data' => $request->id]);
        } catch (\Throwable $t) {
            return response()->json(['code' => 0, 'msg' => 'Data gagal diubah ' . $t->getMessage()]);
        }
    }

    public function deleteBentuk(Request $request)
    {
        try {
            Bentuk::where('id', $request->id)->delete();

            return response()->json(['code' => 1, 'msg' => 'Data berhasil dihapus']);
        } catch (\Throwable $th) {
            return response()->json(['code' => 0, 'msg' => 'Data gagal dihapus']);
        }
    }

    public function getKeterangan()
    {
        $keterangan = Keterangan::get();

        return Datatables::of($keterangan)
            ->addIndexColumn()
            ->addColumn('action', function ($keterangan) {
                return '<div class="btn-group">
                             <button class="btn btn-primary btn-edit-keterangan" data-id="' . $keterangan['id'] . '" ><i class="fa fa-edit"></i></button>
                             <button class="btn btn-danger btn-delete-keterangan" data-id="' . $keterangan['id'] . '"><i class="fa fa-trash"></i></button>
                        </div>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function createKeterangan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_keterangan' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['code' => 0, 'msg' => 'Data tidak boleh kosong']);
        }

        $cek = Keterangan::where('nama_keterangan', $request->nama_keterangan)->first();
        if ($cek) {
            return response()->json(['code' => 0, 'msg' => 'Data sudah ada']);
        }

        try {
            Keterangan::create([
                'nama_keterangan' => $request->nama_keterangan,
            ]);

            return response()->json(['code' => 1, 'msg' => 'Data berhasil ditambahkan']);
        } catch (\Throwable $th) {
            return response()->json(['code' => 0, 'msg' => 'Data gagal ditambahkan']);
        }
    }

    public function showKeterangan(Request $request)
    {
        $keterangan = Keterangan::find($request->id);

        return response()->json([
            'status' => Response::HTTP_OK,
            'data'   => $keterangan
        ], Response::HTTP_OK);
    }

    public function updateKeterangan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_keterangan' => ['required'],
        ]);
        if ($validator->fails()) {
            return response()->json(['code' => 0, 'msg' => 'Data tidak boleh kosong']);
        }

        $cek = Keterangan::where('nama_keterangan', $request->nama_keterangan)->first();
        if ($cek) {
            return response()->json(['code' => 0, 'msg' => 'Data sudah ada', 'data' => $cek]);
        }

        try {
            $keterangan = Keterangan::find($request->id);
            $keterangan->update([
                'nama_keterangan' => $request->nama_keterangan,
            ]);

            return response()->json(['code' => 1, 'msg' => 'Data berhasil diubah', 'data' => $request->id]);
        } catch (\Throwable $t) {
            return response()->json(['code' => 0, 'msg' => 'Data gagal diubah ' . $t->getMessage()]);
        }
    }

    public function deleteKeterangan(Request $request)
    {
        try {
            Keterangan::where('id', $request->id)->delete();

            return response()->json(['code' => 1, 'msg' => 'Data berhasil dihapus']);
        } catch (\Throwable $th) {
            return response()->json(['code' => 0, 'msg' => 'Data gagal dihapus']);
        }
    }
}
