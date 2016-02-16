<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class RecordField extends Model
{
    public function __constructor()
    {

    }

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'records_fields';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['record_id', 'tagfield', 'tagsubfield', 'value',];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];


	/**
	 * Mutator: changes the type of the attribute published_at.
	 * $biblio->published_at = [something] uses automatically this method
	 *
	 * @param $date
	 */
	public function getCreatedAtAttribute($date)
	{
		return Carbon::parse($date)->format('d-m-Y H:i:s');
	}

	/**
	 * Mutator: changes the type of the attribute updated_at.
	 * $biblio->updated_at = [something] uses automatically this method
	 *
	 * @param $date
	 */
	public function getUpdatedAtAttribute($date)
	{
		return Carbon::parse($date)->format('d-m-Y H:i:s');
	}

	/**
	 * Mutator: changes the value of the attribute hidden to true or false
	 *
	 * @param $date
	 */
	public function setHiddenAttribute($hidden)
	{
		$this->attributes['hidden'] = $hidden != null? true : false;
	}

	/**
	 * Return record of field.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\belongsTo
	 */
	public function record()
	{
		return $this->belongsTo('App\Record');
	}

}
