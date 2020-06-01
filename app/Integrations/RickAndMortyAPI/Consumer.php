<?php

namespace App\Integrations\RickAndMortyAPI;
use ReflectionClass;
use App\Character;
use App\Appearance;
use App\Location;
use App\Episode;

class Consumer
{

	public function pullAllObjectsofClass($class)
	{
		$done = false;
		$current_page = 1;
		$all = array();
		while(! $done){
			$json = file_get_contents(config('rick_and_morty_api.base_url') . strtolower($class) . '?page=' . $current_page);
			$response = json_decode($json);			
			$all = array_merge($all,$response->results);
			$total_pages = $response->info->pages;
			if ($total_pages == $current_page){
				$done = true;
			}
			$current_page++;
			sleep(config('rick_and_morty_api.seconds_between_api_pulls'));
		}
		return $all;
	}

	public function syncDown($class)
	{
		$seenIds = array();
		$objects = $this->pullAllObjectsOfClass($class);
		$local_class = 'App\\'.$class;
		$remote_class = 'App\\Integrations\\RickAndMortyAPI\\'.$class;
		foreach ($objects as $object) {
			$remote = new $remote_class($object);
			$local = $local_class::find($remote->data->id);	
			if (! $local){
				$local = new $local_class();
				$local->id = $remote->data->id;
			}
			$remote->updateLocal($local);
			$seenIds[] = $remote->data->id;
		}
		return $seenIds;
	}


	public function refreshLocal(){
		$locationIds = $this->syncDown('Location');
		$episodeIds = $this->syncDown('Episode');
		$characterIds = $this->syncDown('Character');

		// delete any local we have not seen
		Appearance::whereNotIn('character_id',$characterIds)->delete();
		Character::whereNotIn('id',$characterIds)->delete();
		Location::whereNotIn('id',$locationIds)->delete();
		Episode::whereNotIn('id',$episodeIds)->delete();
	}

}