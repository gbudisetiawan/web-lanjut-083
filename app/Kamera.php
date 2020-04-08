<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamera extends Model
{
    protected $table='kamera';
    protected $primarykey='id_kamera';
    protected $fillable=['nama_kamera','seri_kamera','harga_sewa'];
}
