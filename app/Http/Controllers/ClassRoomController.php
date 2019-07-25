<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassRoomController extends Controller
{
	public function index (){
		$classes =  ClassRoom::all();
    	// dd($classes);
		return view('admin.classes', ['classes' => $classes]);
	}
}
