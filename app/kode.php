<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kode extends Model
{
    protected $table = 'kodes';
    protected $guarded = ['no'];

    public function asetLain()
    {
        return $this->hasOne('App\asetLain');
    }

    public function asetTtpLain()
    {
        return $this->hasOne('App\asetTtpLain');
    }

    public function bangunan()
    {
        return $this->hasOne('App\bangunan');
    }

    public function gedungbgn()
    {
        return $this->hasOne('App\gedungbgn');
    }

    public function jrgnIrigasi()
    {
        return $this->hasOne('App\jrgnIrigasi');
    }

    public function kontruksi()
    {
        return $this->hasOne('App\kontruksi');
    }

    public function tanah()
    {
        return $this->hasOne('App\tanah');
    }
}
