<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    public $incrementing = false;

    protected $fillable = ['name','type','dimension','url','created'];


    public function residents()
    {
    	$this->hasMany(Character::class);
    }

    public function characters_for_which_this_is_the_original_location()
    {
    	$this->hasMany(Character::class,'origin_id');
    }
}
