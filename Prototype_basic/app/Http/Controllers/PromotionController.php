<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $promotions = Promotion::all();
        return view('index', [
            'Promotion' => $promotions
        ]);
    }

    /**
     * Show the form for creating a new resource.

     */



    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
    
     */


    public function store(Request $request)
    {
        $request->validate([
            'nam' => 'required'
        ]);
        $name = strip_tags($request->input('nam'));
        Promotion::create([
            'name'  => $name
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */


    public function show($promotion)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
   
     */



    public function edit($promotion)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */



    public function update(Request $request, $promotion)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */



    public function destroy($promotion)
    {
        
    }

   
}
