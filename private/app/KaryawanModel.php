<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaryawanModel extends Model
{
    protected $table ='employees';
    protected $fillable =[
        'nip',
        'nama',
        'tgl_lahir',
        'gender',
        'foto'
      ];
}
