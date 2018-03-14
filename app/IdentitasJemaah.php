<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdentitasJemaah extends Model
{
    protected $table = 'identitas_jemaahs';
    protected $fillable = ['Jemaah','asal_jemaah','id_kloter'];
    public $timestamps = true;

    public function Kloter()
	{
		return $this->belongsTo('App\Kloter','id_kloter');
	}
}
