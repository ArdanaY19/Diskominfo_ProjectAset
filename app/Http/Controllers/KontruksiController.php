<?php

namespace App\Http\Controllers;

use Redirect;
use App\kontruksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Exports\KontruksiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class KontruksiController extends Controller
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

    public function kontruksi()
    {
        $kontruksis = DB::table('kontruksis')
        ->orderBy('id', 'desc')
        ->get();

        return view('form/kontruksi', compact('kontruksis'));
    }

    public function formKontruksi()
    {
        return view('data.formKontruksi');
    }

    public function editKontruksi($id)
    {
        $kontruksis = kontruksi::findorfail($id);
        return view('update.editKontruksi', compact('kontruksis'));
    }

    public function kontruksiexport()
    {
        return Excel::download(new KontruksiExport, 'kontruksi.xlsx');
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
            'Tingkat' => ['required'],
            'Beton' => ['required'],
            'Luas' => ['required'],
            'Alamat' => ['required'],
            'DokTgl' => ['required'],
            'DokNo' => ['required'],
            'ThMulai' => ['required'],
            'AsalUsul' => ['required'],
            'StatusTanah' => ['required'],
            'KodeTanah' => ['required'],
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
            'NilaiKontrak' => ['required'],
            'FotoBrg' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $kontruksi = new \App\kontruksi;
        $kontruksi->NamaBarang = $request->NamaBarang;
        $kontruksi->Tingkat = $request->Tingkat;
        $kontruksi->Beton = $request->Beton;
        $kontruksi->Luas = $request->Luas;
        $kontruksi->Alamat = $request->Alamat;
        $kontruksi->DokTgl = $request->DokTgl;
        $kontruksi->DokNo = $request->DokNo;
        $kontruksi->ThMulai = $request->ThMulai;
        $kontruksi->StatusTanah = $request->StatusTanah;
        $kontruksi->KodeTanah = $request->KodeTanah;
        $kontruksi->AsalUsul = $request->AsalUsul;
        $kontruksi->NilaiKontrak = $request->NilaiKontrak;
        // $kontruksi->KodeSubAkun = $request->KodeSubAkun;
        // $kontruksi->KodeTmbh = $request->KodeTmbh;
        // $kontruksi->KodeKurang = $request->KodeKurang;
        $kontruksi->SpNo = $request->SpNo;
        $kontruksi->SpTgl = $request->SpTgl;
        $kontruksi->KwNo = $request->KwNo;
        $kontruksi->KwTgl = $request->KwTgl;
        $kontruksi->BaNo = $request->BaNo;
        $kontruksi->BaTgl = $request->BaTgl;
        $kontruksi->SkpdPemberi = $request->SkpdPemberi;
        if ($request->hasFile('FotoBrg')) {
            $request->file('FotoBrg')->move('FotoBrg/', $request->file('FotoBrg')->getClientOriginalName());
            $kontruksi->FotoBrg = $request->file('FotoBrg')->getClientOriginalName();
            $kontruksi->save();
        }
        $kontruksi->save();

        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('/form/kontruksi')->with('sukses', 'Data Berhasil Dibuat');
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
            'Tingkat' => ['required'],
            'Beton' => ['required'],
            'Luas' => ['required'],
            'Alamat' => ['required'],
            'DokTgl' => ['required'],
            'DokNo' => ['required'],
            'ThMulai' => ['required'],
            'AsalUsul' => ['required'],
            'StatusTanah' => ['required'],
            'KodeTanah' => ['required'],
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
            'NilaiKontrak' => ['required'],
            'FotoBrg' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $ubah = kontruksi::findorfail($id);
        $awal = $ubah->FotoBrg;
        
        $kontruksis = [
            'NamaBarang' => $request->NamaBarang,
            'Tingkat' => $request->Tingkat,
            'Beton' => $request->Beton,
            'Luas' => $request->Luas,
            'Alamat' => $request->Alamat,
            'DokTgl' => $request->DokTgl,
            'DokNo' => $request->DokNo,
            'ThMulai' => $request->ThMulai,
            'StatusTanah' => $request->StatusTanah,
            'KodeTanah' => $request->KodeTanah,
            'AsalUsul' => $request->AsalUsul,
            'NilaiKontrak' => $request->NilaiKontrak,
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
            'FotoBrg' => $awal,
        ];

        $request->FotoBrg->move(public_path().'/FotoBrg', $awal);

        $ubah->update($kontruksis);

        Alert::success('Success', 'Data Berhasil Dirubah');
        return redirect('/form/kontruksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kontruksi = kontruksi::where('id', $id)->delete();

        Alert::Error('Data Berhasil Dihapus');
        return redirect('/form/kontruksi');
    }
}
