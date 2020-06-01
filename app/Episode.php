<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    //
    public $incrementing = false;

    protected $fillable = ['name','air_date','episode','url','created'];

    public function appearances()
    {
    	$this->hasMany(Appearance::class);
    }

    public function characters()
    {
    	$this->belongsToMany(Character::class,'appearances');
    }
    
}
