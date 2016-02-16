<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use \Carbon\Carbon;

class Marcfield extends Model
{
    public function __constructor()
    {

    }

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'marcfields';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['tagfield', 'description', 'repeatable', 'mandatory'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];


	/**
	 * Mutator: changes the type of the attribute created_at.
	 * $article->created_at = [something] uses automatically this method
	 *
	 * @param $date
	 */
	public function getCreatedAtAttribute($date)
	{
		return Carbon::parse($date)->format('d-m-Y H:i:s');
	}

	/**
	 * Mutator: changes the type of the attribute updated_at.
	 * $article->updated_at = [something] uses automatically this method
	 *
	 * @param $date
	 */
	public function getUpdatedAtAttribute($date)
	{
		return Carbon::parse($date)->format('d-m-Y H:i:s');
	}

	/**
	 * Mutator: changes the value of the attribute repeatable to true or false.
	 *
	 * @param $repeateable
	 */
	public function setRepeatableAttribute($repeatable)
	{
		$this->attributes['repeatable'] = $repeatable != null? true : false;
	}

	/**
	 * Mutator: changes the value of the attribute mandatory to true or false
	 *
	 * @param $date
	 */
	public function setMandatoryAttribute($mandatory)
	{
		$this->attributes['mandatory'] = $mandatory != null? true : false;
	}

	/**
	 * Return subfields.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\hasMany
	 */
	public function marcsubfields()
	{
		return $this->hasMany('App\Marcsubfield', 'tagfield');
	}

	/**
	 * Return itemtypes where the tagfield is used.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
	 */
	public function itemtypes()
	{
		return $this->belongsToMany('App\Itemtype', 'itemtype_marcfield');
	}
}
