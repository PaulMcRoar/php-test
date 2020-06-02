<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Character;
use App\Episode;
use App\Location;

class SearchController extends Controller
{
    public function search(Request $request)
    {
    	$per_page = 15;
    	$tab = $request->input('tab');
    	if (! $tab){
    		$tab = 'characters';
    	}
    	$page = $request->input('page');
    	if (! $page){
    		$page = 1;
    	}
    	$characters_page = $tab == 'characters' ? $page : 1;
    	$episodes_page = $tab == 'episodes' ? $page : 1;
    	$locations_page = $tab == 'locations' ? $page : 1;

        return view('search.search', 
        	[
        		'tab' => $tab,
        		'characters' => Character::search($request->input('query'))->paginate($per_page,'page',$characters_page),
        		'episodes' => Episode::search($request->input('query'))->paginate($per_page,'page', $episodes_page ),
        		'locations' => Location::search($request->input('query'))->paginate($per_page, 'page', $locations_page )
        	 ]
        );
    }
}