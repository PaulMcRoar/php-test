<?php 

namespace App\Integrations\RickAndMortyAPI;

class Base
{
	public $data;

	public function __construct($data)
	{
		$this->data = $data;
	}

	public function setLocalProperties($local){
		$local->fill(get_object_vars($this->data));
	}

	public function updateLocal($local)
	{
		$this->setLocalProperties($local);
		$local->save();
	}
}