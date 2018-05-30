<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumnos;


class AlumnosController extends Controller
{

    public function index(){
    	$alumno = Alumnos::all();
    	
    	return view('alumnos.index')->with(compact('alumno'));	
    }
}
