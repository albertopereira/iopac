<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use \Carbon\Carbon;

class Biblio extends Model
{
    public function __constructor()
    {

    }

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'biblios';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name'];

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
	 * Return records of biblio.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\hasMany
	 */
	public function records()
	{
		return $this->hasMany('App\Record', 'biblio');
	}
}
