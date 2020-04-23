<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table='karyawan';
    protected $primarykey='id_karyawan';
    protected $fillable=['nama_karyawan','alamat','no_hp'];
}
