<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    //
    public $incrementing = false;

    protected $fillable = ['name','status','species','type','gender','image','url','created'];

    public function origin()
    {
    	$this->belongsTo(Location::class,'origin_id');
    }

    public function appearances()
    {
    	$this->hasMany(Appearance::class);
    }

    public function episodes()
    {
    	$this->belongsToMany(Episode::class,'appearances');
    }

    public function location()
    {
    	$this->belongsTo(Location::class);
    }
}
