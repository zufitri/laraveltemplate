<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $fillable = ['hobi'];

    public function mahasiswwa(){
        return $this->belongsToMany(
            'App\Mahasiswa',
            'mahasiswa_hobi',
            'id_hobi',
            'id_mahasiswa'
        );
    }
}
