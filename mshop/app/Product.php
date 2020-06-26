<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'name', 
		'description',
		'price', 
		'image',
		'category_id',
		'user_id'
	];

	protected $deleted_at = ['deleted_at'];
    
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
