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

	public function getResize(){
	$manager = new ImageManager(array('driver' => 'gd'));

    $image = $manager->make('image1.jpg')->resize(1200, 1200);

    return $image->response('jpg');
	}

}
