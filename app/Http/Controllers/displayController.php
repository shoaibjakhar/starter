<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class displayController extends Controller
{
    public function display()
    {
    	return view('display', [
			
			'tasks' 	=> ['go to word', 'go to shop'],
			'foo' 		=> '<script>alert("foobar")</script>' 
		
		]);
    }
}
