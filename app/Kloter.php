<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kloter extends Model
{
     protected $table = 'kloters';
     protected $fillable = ['No_kloter','id_pembimbing'];
     public $timestamps = true;

	public function Pembimbing()
	{
		return $this->belongsTo('App\Pembimbing','id_pembimbing');
	}

    public function IdentitasJemaah()
    {
    	return $this->hasOne('App\IdentitasJemaah','id_kloter');
    }
}
