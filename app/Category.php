<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	//
	protected $table = 'category';
	protected $fillable = ["id","name","mname"];


     public function projects()
    {
        return $this->hasMany('App\Projects', 'categoryid');
    }

}
