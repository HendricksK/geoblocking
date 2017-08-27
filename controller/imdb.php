<?php

class imdb {

	protected $opendb_key = 'ed6fd3584f5c59d457156c98b4b922f7';
	protected $config = null;
	
	function __construct() {
		$this->config = include_once(DIRNAME(__FILE__) . '/../config.php');	
	}

	public function get_top(){

		$data = file_get_contents('http://api.themoviedb.org/3/tv/top_rated?api_key=' . $this->opendb_key);
		
		$topResults = json_decode($data);

		$body = null;

		for($x = 0; $x < count($topResults->results); $x++){
			$img = 'https://image.tmdb.org/t/p/w185/'.$topResults->results[$x]->poster_path;
			$id = $topResults->results[$x]->id;
			$name = $topResults->results[$x]->name;

			$body .= '<div class="column">
					<a href="./views/product-page.php?id='.$id.'">
					<img class="thumbnail" src="'.$img.'">
					<h5>'.$name.'</h5>
					</a>
				</div>';
			}

		return $body;
	}

	public function get_show($id){
		$data = file_get_contents('http://api.themoviedb.org/3/tv/'.$id.'?api_key=' . $this->opendb_key);
		$show = json_decode($data);

		$data = array (
			'original_name' => $show->original_name,
			'overview' => $show->overview,
			'homepage' => $show->homepage,
			'origin_country' => $show->origin_country[0],
			'number_of_seasons' => $show->number_of_seasons,
			'number_of_episodes' => $show->number_of_episodes,
			'seasons' => $show->seasons[$show->number_of_seasons],
			'poster_path' => 'https://image.tmdb.org/t/p/w300/'.$show->poster_path,
			'air_date' => $show->seasons[0]->air_date
		);

		return $data;
	}

	public function get_changes($id){
		$data = file_get_contents('http://api.themoviedb.org/3/tv/'.$id.'/changes?api_key=' . $this->opendb_key);
	}
}
?>