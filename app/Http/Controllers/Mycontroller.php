<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function store(Request $req)
    {
    	dd($req->theo);
    }
}
