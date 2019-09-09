<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function index(){

    	$projects = \App\projects::all();

    	return view('projects.index', ['projects' => $projects]);
    
    }
}
