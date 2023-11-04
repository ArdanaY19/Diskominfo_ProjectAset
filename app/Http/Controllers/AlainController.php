<?php

namespace App\Http\Controllers;

use Redirect;
use App\asetLain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Exports\AlainExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class AlainController extends Controller
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

    public function alain()
    {
        $asetLains = DB::table('aset_lains')
        ->orderBy('id', 'desc')
        ->get();

        return view('form/alain', compact('asetLains'));
    }

    public function formAlain()
    {
        return view('data.formAlain');
    }

    public function editAlain($id)
    {
        $asetLains = asetLain::findorfail($id);
        return view('update.editAlain', compact('asetLains'));
    }

    public function alainexport()
    {
        return Excel::download(new AlainExport, 'asetlain.xlsx');
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
            'NamaBarang' => ['required'],
            'NoReg' => ['required'],
            'Merk' => ['required'],
            'Ukuran' => ['required'],
            'Bahan' => ['required'],
            'TahunPembuatan' => ['required'],
            'NomorPabrik' => ['required'],
            'NomorRangka' => ['required'],
            'NomorMesin' => ['required'],
            'NomorPolisi' => ['required'],
            'NomorBPKB' => ['required'],
            'CaraPerolehan' => ['required'],
            'JmlBrg' => ['required'],
            'HargaSatuan' => ['required'],
            'HargaPerolehan' => ['required'],
            // 'KodeSubAkun' => ['required'],
            // 'KodeTmbh' => ['required'],
            // 'KodeKurang' => ['required'],
            'SpNo' => ['required'],
            'SpTgl' => ['required'],
            'KwNo' => ['required'],
            'KwTgl' => ['required'],
            'BaNo' => ['required'],
            'BaTgl' => ['required'],
            'SkpdPemberi' => ['required'],
            'KodeLama' => ['required'],
            'Uraian' => ['required'],
            'FotoBrg' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $asetLain = new \App\asetLain;
        $asetLain->NamaBarang = $request->NamaBarang;
        $asetLain->NoReg = $request->NoReg;
        $asetLain->Merk = $request->Merk;
        $asetLain->Ukuran = $request->Ukuran;
        $asetLain->Bahan = $request->Bahan;
        $asetLain->TahunPembuatan = $request->TahunPembuatan;
        $asetLain->NomorPabrik = $request->NomorPabrik;
        $asetLain->NomorRangka = $request->NomorRangka;
        $asetLain->NomorMesin = $request->NomorMesin;
        $asetLain->NomorPolisi = $request->NomorPolisi;
        $asetLain->NomorBPKB = $request->NomorBPKB;
        $asetLain->CaraPerolehan = $request->CaraPerolehan;
        $asetLain->JmlBrg = $request->JmlBrg;
        $asetLain->HargaSatuan = $request->HargaSatuan;
        $asetLain->HargaPerolehan = $request->HargaPerolehan;
        // $asetLain->KodeSubAkun = $request->KodeSubAkun;
        // $asetLain->KodeTmbh = $request->KodeTmbh;
        // $asetLain->KodeKurang = $request->KodeKurang;
        $asetLain->SpNo = $request->SpNo;
        $asetLain->SpTgl = $request->SpTgl;
        $asetLain->KwNo = $request->KwNo;
        $asetLain->KwTgl = $request->KwTgl;
        $asetLain->BaNo = $request->BaNo;
        $asetLain->BaTgl = $request->BaTgl;
        $asetLain->SkpdPemberi = $request->SkpdPemberi;
        $asetLain->KodeLama = $request->KodeLama;
        $asetLain->Uraian = $request->Uraian;
        if ($request->hasFile('FotoBrg')) {
            $request->file('FotoBrg')->move('FotoBrg/', $request->file('FotoBrg')->getClientOriginalName());
            $asetLain->FotoBrg = $request->file('FotoBrg')->getClientOriginalName();
            $asetLain->save();
        }
        $asetLain->save();

        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('/form/alain')->with('sukses', 'Data Berhasil Dibuat');
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
            'NamaBarang' => ['required'],
            'NoReg' => ['required'],
            'Merk' => ['required'],
            'Ukuran' => ['required'],
            'Bahan' => ['required'],
            'TahunPembuatan' => ['required'],
            'NomorPabrik' => ['required'],
            'NomorRangka' => ['required'],
            'NomorMesin' => ['required'],
            'NomorPolisi' => ['required'],
            'NomorBPKB' => ['required'],
            'CaraPerolehan' => ['required'],
            'JmlBrg' => ['required'],
            'HargaSatuan' => ['required'],
            'HargaPerolehan' => ['required'],
            // 'KodeSubAkun' => ['required'],
            // 'KodeTmbh' => ['required'],
            // 'KodeKurang' => ['required'],
            'SpNo' => ['required'],
            'SpTgl' => ['required'],
            'KwNo' => ['required'],
            'KwTgl' => ['required'],
            'BaNo' => ['required'],
            'BaTgl' => ['required'],
            'SkpdPemberi' => ['required'],
            'KodeLama' => ['required'],
            'Uraian' => ['required'],
            'FotoBrg' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $ubah = asetLain::findorfail($id);
        $awal = $ubah->FotoBrg;
        
        $asetLains = [
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
            // 'KodeSubAkun' => $request->KodeSubAkun,
            // 'KodeTmbh' => $request->KodeTmbh,
            // 'KodeKurang' => $request->KodeKurang,
            'SpNo' => $request->SpNo,
            'SpTgl' => $request->SpTgl,
            'KwNo' => $request->KwNo,
            'KwTgl' => $request->KwTgl,
            'BaNo' => $request->BaNo,
            'BaTgl' => $request->BaTgl,
            'SkpdPemberi' => $request->SkpdPemberi,
            'KodeLama' => $request->KodeLama,
            'Uraian' => $request->Uraian,
            'FotoBrg' => $awal,
        ];

        $request->FotoBrg->move(public_path().'/FotoBrg', $awal);

        $ubah->update($asetLains);

        Alert::success('Success', 'Data Berhasil Dirubah');
        return redirect('/form/alain');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asetLain = asetLain::where('id', $id)->delete();

        Alert::Error('Data Berhasil Dihapus');
        return redirect('/form/alain');
    }
}
