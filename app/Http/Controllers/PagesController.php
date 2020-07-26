<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function redirect($id)
    {
        return view("pages.$id")->with('id',$id);
    }
}
