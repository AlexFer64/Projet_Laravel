<?php

namespace App\Http\Controllers;

use App\Models\Sauce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SauceControllerAPI extends Controller
{

        public function index()
        {

            $sauces = Sauce::all();
            $ratio= [];
            foreach ($sauces as $sauce) {
                if($sauce->likes == 0 && $sauce->dislikes == 0)  {
                    $ratio[$sauce->id] = "Aucune";

                } 
                elseif($sauce->likes == 0 && $sauce->dislikes != 0){
                    $ratio[$sauce->id] = 0;
                }
                else{
                    $ratio[$sauce->id] = round(($sauce->likes / ($sauce->likes + $sauce->dislikes) * 100), 0);
                }
            }
        
            return response()->json(['sauces' => $sauces, 'ratio' => $ratio]);
            
        }

        public function show($id)
        {
            $sauce = Sauce::findOrFail($id);
        
            
            // Retourner la sauce en format JSON
            return response()->json(['sauce' => $sauce]);
        }

        public function create(){
        
            // Retourner un message d'erreur car cette méthode n'a pas de sens en tant qu'API
            return response()->json(['message' => 'Méthode non autorisée'], 405);
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

            return response()->json([
                'message' => 'Sauce ajoutée avec succès',
                'sauce' => $sauce
            ]);
            
        }

        public function edit($id){
            $sauce = Sauce::findOrFail($id);
        
                return response()->json([
                'message' => 'Sauce modifiée avec succès',
                'sauce' => $sauce
            ]);
        }

        public function update(Request $request, $id){
            $request->validate([
                'name' => 'required',
                'manufacturer' => 'required',
                'description' => 'required',
                'main_pepper' => 'required',
                'image_url' => 'required',
                'heat' => 'required',
            ]);
            
            $sauce = Sauce::findOrFail($id);
            $sauce->update($request->all());

            return response()->json([
                'message' => 'Sauce modifiée avec succès',
                'sauce' => $sauce
            ]);
        }
        

        public function destroy($id)
        {
            $sauce = Sauce::findOrFail($id);
            $sauce->delete();

            return response()->json([
                'message' => 'Sauce supprimée avec succès'
            ]);
        }
        
        public function like($id){
            $sauce = Sauce::findOrFail($id);
            $user = Auth::user();
            if($sauce->likes()->where('user_id', $user->id)->exists()) {
                $sauce->likes = $sauce->likes - 1;
                $sauce->likes()->detach($user->id);
                $sauce->save();
                return redirect()->route("sauces.show", $id);
            } 
            elseif($sauce->dislikes()->where('user_id', $user->id)->exists()) {
                $sauce->dislikes()->detach($user->id);
                $sauce->dislikes = $sauce->dislikes - 1;
                $sauce->likes()->attach($user->id);
                $sauce->likes = $sauce->likes + 1;
                $sauce->save();
                return redirect()->route("sauces.show", $id);
            }
            else {
                $sauce->likes = $sauce->likes + 1;
                $sauce->likes()->attach($user->id);
                $sauce->save();
                return redirect()->route("sauces.show", $id);
            }
        
        
        }

        public function dislike($id){
            $sauce = Sauce::findOrFail($id);
            $user = Auth::user();
            if($sauce->dislikes()->where('user_id', $user->id)->exists()) {
                $sauce->dislikes = $sauce->dislikes - 1;
                $sauce->dislikes()->detach($user->id);
                $sauce->save();
                return redirect()->route("sauces.show", $id);
            } 
            elseif($sauce->likes()->where('user_id', $user->id)->exists()) {
                $sauce->likes()->detach($user->id);
                $sauce->likes = $sauce->likes - 1;
                $sauce->dislikes()->attach($user->id);
                $sauce->dislikes = $sauce->dislikes + 1;
                $sauce->save();
                return redirect()->route("sauces.show", $id);
            }
            else {
                $sauce->dislikes = $sauce->dislikes + 1;
                $sauce->dislikes()->attach($user->id);
                $sauce->save();
                return redirect()->route("sauces.show", $id);
            }
        }



}
