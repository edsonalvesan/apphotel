<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model {

	

    public function getCreatedAtAttribute($value)
	{
		return date('d/m/Y H:i:s', strtotime($value)); 
	}

	/**
    * Relationships
    */
    public function user()
    {
        return $this->belongsTo('App\Contrato', 'contrato_id');
    }

}
