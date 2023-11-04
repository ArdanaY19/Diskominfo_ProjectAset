<?php

namespace App\Http\Controllers;

use Redirect;
use App\jrgnIrigasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Exports\JaringanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class JaringanController extends Controller
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

    public function jaringan()
    {
        $jrgnIrigasis = DB::table('jrgn_irigasis')
        ->orderBy('id', 'desc')
        ->get();

        return view('form/jaringan', compact('jrgnIrigasis'));
    }

    public function formJaringan()
    {
        return view('data.formJaringan');
    }

    public function editJaringan($id)
    {
        $jrgnIrigasis = jrgnIrigasi::findorfail($id);
        return view('update.editJaringan', compact('jrgnIrigasis'));
    }

    public function jaringanexport()
    {
        return Excel::download(new JaringanExport, 'jaringan.xlsx');
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
            'Kontruksi' => ['required'],
            'Panjang' => ['required'],
            'Lebar' => ['required'],
            'Luas' => ['required'],
            'DokTgl' => ['required'],
            'DokNo' => ['required'],
            'KodeTanah' => ['required'],
            'AsalUsul' => ['required'],
            'Jumlah' => ['required'],
            'Kondisi' => ['required'],
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

        $jrgnIrigasi = new \App\jrgnIrigasi;
        $jrgnIrigasi->NamaBarang = $request->NamaBarang;
        $jrgnIrigasi->NoKodeBrg = $request->NoKodeBrg;
        $jrgnIrigasi->NoReg = $request->NoReg;
        $jrgnIrigasi->Kontruksi = $request->Kontruksi;
        $jrgnIrigasi->Panjang = $request->Panjang;
        $jrgnIrigasi->Lebar = $request->Lebar;
        $jrgnIrigasi->Luas = $request->Luas;
        $jrgnIrigasi->DokTgl = $request->DokTgl;
        $jrgnIrigasi->DokNo = $request->DokNo;
        $jrgnIrigasi->KodeTanah = $request->KodeTanah;
        $jrgnIrigasi->AsalUsul = $request->AsalUsul;
        $jrgnIrigasi->Jumlah = $request->Jumlah;
        $jrgnIrigasi->HargaPerolehan = $request->HargaPerolehan;
        $jrgnIrigasi->Kondisi = $request->Kondisi;
        // $jrgnIrigasi->KodeSubAkun = $request->KodeSubAkun;
        // $jrgnIrigasi->SubSub = $request->SubSub;
        // $jrgnIrigasi->KodeTmbh = $request->KodeTmbh;
        // $jrgnIrigasi->KodeKurang = $request->KodeKurang;
        $jrgnIrigasi->SpNo = $request->SpNo;
        $jrgnIrigasi->SpTgl = $request->SpTgl;
        $jrgnIrigasi->KwNo = $request->KwNo;
        $jrgnIrigasi->KwTgl = $request->KwTgl;
        $jrgnIrigasi->BaNo = $request->BaNo;
        $jrgnIrigasi->BaTgl = $request->BaTgl;
        $jrgnIrigasi->SkpdPemberi = $request->SkpdPemberi;
        // $jrgnIrigasi->KodeSubSubAkun = $request->KodeSubSubAkun;
        $jrgnIrigasi->KodeLama = $request->KodeLama;
        $jrgnIrigasi->KodeBaru = $request->KodeBaru;
        $jrgnIrigasi->CekKecocokan = $request->CekKecocokan;
        $jrgnIrigasi->Level1 = $request->Level1;
        $jrgnIrigasi->Level2 = $request->Level2;
        $jrgnIrigasi->Level3 = $request->Level3;
        $jrgnIrigasi->Level4 = $request->Level4;
        $jrgnIrigasi->Level5 = $request->Level5;
        if ($request->hasFile('FotoBrg')) {
            $request->file('FotoBrg')->move('FotoBrg/', $request->file('FotoBrg')->getClientOriginalName());
            $jrgnIrigasi->FotoBrg = $request->file('FotoBrg')->getClientOriginalName();
            $jrgnIrigasi->save();
        }
        $jrgnIrigasi->save();

        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('/form/jaringan')->with('sukses', 'Data Berhasil Dibuat');
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
            'Kontruksi' => ['required'],
            'Panjang' => ['required'],
            'Lebar' => ['required'],
            'Luas' => ['required'],
            'DokTgl' => ['required'],
            'DokNo' => ['required'],
            'KodeTanah' => ['required'],
            'AsalUsul' => ['required'],
            'Jumlah' => ['required'],
            'Kondisi' => ['required'],
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
        
        $ubah = jrgnIrigasi::findorfail($id);
        $awal = $ubah->FotoBrg;
        
        $jrgnIrigasis = [
            'NamaBarang' => $request->NamaBarang,
            'NoKodeBrg' => $request->NoKodeBrg,
            'NoReg' => $request->NoReg,
            'Kontruksi' => $request->Kontruksi,
            'Panjang' => $request->Panjang,
            'Lebar' => $request->Lebar,
            'Luas' => $request->Luas,
            'DokTgl' => $request->DokTgl,
            'DokNo' => $request->DokNo,
            'KodeTanah' => $request->KodeTanah,
            'AsalUsul' => $request->AsalUsul,
            'Jumlah' => $request->Jumlah,
            'HargaPerolehan' => $request->HargaPerolehan,
            'Kondisi' => $request->Kondisi,
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

        $ubah->update($jrgnIrigasis);

        Alert::success('Success', 'Data Berhasil Dirubah');
        return redirect('/form/jaringan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jrgnIrigasi = jrgnIrigasi::where('id', $id)->delete();

        Alert::Error('Data Berhasil Dihapus');
        return redirect('/form/jaringan');
    }
}
