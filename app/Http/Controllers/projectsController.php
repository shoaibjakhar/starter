<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function index(){

    	$projects = \App\projects::all();

    	return view('projects.index', ['projects' => $projects]);
    
    }

    public function create(){

    	return view('projects.create');

    }

    public function store(){

    	$project 				= new \App\projects();

    	$project->title 		=  request()->title;
    	$project->description 	=  request()->description;

    	$project->save();

    	return redirect('/projects');

    }
}
