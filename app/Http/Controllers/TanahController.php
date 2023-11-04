<?php

namespace App\Http\Controllers;

use Redirect;
use App\tanah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Exports\TanahExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class TanahController extends Controller
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

    public function tanah()
    {
        $tanahs = DB::table('tanahs')
        ->orderBy('id', 'desc')
        ->get();

        return view('form/tanah', compact('tanahs'));
    }

    public function formTanah()
    {
        return view('data.formTanah');
    }

    public function editTanah($id)
    {
        $tanahs = tanah::findorfail($id);
        return view('update.editTanah', compact('tanahs'));
    }

    public function tanahexport()
    {
        return Excel::download(new TanahExport, 'tanah.xlsx');
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
            'NoKodeBrg' => ['required'],
            'NoReg' => ['required'],
            'Luas' => ['required'],
            'Tahun' => ['required'],
            'Alamat' => ['required'],
            'StatusHak' => ['required'],
            'SertifTgl' => ['required'],
            'SertifNo' => ['required'],
            'Penggunaan' => ['required'],
            'AsalUsul' => ['required'],
            'Jumlah' => ['required'],
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
            'KodeBaru' => ['required'],
            'Level1' => ['required'],
            'Level2' => ['required'],
            'Level3' => ['required'],
            'Level4' => ['required'],
            'Level5' => ['required'],
            'FotoBrg' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $tanah = new \App\tanah;
        $tanah->NamaBarang = $request->NamaBarang;
        $tanah->NoKodeBrg = $request->NoKodeBrg;
        $tanah->NoReg = $request->NoReg;
        $tanah->Luas = $request->Luas;
        $tanah->Tahun = $request->Tahun;
        $tanah->Alamat = $request->Alamat;
        $tanah->StatusHak = $request->StatusHak;
        $tanah->SertifTgl = $request->SertifTgl;
        $tanah->SertifNo = $request->SertifNo;
        $tanah->Penggunaan = $request->Penggunaan;
        $tanah->AsalUsul = $request->AsalUsul;
        $tanah->Jumlah = $request->Jumlah;
        $tanah->HargaPerolehan = $request->HargaPerolehan;
        // $tanah->KodeSubAkun = $request->KodeSubAkun;
        // $tanah->KodeTmbh = $request->KodeTmbh;
        // $tanah->KodeKurang = $request->KodeKurang;
        $tanah->SpNo = $request->SpNo;
        $tanah->SpTgl = $request->SpTgl;
        $tanah->KwNo = $request->KwNo;
        $tanah->KwTgl = $request->KwTgl;
        $tanah->BaNo = $request->BaNo;
        $tanah->BaTgl = $request->BaTgl;
        $tanah->SkpdPemberi = $request->SkpdPemberi;
        $tanah->KodeBaru = $request->KodeBaru;
        $tanah->Level1 = $request->Level1;
        $tanah->Level2 = $request->Level2;
        $tanah->Level3 = $request->Level3;
        $tanah->Level4 = $request->Level4;
        $tanah->Level5 = $request->Level5;
        if ($request->hasFile('FotoBrg')) {
            $request->file('FotoBrg')->move('FotoBrg/', $request->file('FotoBrg')->getClientOriginalName());
            $tanah->FotoBrg = $request->file('FotoBrg')->getClientOriginalName();
            $tanah->save();
        }
        $tanah->save();

        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('/form/tanah')->with('sukses', 'Data Berhasil Dibuat');
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
            'NoKodeBrg' => ['required'],
            'NoReg' => ['required'],
            'Luas' => ['required'],
            'Tahun' => ['required'],
            'Alamat' => ['required'],
            'StatusHak' => ['required'],
            'SertifTgl' => ['required'],
            'SertifNo' => ['required'],
            'Penggunaan' => ['required'],
            'AsalUsul' => ['required'],
            'Jumlah' => ['required'],
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
            'KodeBaru' => ['required'],
            'Level1' => ['required'],
            'Level2' => ['required'],
            'Level3' => ['required'],
            'Level4' => ['required'],
            'Level5' => ['required'],
            'FotoBrg' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $ubah = tanah::findorfail($id);
        $awal = $ubah->FotoBrg;
        
        $tanahs = [
            'NamaBarang' => $request->NamaBarang,
            'NoKodeBrg' => $request->NoKodeBrg,
            'NoReg' => $request->NoReg,
            'Luas' => $request->Luas,
            'Tahun' => $request->Tahun,
            'Alamat' => $request->Alamat,
            'StatusHak' => $request->StatusHak,
            'SertifTgl' => $request->SertifTgl,
            'SertifNo' => $request->SertifNo,
            'Penggunaan' => $request->Penggunaan,
            'AsalUsul' => $request->AsalUsul,
            'Jumlah' => $request->Jumlah,
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
            'KodeBaru' => $request->KodeBaru,
            'Level1' => $request->Level1,
            'Level2' => $request->Level2,
            'Level3' => $request->Level3,
            'Level4' => $request->Level4,
            'Level5' => $request->Level5,
            'FotoBrg' => $awal,
        ];

        $request->FotoBrg->move(public_path().'/FotoBrg', $awal);

        $ubah->update($tanahs);

        Alert::success('Success', 'Data Berhasil Dirubah');
        return redirect('/form/tanah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tanah = tanah::where('id', $id)->delete();

        Alert::Error('Data Berhasil Dihapus');
        return redirect('/form/tanah');
    }
}
