<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamesis extends Model
{
    protected $table ="anamnesis";
    protected $primaryKey ="id";
    protected $fillable =[
        'id','id_pasien','keluhan_utama','riwayat_penyakit_dahulu','riwayat_alergi','riwayat_kehamilan','riwayat_kelahiran', ];
}
