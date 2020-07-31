<?php

namespace App\Http\Controllers;
use App\Receipe;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{
    public function index(){
    	$data = Receipe::all();
    	return view('home', compact('data'));
    }

    public function createReceipeForm(){
    	return view('create');
    }

    public function create(Request $request){
    	$receipe = new Receipe();

    	$receipe->name = $request->name;
    	$receipe->ingredients = $request->ingredients;
    	$receipe->category = $request->category;

    	$receipe->save();
    	return redirect('receipe');
    }
}
