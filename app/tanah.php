<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tanah extends Model
{
    protected $table = 'tanahs';
    protected $guarded = ['no'];

    public function kode()
    {
        return $this->belongsTo('App\kode');
    }
}
