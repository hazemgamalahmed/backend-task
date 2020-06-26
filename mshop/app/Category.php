<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'name',
    	'description',
    	'level',
    	'parent_id'
    ];

    public function parent(){
    	return $this->belongsTo(Category::class, 'parent_id');
    }

    public function product(){
        return $this->hasMeny(Product::class, 'category_id');
    }
}
