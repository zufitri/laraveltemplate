<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $fillable = array('nama','nipd');

    public function mahasiswa()
    {
        return $this->hasmany('App\Mahasiswa','id_dosen');
    }
}
