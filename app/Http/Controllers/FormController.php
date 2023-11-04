<?php

namespace App\Http\Controllers;


use Redirect;
use App\asetLain;
use App\asetTtpLain;
use App\mesin;
use App\gedungBgn;
use App\jrgnIrigasi;
use App\kode;
use App\kodeBarang;
use App\kodeReklas;
use App\kodeSub;
use App\kontruksi;
use App\tanah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Artikel;
use Auth;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formTanah()
    {
        $tanahs = tanah::all();
        return view('data.formTanah', compact('tanahs'));
    }

    public function formAlain()
    {
        return view('data.formAlain');
    }

    public function formAtetap()
    {
        $asetTtpLains = asetTtpLain::all();
        return view('data.formAtetap', compact('asetTtpLains'));
    }

    public function formJaringan()
    {
        $jrgnIrigasis = jrgnIrigasi::all();
        return view('data.formJaringan', compact('jrgnIrigasis'));
    }

    public function formKontruksi()
    {
        $kontruksis = kontruksi::all();
        return view('data.formKontruksi', compact('kontruksis'));
    }

    public function formGedung()
    {
        $gedungBgns = gedungBgn::all();
        return view('data.formGedung', compact('gedungBgns'));
    }

    public function formMesin()
    {
        $mesins = mesin::all();
        return view('data.formMesin', compact('mesins'));
    }

    public function createAlain(Request $request)
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
            'KodeSubAkun' => ['required'],
            'KodeTmbh' => ['required'],
            'KodeKurang' => ['required'],
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
        $asetLain->KodeSubAkun = $request->KodeSubAkun;
        $asetLain->KodeTmbh = $request->KodeTmbh;
        $asetLain->KodeKurang = $request->KodeKurang;
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
        return redirect('/form/alain')->with('sukses', 'Data Berhasil Dibuat');
    }

    public function createAtetap(Request $request)
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
            'KodeSubAkun' => ['required'],
            'SubSub' => ['required'],
            'KodeTmbh' => ['required'],
            'KodeKurang' => ['required'],
            'SpNo' => ['required'],
            'SpTgl' => ['required'],
            'KwNo' => ['required'],
            'KwTgl' => ['required'],
            'BaNo' => ['required'],
            'BaTgl' => ['required'],
            'SkpdPemberi' => ['required'],
            'KodeSubSubAkun' => ['required'],
            'Kapitalis' => ['required'],
            'KodeLama' => ['required'],
            'KodeBaru' => ['required'],
            'CekKecocokanKode' => ['required'],
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
        $asetTtpLain->KodeSubAkun = $request->KodeSubAkun;
        $asetTtpLain->SubSub = $request->SubSub;
        $asetTtpLain->KodeTmbh = $request->KodeTmbh;
        $asetTtpLain->KodeKurang = $request->KodeKurang;
        $asetTtpLain->SpNo = $request->SpNo;
        $asetTtpLain->SpTgl = $request->SpTgl;
        $asetTtpLain->KwNo = $request->KwNo;
        $asetTtpLain->KwTgl = $request->KwTgl;
        $asetTtpLain->BaNo = $request->BaNo;
        $asetTtpLain->BaTgl = $request->BaTgl;
        $asetTtpLain->SkpdPemberi = $request->SkpdPemberi;
        $asetTtpLain->KodeSubSubAkun = $request->KodeSubSubAkun;
        $asetTtpLain->Kapitalis = $request->Kapitalis;
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

        return redirect('/form/atetap')->with('sukses', 'Data Berhasil Dibuat');
    }

    public function createJaringan(Request $request)
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
            'KodeSubAkun' => ['required'],
            'SubSub' => ['required'],
            'KodeTmbh' => ['required'],
            'KodeKurang' => ['required'],
            'SpNo' => ['required'],
            'SpTgl' => ['required'],
            'KwNo' => ['required'],
            'KwTgl' => ['required'],
            'BaNo' => ['required'],
            'BaTgl' => ['required'],
            'SkpdPemberi' => ['required'],
            'KodeSubSubAkun' => ['required'],
            'KodeLama' => ['required'],
            'KodeBaru' => ['required'],
            'CekKecocokanKode' => ['required'],
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
        $jrgnIrigasi->KodeSubAkun = $request->KodeSubAkun;
        $jrgnIrigasi->SubSub = $request->SubSub;
        $jrgnIrigasi->KodeTmbh = $request->KodeTmbh;
        $jrgnIrigasi->KodeKurang = $request->KodeKurang;
        $jrgnIrigasi->SpNo = $request->SpNo;
        $jrgnIrigasi->SpTgl = $request->SpTgl;
        $jrgnIrigasi->KwNo = $request->KwNo;
        $jrgnIrigasi->KwTgl = $request->KwTgl;
        $jrgnIrigasi->BaNo = $request->BaNo;
        $jrgnIrigasi->BaTgl = $request->BaTgl;
        $jrgnIrigasi->SkpdPemberi = $request->SkpdPemberi;
        $jrgnIrigasi->KodeSubSubAkun = $request->KodeSubSubAkun;
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

        return redirect('/form/jaringan')->with('sukses', 'Data Berhasil Dibuat');
    }

    public function createGedung(Request $request)
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
            'KodeSubAkun' => ['required'],
            'SubSub' => ['required'],
            'KodeTmbh' => ['required'],
            'KodeKurang' => ['required'],
            'SpNo' => ['required'],
            'SpTgl' => ['required'],
            'KwNo' => ['required'],
            'KwTgl' => ['required'],
            'BaNo' => ['required'],
            'BaTgl' => ['required'],
            'SkpdPemberi' => ['required'],
            'KodeSubSubAkun' => ['required'],
            'KodeLama' => ['required'],
            'KodeBaru' => ['required'],
            'CekKecocokanKode' => ['required'],
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
        $gedungBgn->KodeSubAkun = $request->KodeSubAkun;
        $gedungBgn->SubSub = $request->SubSub;
        $gedungBgn->KodeTmbh = $request->KodeTmbh;
        $gedungBgn->KodeKurang = $request->KodeKurang;
        $gedungBgn->SpNo = $request->SpNo;
        $gedungBgn->SpTgl = $request->SpTgl;
        $gedungBgn->KwNo = $request->KwNo;
        $gedungBgn->KwTgl = $request->KwTgl;
        $gedungBgn->BaNo = $request->BaNo;
        $gedungBgn->BaTgl = $request->BaTgl;
        $gedungBgn->SkpdPemberi = $request->SkpdPemberi;
        $gedungBgn->KodeSubSubAkun = $request->KodeSubSubAkun;
        $gedungBgn->KodeLama = $request->KodeLama;
        $gedungBgn->KodeBaru = $request->KodeBaru;
        $gedungBgn->CekKecocokanKode = $request->CekKecocokanKode;
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

        return redirect('/form/gedung')->with('sukses', 'Data Berhasil Dibuat');
    }

    public function createKontruksi(Request $request)
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
            'KodeSubAkun' => ['required'],
            'KodeTmbh' => ['required'],
            'KodeKurang' => ['required'],
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
        $kontruksi->KodeSubAkun = $request->KodeSubAkun;
        $kontruksi->KodeTmbh = $request->KodeTmbh;
        $kontruksi->KodeKurang = $request->KodeKurang;
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

        return redirect('/form/kontruksi')->with('sukses', 'Data Berhasil Dibuat');
    }

    public function createTanah(Request $request)
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
            'KodeSubAkun' => ['required'],
            'KodeTmbh' => ['required'],
            'KodeKurang' => ['required'],
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
        $tanah->KodeSubAkun = $request->KodeSubAkun;
        $tanah->KodeTmbh = $request->KodeTmbh;
        $tanah->KodeKurang = $request->KodeKurang;
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

        return redirect('/form/tanah')->with('sukses', 'Data Berhasil Dibuat');
    }


    public function createMesin(Request $request)
    {
        $this->validate($request, [
            'KodeBarang' => ['required', 'string', 'max:100'],
            'NamaBarang' => ['required'],
            // 'NoReg' => ['required'],
            'Merk' => ['required'],
            'Ukuran' => ['required'],
            'Bahan' => ['required'],
            'TahunPembuatan' => ['required'],
            'NomorPabrik' => ['required'],
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
            $request->file('FotoBrg')->move('FotoBrg/', $request->file('FotoBrg')->getClientOriginalName());
            $mesin->FotoBrg = $request->file('FotoBrg')->getClientOriginalName();
            $request->file('FotoBrg2')->move('FotoBrg2/', $request->file('FotoBrg2')->getClientOriginalName());
            $mesin->FotoBrg2 = $request->file('FotoBrg2')->getClientOriginalName();
            $mesin->save();
        }
        $mesin->save();

        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect('/form/mesin')->with('sukses', 'Data Berhasil Dibuat');
    }

    public function deleteMesin($id)
    {
        $mesins = Mesin::where('id', $id)->delete();
        
        Alert::Error('Data Berhasil Dihapus');
        return redirect('/form/mesin');
    }

}
