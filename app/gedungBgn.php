<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gedungBgn extends Model
{
    protected $table = 'gedung_bgns';
    protected $guarded = ['no'];

    public function kode()
    {
        return $this->belongsTo('App\kode');
    }
}
