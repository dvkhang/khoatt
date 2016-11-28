<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewspagerController extends Controller
{
    public function getAdd()
    {
    	return view('newspapers.add');
    }

    public function postAdd()
    {
    	
    }


    public function getList()
    {
    	return view('newspapers.list');
    }
}
