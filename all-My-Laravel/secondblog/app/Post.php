<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
    					'title',
    					'body',
    					'image',
    					'category_id',
    					'user_id'
   						 ];



/*??
*/
public function user($value=''){
	return $this->belongsto('App\User');
}

public function category($value=''){
	return $this->belongsto('App\Category');

}

public function comments($value=''){
    return $this->hasMany('App\Comment');
    //rs name model
    }


}