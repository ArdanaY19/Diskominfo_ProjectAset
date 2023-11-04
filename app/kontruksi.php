<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontruksi extends Model
{
    protected $table = 'kontruksis';
    protected $guarded = ['no'];

    public function kode()
    {
        return $this->belongsTo('App\kode');
    }
}
