<?php

namespace CodePress\CodeCategory\Entities;


use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements SluggableInterface
{

	use SluggableTrait;

	protected $table = "codepress_categories";
	protected $fillable = [
		"name",
		"slug",
		"active",
		"parent_id"
	];

	protected $sluggable = [
		'build_from' => 'name',
		'save_to' => 'slug',
		'unique' => true
	];

	public function categorizable()
	{
		return $this->morphTo();
	}

	public function parent()
	{
		return $this->belongsTo('CodePress\CodeCategory\Entities\Category');
	}
	public function children()
	{
		return $this->hasMany('CodePress\CodeCategory\Entities\Category', 'parent_id');
	}

}