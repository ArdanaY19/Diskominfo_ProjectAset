<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asetTtpLain extends Model
{
    protected $table = 'aset_ttp_lains';
    protected $guarded = ['no'];

    public function kode()
    {
        return $this->belongsTo('App\kode');
    }
}
