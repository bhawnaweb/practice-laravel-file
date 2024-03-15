<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $doctors = Doctor::with('hospitals')->get();
        return view('doctor', compact('doctors'));
    }
}
