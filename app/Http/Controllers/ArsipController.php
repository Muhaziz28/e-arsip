<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use App\Models\Arsip;
use App\Models\Bentuk;
use App\Models\Keterangan;
use App\Models\TingkatPerkembangan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ArsipController extends Controller
{
    public function index()
    {
        $data['title']      = 'Data Arsip';

        return view('admin.arsip.index', $data);
    }

    public function getTingkatPerkembangan()
    {
        $tingkatPerkembangan = TingkatPerkembangan::all();

        return response()->json($tingkatPerkembangan);
    }

    public function getKeterangan()
    {
        $keterangan = Keterangan::all();

        return response()->json($keterangan);
    }

    public function getBentuk()
    {
        $bentuk = Bentuk::all();

        return response()->json($bentuk);
    }

    public function getIndeks(Request $request)
    {
        $search = $request->q;
        $indeks = Arsip::select('indeks')->where('indeks', 'LIKE', "%$search%")->groupBy('indeks')->get();

        if ($indeks->count() > 0) {
            foreach ($indeks as $i) {
                $data[] = $i->indeks;
            }
            $indeks = array_unique($data);
        }

        return response()->json($indeks);
    }

    public function getArsip(Request $request)
    {
        $arsip = Arsip::with('tingkatPerkembangan', 'bentuk', 'keterangan')
            ->when($request->indeks, function ($arsip, $indeks) {
                return $arsip->where('indeks', $indeks);
            })
            ->when($request->tahun, function ($arsip, $tahun) {
                return $arsip->where('tahun', $tahun);
            })
            ->when(empty($request->indeks) && empty($request->tahun), function ($arsip) {
                return $arsip;
            })
            ->get();

        return Datatables::of($arsip)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                return '<div class="btn-group">
                             <button class="btn btn-primary btn-edit" data-id="' . $data['id'] . '" ><i class="fa fa-edit"></i></button>
                             <button class="btn btn-danger btn-delete" data-id="' . $data['id'] . '"><i class="fa fa-trash"></i></button>
                        </div>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function createArsip()
    {
        $data['title']      = 'Tambah Data Arsip';

        return view('admin.arsip.add', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tingkat_perkembangan_id' => 'required',
            'bentuk_id'               => 'required',
            'keterangan_id'           => 'required',
            'indeks'                  => 'required',
            'deskripsi'               => 'required',
            'tahun'                   => 'required',
            'jumlah'                  => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 0, 'msg' => 'Lengkapi data terlebih dahulu']);
        }

        try {
            Arsip::create([
                'tingkat_perkembangan_id' => $request->tingkat_perkembangan_id,
                'bentuk_id'               => $request->bentuk_id,
                'keterangan_id'           => $request->keterangan_id,
                'indeks'                  => $request->indeks,
                'deskripsi'               => $request->deskripsi,
                'tahun'                   => $request->tahun,
                'jumlah'                  => $request->jumlah,
                'rak'                     => $request->rak,
                'roll_o_pack'             => $request->roll_o_pack,
                'boks'                    => $request->boks,
                'bungkus'                 => $request->bungkus,
                'buku'                    => $request->buku,
                'sampul'                  => $request->sampul,
            ]);

            return response()->json(['code' => 1, 'msg' => 'Data berhasil disimpan']);
        } catch (\Exception $e) {
            return response()->json(['code' => 0, 'msg' => $e->getMessage()]);
        }
    }

    public function exportExcel(Request $request)
    {
        $arsip = Arsip::with('tingkatPerkembangan', 'bentuk', 'keterangan')
            ->when($request->indeks, function ($arsip, $indeks) {
                return $arsip->where('indeks', $indeks);
            })
            ->when($request->tahun, function ($arsip, $tahun) {
                return $arsip->where('tahun', $tahun);
            })
            ->when(empty($request->indeks) && empty($request->tahun), function ($arsip) {
                return $arsip;
            })
            ->get();

        $data = [
            'arsip' => $arsip
        ];

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Tingkat Perkembangan');
        $sheet->setCellValue('C1', 'Bentuk');
        $sheet->setCellValue('D1', 'Keterangan');
        $sheet->setCellValue('E1', 'Indeks');
        $sheet->setCellValue('F1', 'Deskripsi');
        $sheet->setCellValue('G1', 'Tahun');
        $sheet->setCellValue('H1', 'Jumlah');
        $sheet->setCellValue('I1', 'Rak');
        $sheet->setCellValue('J1', 'Roll O Pack');
        $sheet->setCellValue('K1', 'Boks');
        $sheet->setCellValue('L1', 'Bungkus');
        $sheet->setCellValue('M1', 'Buku');
        $sheet->setCellValue('N1', 'Sampul');
        $no = 1;
        $x = 2;

        foreach ($data['arsip'] as $a) {
            $sheet->setCellValue('A' . $x, $no++);
            $sheet->setCellValue('B' . $x, $a->tingkatPerkembangan->nama_tingkat_perkembangan);
            $sheet->setCellValue('C' . $x, $a->bentuk->nama_bentuk);
            $sheet->setCellValue('D' . $x, $a->keterangan->nama_keterangan);
            $sheet->setCellValue('E' . $x, $a->indeks);
            $sheet->setCellValue('F' . $x, $a->deskripsi);
            $sheet->setCellValue('G' . $x, $a->tahun);
            $sheet->setCellValue('H' . $x, $a->jumlah);
            $sheet->setCellValue('I' . $x, $a->rak);
            $sheet->setCellValue('J' . $x, $a->roll_o_pack);
            $sheet->setCellValue('K' . $x, $a->boks);
            $sheet->setCellValue('L' . $x, $a->bungkus);
            $sheet->setCellValue('M' . $x, $a->buku);
            $sheet->setCellValue('N' . $x, $a->sampul);
            $x++;
        }

        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('arsip' . date('Y-m-d H:i:s') . '.xlsx');

        return response()->download(public_path('arsip' . date('Y-m-d H:i:s') . '.xlsx'))->deleteFileAfterSend(true);
    }
}
