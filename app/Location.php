<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Location extends Model
{
    use Searchable;

    public $incrementing = false;

    protected $fillable = ['name','type','dimension','url','created'];


    public function residents()
    {
    	return $this->hasMany(Character::class);
    }

    public function characters_for_which_this_is_the_original_location()
    {
    	return $this->hasMany(Character::class,'origin_id');
    }
}
