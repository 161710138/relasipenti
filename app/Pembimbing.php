<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    protected $table = 'pembimbings'; // -> meminta izin untuk mengakses table dosens
    protected $fillable = ['Nama_pembimbing','Jenis_kelamin','Tempat_lahir','Tanggal_lahir','Alamat']; // -> field apa saja yang boleh di isi -> fill = mengisi, able = boleh jadi fillable = boleh di isi
    public $timestamps = true; // penanggalan otomatis record kapan di isi dan di update di aktikfkan

    public function Kloter()
    {
    	return $this->hasMany('App\Kloter','id_pembimbing');
    }
}
