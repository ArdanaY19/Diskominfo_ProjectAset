<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bangunan extends Model
{
    protected $table = 'bangunans';
    protected $guarded = ['no'];

    public function kode()
    {
        return $this->belongsTo('App\kode');
    }
}
