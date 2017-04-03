<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model {

	//
	protected $table = 'projects';
	

	public function category()
    {
        return $this->belongsTo('App\Category','categoryid');
    }

  
}