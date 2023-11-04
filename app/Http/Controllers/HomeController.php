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
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tanah = 'DB'::table('tanahs')->count();
        $mesin = 'DB'::table('mesins')->count();
        $gedung = 'DB'::table('gedung_bgns')->count();
        $jaringan = 'DB'::table('jrgn_irigasis')->count();
        $atetap = 'DB'::table('aset_ttp_lains')->count();
        $kontruksi = 'DB'::table('kontruksis')->count();
        $alain = 'DB'::table('aset_lains')->count();
        return view('home', compact('tanah', 'mesin', 'gedung', 'jaringan', 'atetap', 'kontruksi', 'alain'));
    }

    public function tanah()
    {
        $tanahs = tanah::all();
        return view('form/tanah', compact('tanahs'));
    }

    public function mesin()
    {
        $mesins = mesin::all();
        return view('form/mesin', compact('mesins'));
    }

    public function gedung()
    {
        $gedungBgns = gedungBgn::all();
        return view('form/gedung', compact('gedungBgns'));
    }

    public function jaringan()
    {
        $jrgnIrigasis = jrgnIrigasi::all();
        return view('form/jaringan', compact('jrgnIrigasis'));
    }

    public function atetap()
    {
        $asetTtpLains = asetTtpLain::all();
        return view('form/atetap', compact('asetTtpLains'));
    }

    public function kontruksi()
    {
        $kontruksis = kontruksi::all();
        return view('form/kontruksi', compact('kontruksis'));
    }

    public function alain()
    {
        
        $asetLains = asetLain::all();
        return view('form/alain', compact('asetLains'));
    }
}
