<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapasien extends Model
{
    protected $table ="datapasiens";
    protected $primaryKey ="id";
    protected $fillable =[
        'id','nama_pasien','ttl','nama_penanggung','pembayaran_status','alamat','no_telp' ];
}
