<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sauce;

class SauceController extends Controller
{
    public function index()
    {

        $sauces = Sauce::all();
        return view('welcome',compact('sauces'));
        
    }

    public function show($id)
    {
        $sauce = Sauce::findOrFail($id);
        return view('sauces.show', compact('sauce'));
    }

    public function create(){
        return view('sauces.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'manufacturer' => 'required',
            'description' => 'required',
            'main_pepper' => 'required',
            'image_url' => 'required',
            'heat' => 'required',
        ]);

        $sauce = new Sauce($request->all());
        $sauce->user_id = auth()->user()->id;
        $sauce->save();

        return redirect()->route('welcome')->with('success','Sauce ajoutée avec succès');
        
    }
    
}
