<?php

namespace App\Http\Controllers;

use App\Models\proprietaite;
use App\Models\propriete;
use App\Models\quartier;
use App\Models\typese_propriete;
use Illuminate\Http\Request;

class ProprieteController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        propriete::create([
            'libelet'=>$request->libelet,
            'description'=>$request->description,
            'nombreEtage'=>$request->nombreEtage,
            'nombredepiece'=>$request->nombredepiece,
            'adressse'=>$request->adressse,
            'proprietaite_id'=>$request->proprietaite_id,
            'typese_propriete_id'=>$request->typese_propriete_id,
            'quartier_id'=>$request->quartier_id 
        ]);
        return redirect('showe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function show(propriete $propriete)
    {
        $proprietes=propriete::all();

        return view('proprietes.propriete',[
            'proprietes'=>$proprietes
    ]);
    }
    public function detaille($id)
    {
        $proprietes=propriete::find($id);
        $proprietaite= proprietaite::all();
        $typese_propriete=typese_propriete::all();
       $quartier=quartier::all();
       
        return view('proprietes.detail',[
            'proprietes'=>$proprietes
        ],compact('quartier','proprietaite','typese_propriete'));
        return view('proprietes.detail');
    }
    public function ajouter(){
         $proprietaite= proprietaite::all();
         $typese_propriete=typese_propriete::all();
        $quartier=quartier::all();
        return view('proprietes.form',compact('quartier','proprietaite','typese_propriete'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function edit(propriete $propriete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $proprietes=propriete::find($id);
        $proprietes->libelet=$request->libelet;
        $proprietes->description=$request->description;
        $proprietes->nombreEtage=$request->nombreEtage;
        $proprietes->nombredepiece=$request->nombredepiece;
        $proprietes->adressse=$request->adressse;
        $proprietes->proprietaite_id=$request->proprietaite_id;
        $proprietes->typese_propriete_id=$request->typese_propriete_id;
        $proprietes->quartier_id=$request->quartier_id;
        $proprietes->update();
        return redirect()->route('affiche');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\propriete  $propriete
     * @return \Illuminate\Http\Response
     */

  public function delete($id)
  {
    $propriete=propriete::find($id);
    $propriete->delete();
     return redirect('show');
     }
  
}
