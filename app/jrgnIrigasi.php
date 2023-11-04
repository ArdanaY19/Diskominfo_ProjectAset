<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jrgnIrigasi extends Model
{
    protected $table = 'jrgn_irigasis';
    protected $guarded = ['no'];

    public function kode()
    {
        return $this->belongsTo('App\kode');
    }
}
