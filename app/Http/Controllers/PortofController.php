<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofController extends Controller
{
public function index()
{
    return view('port2.index');
}

public function about()
{
    return view('port2.about');
}

public function contact()
{
    return view('port2.contact');
}

public function contact_data(Request $request)
{
   dd($request->all());
}


}
