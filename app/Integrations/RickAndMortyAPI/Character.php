<?php 

namespace App\Integrations\RickAndMortyAPI;
use App\Location;
use App\Appearance;
use App\Episode;
use DB;

class Character extends Base
{
	public function updateLocal($local)
	{
		$this->setLocalProperties($local);
		if ($this->data->origin->url){
			$origin = Location::where('url',$this->data->origin->url)->firstOrFail();
			$local->origin_id = $origin->id;			
		}
		if ($this->data->location->url){
			$location = Location::where('url',$this->data->location->url)->firstOrFail();
			$local->location_id = $location->id;
		}
		$local->save();

		DB::beginTransaction();
		
		Appearance::where('character_id',$local->id)->delete();
		foreach ($this->data->episode as $remote_episode) {
			$local_episode = Episode::where('url', $remote_episode)->firstOrFail();
			$appearance = new Appearance(['episode_id' => $local_episode->id, 'character_id' => $local->id ]);
			$appearance->save();
		}

		DB::commit();
	}


}