<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nam' => 'required'
        // ]);
        // $name = strip_tags($request->input('nam'));
        // Apprenant::create([
        //     'name'  => $name
        // ]);
        
        // return redirect('/');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apprenant  $apprenant
     * @return \Illuminate\Http\Response
     */
    public function show(Apprenant $apprenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apprenant  $apprenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Apprenant $apprenant)
    {
       
        $apprenants = Apprenant::all();
        return view('edit', [
            'Apprenant' => $apprenants
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apprenant  $apprenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apprenant $apprenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apprenant  $apprenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apprenant $apprenant)
    {
        //
    }
}
