<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project1Model extends Model
{
    protected $table = 'p1_user';
    protected $primarykey = 'id_p1_user';
    protected $fillable = ['id_p1_user','username_user','password_user','alamat_user','foto_user'];
}
