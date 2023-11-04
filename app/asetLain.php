<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asetLain extends Model
{
    protected $table = 'aset_lains';
    protected $guarded = ['no'];

    public function kode()
    {
        return $this->belongsTo('App\kode');
    }
}
