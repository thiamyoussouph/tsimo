<?php

namespace App\Http\Controllers;

use App\Models\proprietaite;
use Illuminate\Http\Request;

class ProprietaiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proprietaires.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $proprietaite=new proprietaite();
        // $proprietaite->nom=$request->nom;
        // $proprietaite->prenom=$request->prenom;
        // $proprietaite->adresse=$request->adresse;
        // $proprietaite->datenaissance=$request->datenaissance;
        // $proprietaite->telephone=$request->telephone;
        // $proprietaite->email=$request->email;
        // $proprietaite->save();
        proprietaite::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'adresse'=>$request->adresse,
            'datenaissance'=>$request->datenaissance,
            'telephone'=>$request->telephone,
            'email'=>$request->email
        ]);
        return redirect('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\proprietaite  $proprietaite
     * @return \Illuminate\Http\Response
     */
    public function show(proprietaite $proprietaites)

    {
        $proprietaites=proprietaite::all();

        return view('proprietaires.proprietaite',[
            'proprietaites'=>$proprietaites
    ]);
    }
    public function detail($id)
    {
        $proprietaites=proprietaite::find($id);
       
        return view('proprietaires.detail',[
            'proprietaites'=>$proprietaites
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\proprietaite  $proprietaite
     * @return \Illuminate\Http\Response
     */
    public function edit(proprietaite $proprietaite)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\proprietaite  $proprietaite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $proprietaites=proprietaite::find($id);
        $proprietaites->nom=$request->nom;
        $proprietaites->prenom=$request->prenom;
        $proprietaites->adresse=$request->adresse;
        $proprietaites->datenaissance=$request->datenaissance;
        $proprietaites->telephone=$request->telephone;
        $proprietaites->email=$request->email;
        $proprietaites->update();
        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\proprietaite  $proprietaite
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $proprietaite=proprietaite::find($id);
        $proprietaite->delete();
        return redirect('show');
    }
}
