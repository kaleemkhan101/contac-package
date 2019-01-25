<?php

namespace Kaleem\Contact\Http\Controllers;


use Kaleem\Contact\Models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
    	return view('contact::contact');

    }


    public function send(Request $request)
    {

    	return $request->all();
    }

}
