<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appearance extends Model
{
    protected $fillable = ['episode_id','character_id'];

	public function episode()
	{
		return $this->belongsTo(Episode::class);
	}

	public function character()
	{
		return $this->belongsTo(Character::class);
	}
}
