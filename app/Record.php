<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class Record extends Model
{
    public function __constructor()
    {

    }

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'records';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['biblio', 'itemtype', 'hidden'];

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
	 * Return biblio of record.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\belongsTo
	 */
	public function biblio()
	{
		return $this->belongsTo('App\Biblio', 'itemtype');
	}

	/**
	 * Return itemtype of record.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\belongsTo
	 */
	public function itemtype()
	{
		return $this->belongsTo('App\Itemtype', 'itemtype');
	}

	/**
	 * Return fields of record.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\hasMany
	 */
	public function fields()
	{
		return $this->hasMany('App\RecordField');
	}	
}
