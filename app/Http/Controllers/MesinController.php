<?php

namespace App\Http\Controllers;

use Redirect;
use App\mesin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Exports\MesinExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Image;

class MesinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function mesin()
    {
        $mesins = DB::table('mesins')
            ->orderBy('id', 'desc')
            ->get();

        return view('form/mesin', compact('mesins'));
    }

    public function formMesin()
    {
        return view('data.formMesin');
    }

    public function editmesin($id)
    {
        $mesins = mesin::findorfail($id);
        return view('update.editMesin', compact('mesins'));
    }

    public function mesinexport()
    {
        return Excel::download(new MesinExport, 'mesin.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'KodeBarang' => ['required', 'string', 'max:100'],
            'NamaBarang' => ['required'],
            // 'NoReg' => ['required'],
            'Merk' => ['required'],
            'Ukuran' => ['required'],
            'Bahan' => ['required'],
            'TahunPembuatan' => ['required'],
            // 'NomorPabrik' => ['required'],
            // 'NomorRangka' => ['required'],
            // 'NomorMesin' => ['required'],
            // 'NomorPolisi' => ['required'],
            // 'NomorBPKB' => ['required'],
            // 'CaraPerolehan' => ['required'],
            // 'JmlBrg' => ['required'],
            // 'HargaSatuan' => ['required'],
            // 'HargaPerolehan' => ['required'],
            // 'KodeSubAkun' => ['required'],
            // 'SubSub' => ['required'],
            // 'KodeTmbh' => ['required'],
            // 'KodeKurang' => ['required'],
            // 'SpNo' => ['required'],
            // 'SpTgl' => ['required'],
            // 'KwNo' => ['required'],
            // 'KwTgl' => ['required'],
            // 'BaNo' => ['required'],
            // 'BaTgl' => ['required'],
            // 'SkpdPemberi' => ['required'],
            // 'KodeSubSubAkun' => ['required'],
            // 'KodeLama' => ['required'],
            // 'KodeBaru' => ['required'],
            // 'CekKecocokanKode' => ['required'],
            // 'Level1' => ['required'],
            // 'Level2' => ['required'],
            // 'Level3' => ['required'],
            // 'Level4' => ['required'],
            // 'Level5' => ['required'],
            'FotoBrg' => ['required', 'mimes:jpg,jpeg,png'],
            'FotoBrg2' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $mesin = new \App\mesin;
        $mesin->KodeBarang = $request->KodeBarang;
        $mesin->NamaBarang = $request->NamaBarang;
        $mesin->NoReg = $request->NoReg;
        $mesin->Merk = $request->Merk;
        $mesin->Ukuran = $request->Ukuran;
        $mesin->Bahan = $request->Bahan;
        $mesin->TahunPembuatan = $request->TahunPembuatan;
        $mesin->NomorPabrik = $request->NomorPabrik;
        $mesin->NomorRangka = $request->NomorRangka;
        $mesin->NomorMesin = $request->NomorMesin;
        $mesin->NomorPolisi = $request->NomorPolisi;
        $mesin->NomorBPKB = $request->NomorBPKB;
        $mesin->CaraPerolehan = $request->CaraPerolehan;
        $mesin->JmlBrg = $request->JmlBrg;
        $mesin->HargaSatuan = $request->HargaSatuan;
        $mesin->HargaPerolehan = $request->HargaPerolehan;
        $mesin->KodeSubAkun = $request->KodeSubAkun;
        $mesin->SubSub = $request->SubSub;
        $mesin->KodeTmbh = $request->KodeTmbh;
        $mesin->KodeKurang = $request->KodeKurang;
        $mesin->SpNo = $request->SpNo;
        $mesin->SpTgl = $request->SpTgl;
        $mesin->KwNo = $request->KwNo;
        $mesin->KwTgl = $request->KwTgl;
        $mesin->BaNo = $request->BaNo;
        $mesin->BaTgl = $request->BaTgl;
        $mesin->SkpdPemberi = $request->SkpdPemberi;
        $mesin->KodeSubSubAkun = $request->KodeSubSubAkun;
        $mesin->Kapitalisasi = $request->Kapitalisasi;
        $mesin->KodeLama = $request->KodeLama;
        $mesin->KodeBaru = $request->KodeBaru;
        $mesin->CekKecocokanKode = $request->CekKecocokanKode;
        $mesin->Level1 = $request->Level1;
        $mesin->Level2 = $request->Level2;
        $mesin->Level3 = $request->Level3;
        $mesin->Level4 = $request->Level4;
        $mesin->Level5 = $request->Level5;
        if ($request->hasFile('FotoBrg') && $request->hasFile('FotoBrg2')) {
            // $request->file('FotoBrg')->move('FotoBrg/', $request->file('FotoBrg')->getClientOriginalName());
            // $image = $request->file('FotoBrg')->getClientOriginalName();
            // $image_resize = Image::make($image);
            // $image_resize->resize(300, 300);
            // $image_resize->save();

            // $request->file('FotoBrg2')->move('FotoBrg2/', $request->file('FotoBrg2')->getClientOriginalName());
            // $image2 = $request->file('FotoBrg2')->getClientOriginalName();
            // $image_resize = Image::make($image2);
            // $image_resize->resize(300, 300);
            // $image_resize->save();


            $mesin->FotoBrg = $request->file('FotoBrg')->move('FotoBrg/', $request->file('FotoBrg')->getClientOriginalName());
            $image_resize = Image::make($mesin->FotoBrg);
            $image_resize->resize(300, 300);
            $image_resize->save();

            $mesin->FotoBrg2 = $request->file('FotoBrg2')->move('FotoBrg2/', $request->file('FotoBrg2')->getClientOriginalName());
            $image_resize = Image::make($mesin->FotoBrg2);
            $image_resize->resize(300, 300);
            $image_resize->save();
            
            $mesin->save();
        }
        $mesin->save();

        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('/form/mesin')->with('sukses', 'Data Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'KodeBarang' => ['required', 'string', 'max:100'],
            'NamaBarang' => ['required'],
            // 'NoReg' => ['required'],
            'Merk' => ['required'],
            'Ukuran' => ['required'],
            'Bahan' => ['required'],
            'TahunPembuatan' => ['required'],
            // 'NomorPabrik' => ['required'],
            // 'NomorRangka' => ['required'],
            // 'NomorMesin' => ['required'],
            // 'NomorPolisi' => ['required'],
            // 'NomorBPKB' => ['required'],
            // 'CaraPerolehan' => ['required'],
            // 'JmlBrg' => ['required'],
            // 'HargaSatuan' => ['required'],
            // 'HargaPerolehan' => ['required'],
            // 'KodeSubAkun' => ['required'],
            // 'SubSub' => ['required'],
            // 'KodeTmbh' => ['required'],
            // 'KodeKurang' => ['required'],
            // 'SpNo' => ['required'],
            // 'SpTgl' => ['required'],
            // 'KwNo' => ['required'],
            // 'KwTgl' => ['required'],
            // 'BaNo' => ['required'],
            // 'BaTgl' => ['required'],
            // 'SkpdPemberi' => ['required'],
            // 'KodeSubSubAkun' => ['required'],
            // 'KodeLama' => ['required'],
            // 'KodeBaru' => ['required'],
            // 'CekKecocokanKode' => ['required'],
            // 'Level1' => ['required'],
            // 'Level2' => ['required'],
            // 'Level3' => ['required'],
            // 'Level4' => ['required'],
            // 'Level5' => ['required'],
            'FotoBrg' => ['required', 'mimes:jpg,jpeg,png'],
            'FotoBrg2' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $ubah = mesin::findorfail($id);
        $awal = $ubah->FotoBrg;
        $awal2 = $ubah->FotoBrg2;

        $mesins = [
            'KodeBarang' => $request->KodeBarang,
            'NamaBarang' => $request->NamaBarang,
            'NoReg' => $request->NoReg,
            'Merk' => $request->Merk,
            'Ukuran' => $request->Ukuran,
            'Bahan' => $request->Bahan,
            'TahunPembuatan' => $request->TahunPembuatan,
            'NomorPabrik' => $request->NomorPabrik,
            'NomorRangka' => $request->NomorRangka,
            'NomorMesin' => $request->NomorMesin,
            'NomorPolisi' => $request->NomorPolisi,
            'NomorBPKB' => $request->NomorBPKB,
            'CaraPerolehan' => $request->CaraPerolehan,
            'JmlBrg' => $request->JmlBrg,
            'HargaSatuan' => $request->HargaSatuan,
            'HargaPerolehan' => $request->HargaPerolehan,
            'KodeSubAkun' => $request->KodeSubAkun,
            'SubSub' => $request->SubSub,
            'KodeTmbh' => $request->KodeTmbh,
            'KodeKurang' => $request->KodeKurang,
            'SpNo' => $request->SpNo,
            'SpTgl' => $request->SpTgl,
            'KwNo' => $request->KwNo,
            'KwTgl' => $request->KwTgl,
            'BaNo' => $request->BaNo,
            'BaTgl' => $request->BaTgl,
            'SkpdPemberi' => $request->SkpdPemberi,
            'KodeSubSubAkun' => $request->KodeSubSubAkun,
            'Kapitalisasi' => $request->Kapitalisasi,
            'KodeLama' => $request->KodeLama,
            'KodeBaru' => $request->KodeBaru,
            'CekKecocokanKode' => $request->CekKecocokanKode,
            'Level1' => $request->Level1,
            'Level2' => $request->Level2,
            'Level3' => $request->Level3,
            'Level4' => $request->Level4,
            'Level5' => $request->Level5,
            'FotoBrg' => $awal,
            'FotoBrg2' => $awal2,
        ];

        $request->FotoBrg->move(public_path() . '/FotoBrg', $awal);
        $request->FotoBrg2->move(public_path() . '/FotoBrg2', $awal2);

        $ubah->update($mesins);

        Alert::success('Success', 'Data Berhasil Dirubah');
        return redirect('/form/mesin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mesin = mesin::where('id', $id)->delete();

        Alert::Error('Data Berhasil Dihapus');
        return redirect('/form/mesin');
    }
}
