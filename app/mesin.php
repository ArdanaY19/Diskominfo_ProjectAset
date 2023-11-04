<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mesin extends Model
{
    protected $table = 'mesins';
    protected $guarded = ['no'];

    public function kode()
    {
        return $this->belongsTo('App\kode');
    }
}
