<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picresizer;

class PicresizerController extends Controller

{

	public function getIndex(){

		return view('welcome');
	}

}
