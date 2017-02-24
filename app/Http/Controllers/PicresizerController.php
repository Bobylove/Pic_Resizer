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
		$width = $request->input('width');
		$heigth = $request->input('heigth');

		$manager = new ImageManager(array('driver' => 'gd'));

		$image = $manager->make('image1.jpg')->resize($width, $heigth);

		return $image->response('jpg');
	}

}
