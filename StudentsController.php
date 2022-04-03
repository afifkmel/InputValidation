<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
     function getData(Request $req)
    {
       $req->validate([
           'StudentsName'=>'required',
           'MatricNo'=>'required',
           'CurrentAdd'=>'required',         
            'HomeAdd'=>'required',
           'Email'=>'required',
           'PhoneNo'=>'required',
           'HomeNo'=>'required'
       ]);
        return $req->input();
    }
}
