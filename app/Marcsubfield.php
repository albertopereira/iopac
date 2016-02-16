<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Carbon\Carbon;

class Marcsubfield extends Model
{

    public function __constructor()
    {

    }

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'marcsubfields';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['tagfield', 'tagsubfield', 'description', 'repeatable', 'mandatory', 'hidden'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];


	/**
	 * Mutator: changes the type of the attribute published_at.
	 * $article->published_at = [something] uses automatically this method
	 *
	 * @param $date
	 */
	public function getCreatedAtAttribute($date)
	{
		return Carbon::parse($date)->format('d-m-Y H:i:s');
	}

	/**
	 * Mutator: changes the type of the attribute published_at.
	 * $article->published_at = [something] uses automatically this method
	 *
	 * @param $date
	 */
	public function getUpdatedAtAttribute($date)
	{
		return Carbon::parse($date)->format('d-m-Y H:i:s');
	}

	/**
	 * Mutator: changes the type of the attribute published_at.
	 * $article->published_at = [something] uses automatically this method
	 *
	 * @param $date
	 */
	public function setRepeatableAttribute($repeatable)
	{
		$this->attributes['repeatable'] = $repeatable != null? true : false;
	}

	/**
	 * Mutator: changes the type of the attribute published_at.
	 * $article->published_at = [something] uses automatically this method
	 *
	 * @param $date
	 */
	public function setMandatoryAttribute($mandatory)
	{
		$this->attributes['mandatory'] = $mandatory != null? true : false;
	}

	/**
	 * Mutator: changes the type of the attribute published_at.
	 * $article->published_at = [something] uses automatically this method
	 *
	 * @param $date
	 */
	public function setHiddenAttribute($hidden)
	{
		$this->attributes['hidden'] = $hidden != null? true : false;
	}	

    /**
	 * Return subfields.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\belongsTo
	 */
	public function marcfield()
	{
		return $this->belongsTo('App\Marcfield');
	}
}
