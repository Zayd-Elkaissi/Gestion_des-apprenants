<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
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
        return view('promotion.index', [
            'Promotion' => $promotions
        ]);
    }

    /**
     * Show the form for creating a new resource.

     */



    public function create()
    {
        return view('promotion.create');
    }

    /**
     * Store a newly created resource in storage.
    
     */


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $name = strip_tags($request->input('name'));
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


    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);
        $apprenants = $promotion->apprenants;
        return view("promotion.edit",compact('promotion','apprenants'));

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
        $request->validate([
            'nameUpdate' => 'required'
        ]);
        $update = Promotion::findOrFail($promotion);
        $update->name = strip_tags($request->input('nameUpdate'));
        $update->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */



    public function destroy($promotion)
    {
        $delete = Promotion::findOrFail($promotion);

        $delete->delete();
        return redirect('/');
    }

    public function search(Request $request)
    {
        $input = $request->key;
        $output = '';
        $search = Promotion::where('name', 'LIKE', '%' . $input . '%')->get();
        foreach ($search as $promotion) {
            $output .=
                '<tr>
           <td> ' . $promotion->name . ' </td>
           </tr>';
        }
        return $output;
    }
}
