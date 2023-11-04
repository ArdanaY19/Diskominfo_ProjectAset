<?php

namespace App\Http\Controllers;

use Redirect;
use App\gedungBgn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Exports\GedungExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class GedungController extends Controller
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

    public function gedung()
    {
        $gedungBgns = DB::table('gedung_bgns')
        ->orderBy('id', 'desc')
        ->get();

        return view('form/gedung', compact('gedungBgns'));
    }

    public function formGedung()
    {
        return view('data.formGedung');
    }

    public function editGedung($id)
    {
        $gedungBgns = gedungBgn::findorfail($id);
        return view('update.editGedung', compact('gedungBgns'));
    }

    public function gedungexport()
    {
        return Excel::download(new GedungExport, 'gedung.xlsx');
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
            'KondisiBgn' => ['required'],
            'KBTingkat' => ['required'],
            'KBPondasi' => ['required'],
            'LuasLt' => ['required'],
            'Luas' => ['required'],
            'DokTgl' => ['required'],
            'DokNo' => ['required'],
            'KodeTanah' => ['required'],
            'StatusTanah' => ['required'],
            'AsalUsul' => ['required'],
            'JumlahGd' => ['required'],
            'Alamat' => ['required'],
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
            // 'CekKecocokanKode' => ['required'],
            'Level1' => ['required'],
            'Level2' => ['required'],
            'Level3' => ['required'],
            'Level4' => ['required'],
            'Level5' => ['required'],
            'FotoBrg' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $gedungBgn = new \App\gedungBgn;
        $gedungBgn->NamaBarang = $request->NamaBarang;
        $gedungBgn->NoKodeBrg = $request->NoKodeBrg;
        $gedungBgn->NoReg = $request->NoReg;
        $gedungBgn->KondisiBgn = $request->KondisiBgn;
        $gedungBgn->KBTingkat = $request->KBTingkat;
        $gedungBgn->KBPondasi = $request->KBPondasi;
        $gedungBgn->LuasLt = $request->LuasLt;
        $gedungBgn->Alamat = $request->Alamat;
        $gedungBgn->DokTgl = $request->DokTgl;
        $gedungBgn->DokNo = $request->DokNo;
        $gedungBgn->Luas = $request->Luas;
        $gedungBgn->StatusTanah = $request->StatusTanah;
        $gedungBgn->KodeTanah = $request->KodeTanah;
        $gedungBgn->AsalUsul = $request->AsalUsul;
        $gedungBgn->JumlahGd = $request->JumlahGd;
        $gedungBgn->HargaPerolehan = $request->HargaPerolehan;
        // $gedungBgn->KodeSubAkun = $request->KodeSubAkun;
        // $gedungBgn->SubSub = $request->SubSub;
        // $gedungBgn->KodeTmbh = $request->KodeTmbh;
        // $gedungBgn->KodeKurang = $request->KodeKurang;
        $gedungBgn->SpNo = $request->SpNo;
        $gedungBgn->SpTgl = $request->SpTgl;
        $gedungBgn->KwNo = $request->KwNo;
        $gedungBgn->KwTgl = $request->KwTgl;
        $gedungBgn->BaNo = $request->BaNo;
        $gedungBgn->BaTgl = $request->BaTgl;
        $gedungBgn->SkpdPemberi = $request->SkpdPemberi;
        // $gedungBgn->KodeSubSubAkun = $request->KodeSubSubAkun;
        $gedungBgn->KodeLama = $request->KodeLama;
        $gedungBgn->KodeBaru = $request->KodeBaru;
        $gedungBgn->Level1 = $request->Level1;
        $gedungBgn->Level2 = $request->Level2;
        $gedungBgn->Level3 = $request->Level3;
        $gedungBgn->Level4 = $request->Level4;
        $gedungBgn->Level5 = $request->Level5;
        if ($request->hasFile('FotoBrg')) {
            $request->file('FotoBrg')->move('FotoBrg/', $request->file('FotoBrg')->getClientOriginalName());
            $gedungBgn->FotoBrg = $request->file('FotoBrg')->getClientOriginalName();
            $gedungBgn->save();
        }
        $gedungBgn->save();

        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('/form/gedung')->with('sukses', 'Data Berhasil Dibuat');
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
            'KondisiBgn' => ['required'],
            'KBTingkat' => ['required'],
            'KBPondasi' => ['required'],
            'LuasLt' => ['required'],
            'Luas' => ['required'],
            'DokTgl' => ['required'],
            'DokNo' => ['required'],
            'KodeTanah' => ['required'],
            'StatusTanah' => ['required'],
            'AsalUsul' => ['required'],
            'JumlahGd' => ['required'],
            'Alamat' => ['required'],
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
            // 'CekKecocokanKode' => ['required'],
            'Level1' => ['required'],
            'Level2' => ['required'],
            'Level3' => ['required'],
            'Level4' => ['required'],
            'Level5' => ['required'],
            'FotoBrg' => ['required', 'mimes:jpg,jpeg,png'],
        ]);

        $ubah = gedungBgn::findorfail($id);
        $awal = $ubah->FotoBrg;
        
        $gedungBgns = [
            'NamaBarang' => $request->NamaBarang,
            'NoKodeBrg' => $request->NoKodeBrg,
            'NoReg' => $request->NoReg,
            'KondisiBgn' => $request->KondisiBgn,
            'KBTingkat' => $request->KBTingkat,
            'KBPondasi' => $request->KBPondasi,
            'LuasLt' => $request->LuasLt,
            'Alamat' => $request->Alamat,
            'DokTgl' => $request->DokTgl,
            'DokNo' => $request->DokNo,
            'Luas' => $request->Luas,
            'StatusTanah' => $request->StatusTanah,
            'KodeTanah' => $request->KodeTanah,
            'AsalUsul' => $request->AsalUsul,
            'JumlahGd' => $request->JumlahGd,
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
            'KodeLama' => $request->KodeLama,
            'KodeBaru' => $request->KodeBaru,
            'Level1' => $request->Level1,
            'Level2' => $request->Level2,
            'Level3' => $request->Level3,
            'Level4' => $request->Level4,
            'Level5' => $request->Level5,
            'FotoBrg' => $awal,
        ];

        $request->FotoBrg->move(public_path().'/FotoBrg', $awal);

        $ubah->update($gedungBgns);

        Alert::success('Success', 'Data Berhasil Dirubah');
        return redirect('/form/gedung');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gedungBgn = gedungBgn::where('id', $id)->delete();

        Alert::Error('Data Berhasil Dihapus');
        return redirect('/form/gedung');
    }
}
