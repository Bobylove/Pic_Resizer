<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picresizer;
use Intervention\Image\ImageManager;

class PicresizerController extends Controller

{

	public function getIndex(){

		return view('welcome');
	}

	public function getResize(Request $request){

		$news = new Picresizer();
		$news->width = $request->input('width');
		$news->heigth = $request->input('heigth');

		$manager = new ImageManager(array('driver' => 'gd'));

		$image = $manager->make('image3.jpg')->resize($news->width, $news->heigth);

		return $image->response('jpg');

	}
	public function getRandom(){
		
		$img = rand(1,4);
		return view('welcome',['random'=> $img]);
	}

	public function getImgValue(){

	}
}
