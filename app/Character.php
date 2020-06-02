<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Character extends Model
{
    use Searchable;

    public $incrementing = false;

    protected $fillable = ['name','status','species','type','gender','image','url','created'];

    public function origin()
    {
    	return $this->belongsTo(Location::class,'origin_id');
    }

    public function appearances()
    {
    	return $this->hasMany(Appearance::class);
    }

    public function episodes()
    {
    	return $this->belongsToMany(Episode::class,'appearances');
    }

    public function location()
    {
    	return $this->belongsTo(Location::class);
    }
}
