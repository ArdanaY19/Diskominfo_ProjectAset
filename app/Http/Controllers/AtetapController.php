<?php

namespace App\Http\Controllers;

use Redirect;
use App\asetTtpLain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Exports\AtetapExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class AtetapController extends Controller
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

    public function atetap()
    {
        $asetTtpLains = DB::table('aset_ttp_lains')
        ->orderBy('id', 'desc')
        ->get();

        return view('form/atetap', compact('asetTtpLains'));
    }

    public function formAtetap()
    {
        return view('data.formAtetap');
    }

    public function editAtetap($id)
    {
        $asetTtpLains = asetTtpLain::findorfail($id);
        return view('update.editAtetap', compact('asetTtpLains'));
    }

    public function atetapexport()
    {
        return Excel::download(new AtetapExport, 'asettetaplain.xlsx');
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
            'NoKodeBrg' => ['required'],
            'NamaBarang' => ['required'],
            'NoReg' => ['required'],
            'JudulBuku' => ['required'],
            'Spesifikasi' => ['required'],
            'SeniAsalDaerah' => ['required'],
            'SeniPencipta' => ['required'],
            'SeniBahan' => ['required'],
            'JenisHT' => ['required'],
            'UkuranHT' => ['required'],
            'TahunCetak' => ['required'],
            'Jumlah' => ['required'],
            'HargaSatuan' => ['required'],
            'HargaPerolehan' => ['required'],
            // 'KodeSubAkun' => ['required'],
            // 'SubSub' => ['required'],
            // 'KodeTmbh' => ['required'],
            // 'KodeKurang' => ['required'],
            'SpNo' => ['required'],
            'SpTgl' => ['required'],
            'KwNo' => ['required'],
            'KwTgl' => ['required'],
            'BaNo' => ['required'],
            'BaTgl' => ['required'],
            'SkpdPemberi' => ['required'],
            // 'KodeSubSubAkun' => ['required'],
            // 'Kapitalis' => ['required'],
            'KodeLama' => ['required'],
            'KodeBaru' => ['required'],
            'CekKecocokan' => ['required'],
            'Level1' => ['required'],
            'Level2' => ['required'],
            'Level3' => ['required'],
            'Level4' => ['required'],
            'Level5' => ['required'],
            'FotoBrg' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $asetTtpLain = new \App\asetTtpLain;
        $asetTtpLain->NamaBarang = $request->NamaBarang;
        $asetTtpLain->NoKodeBrg = $request->NoKodeBrg;
        $asetTtpLain->NoReg = $request->NoReg;
        $asetTtpLain->JudulBuku = $request->JudulBuku;
        $asetTtpLain->Spesifikasi = $request->Spesifikasi;
        $asetTtpLain->SeniAsalDaerah = $request->SeniAsalDaerah;
        $asetTtpLain->SeniPencipta = $request->SeniPencipta;
        $asetTtpLain->SeniBahan = $request->SeniBahan;
        $asetTtpLain->JenisHT = $request->JenisHT;
        $asetTtpLain->UkuranHT = $request->UkuranHT;
        $asetTtpLain->Jumlah = $request->Jumlah;
        $asetTtpLain->TahunCetak = $request->TahunCetak;
        $asetTtpLain->HargaSatuan = $request->HargaSatuan;
        $asetTtpLain->HargaPerolehan = $request->HargaPerolehan;
        // $asetTtpLain->KodeSubAkun = $request->KodeSubAkun;
        // $asetTtpLain->SubSub = $request->SubSub;
        // $asetTtpLain->KodeTmbh = $request->KodeTmbh;
        // $asetTtpLain->KodeKurang = $request->KodeKurang;
        $asetTtpLain->SpNo = $request->SpNo;
        $asetTtpLain->SpTgl = $request->SpTgl;
        $asetTtpLain->KwNo = $request->KwNo;
        $asetTtpLain->KwTgl = $request->KwTgl;
        $asetTtpLain->BaNo = $request->BaNo;
        $asetTtpLain->BaTgl = $request->BaTgl;
        $asetTtpLain->SkpdPemberi = $request->SkpdPemberi;
        // $asetTtpLain->KodeSubSubAkun = $request->KodeSubSubAkun;
        // $asetTtpLain->Kapitalis = $request->Kapitalis;
        $asetTtpLain->KodeLama = $request->KodeLama;
        $asetTtpLain->KodeBaru = $request->KodeBaru;
        $asetTtpLain->CekKecocokan = $request->CekKecocokan;
        $asetTtpLain->Level1 = $request->Level1;
        $asetTtpLain->Level2 = $request->Level2;
        $asetTtpLain->Level3 = $request->Level3;
        $asetTtpLain->Level4 = $request->Level4;
        $asetTtpLain->Level5 = $request->Level5;
        if ($request->hasFile('FotoBrg')) {
            $request->file('FotoBrg')->move('FotoBrg/', $request->file('FotoBrg')->getClientOriginalName());
            $asetTtpLain->FotoBrg = $request->file('FotoBrg')->getClientOriginalName();
            $asetTtpLain->save();
        }
        $asetTtpLain->save();

        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('/form/atetap')->with('sukses', 'Data Berhasil Dibuat');
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
            'NoKodeBrg' => ['required'],
            'NamaBarang' => ['required'],
            'NoReg' => ['required'],
            'JudulBuku' => ['required'],
            'Spesifikasi' => ['required'],
            'SeniAsalDaerah' => ['required'],
            'SeniPencipta' => ['required'],
            'SeniBahan' => ['required'],
            'JenisHT' => ['required'],
            'UkuranHT' => ['required'],
            'TahunCetak' => ['required'],
            'Jumlah' => ['required'],
            'HargaSatuan' => ['required'],
            'HargaPerolehan' => ['required'],
            // 'KodeSubAkun' => ['required'],
            // 'SubSub' => ['required'],
            // 'KodeTmbh' => ['required'],
            // 'KodeKurang' => ['required'],
            'SpNo' => ['required'],
            'SpTgl' => ['required'],
            'KwNo' => ['required'],
            'KwTgl' => ['required'],
            'BaNo' => ['required'],
            'BaTgl' => ['required'],
            'SkpdPemberi' => ['required'],
            // 'KodeSubSubAkun' => ['required'],
            // 'Kapitalis' => ['required'],
            'KodeLama' => ['required'],
            'KodeBaru' => ['required'],
            'CekKecocokan' => ['required'],
            'Level1' => ['required'],
            'Level2' => ['required'],
            'Level3' => ['required'],
            'Level4' => ['required'],
            'Level5' => ['required'],
            'FotoBrg' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $ubah = asetTtpLain::findorfail($id);
        $awal = $ubah->FotoBrg;
        
        $asetTtpLains = [
            'NamaBarang' => $request->NamaBarang,
            'NoKodeBrg' => $request->NoKodeBrg,
            'NoReg' => $request->NoReg,
            'JudulBuku' => $request->JudulBuku,
            'Spesifikasi' => $request->Spesifikasi,
            'SeniAsalDaerah' => $request->SeniAsalDaerah,
            'SeniPencipta' => $request->SeniPencipta,
            'SeniBahan' => $request->SeniBahan,
            'JenisHT' => $request->JenisHT,
            'UkuranHT' => $request->UkuranHT,
            'Jumlah' => $request->Jumlah,
            'TahunCetak' => $request->TahunCetak,
            'HargaSatuan' => $request->HargaSatuan,
            'HargaPerolehan' => $request->HargaPerolehan,
            // 'KodeSubAkun' => $request->KodeSubAkun,
            // 'SubSub' => $request->SubSub,
            // 'KodeTmbh' => $request->KodeTmbh,
            // 'KodeKurang' => $request->KodeKurang,
            'SpNo' => $request->SpNo,
            'SpTgl' => $request->SpTgl,
            'KwNo' => $request->KwNo,
            'KwTgl' => $request->KwTgl,
            'BaNo' => $request->BaNo,
            'BaTgl' => $request->BaTgl,
            'SkpdPemberi' => $request->SkpdPemberi,
            // 'KodeSubSubAkun' => $request->KodeSubSubAkun,
            // 'Kapitalis' => $request->Kapitalis,
            'KodeLama' => $request->KodeLama,
            'KodeBaru' => $request->KodeBaru,
            'CekKecocokan' => $request->CekKecocokan,
            'Level1' => $request->Level1,
            'Level2' => $request->Level2,
            'Level3' => $request->Level3,
            'Level4' => $request->Level4,
            'Level5' => $request->Level5,
            'FotoBrg' => $awal,
        ];

        $request->FotoBrg->move(public_path().'/FotoBrg', $awal);

        $ubah->update($asetTtpLains);

        Alert::success('Success', 'Data Berhasil Dirubah');
        return redirect('/form/atetap');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asetTtpLain = asetTtpLain::where('id', $id)->delete();

        Alert::Error('Data Berhasil Dihapus');
        return redirect('/form/atetap');
    }
}
