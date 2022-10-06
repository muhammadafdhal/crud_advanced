<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_user extends Model
{
    //
    protected $table = 'data_users';
    protected $primaryKey = 'id';
    protected $fillable = ['
    nama', 'telp','alamat'];
}
