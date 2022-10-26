<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\Promotion;
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
    public function create(Promotion $promotion)
    {
        return view('/apprenant/create'
        , [
            'id' => $promotion
        ]
    );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required'
        // ]);
        $first_name = strip_tags($request->input('first_name'));
        $last_name = strip_tags($request->input('last_name'));
        $email = strip_tags($request->input('email'));
        // $id = $request->get('id');

        Apprenant::create([
            'first_name'  => $first_name,
            'last_name'  => $last_name,
            'email'  => $email,
            'promotion_id' => $id

        ]);
        
        return redirect('/promotion/edit/');
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
