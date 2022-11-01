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
    public function create($id)
    {
        return view('apprenant.create', [ 'id' => $id ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);
        $first_name = strip_tags($request->input('first_name'));
        $last_name = strip_tags($request->input('last_name'));
        $email = strip_tags($request->input('email'));

        Apprenant::create([
            'first_name'  => $first_name,
            'last_name'  => $last_name,
            'email'  => $email,
            'promotion_id' => $id

        ]);

        return redirect("/promotion/$id/edit/");
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
    public function edit($id)
    {

        $apprenants = Apprenant::find($id);
        return view('apprenant/edit', [
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
    public function update(Request $request,$id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);
        $apprenant = Apprenant::findOrFail($id);
        $apprenant->first_name = strip_tags($request->input('first_name'));
        $apprenant->last_name = strip_tags($request->input('last_name'));
        $apprenant->email = strip_tags($request->input('email'));
        $apprenant->save();
        return redirect("/promotion/$apprenant->promotion_id/edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apprenant  $apprenant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apprenant = Apprenant::findOrFail($id);

        $apprenant->delete();
        return redirect()->back();
    }

    //Search with apprenants
    public function search(Request $request)
    {
        $input = $request->key;
        $output = '';
        $search = Apprenant::where('first_name', 'LIKE', '%' . $input . '%')->get();
        foreach ($search as $apprenant) {
            $output .=
        //         '<tr>
        //    <td> ' . $apprenant->first_name . ' </td>
        //    </tr>';

           '<tr>
           <td>

           </td>
           <td> '.$apprenant->first_name.' </td> 
           <td> '.$apprenant->last_name.' </td> 
           <td> '.$apprenant->email.' </td> 
           <td>
              <a href=' . route ('promotion.edit' , [ $apprenant->id] )  .' class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Éditer">&#xE254;</i></a>
              <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Effacer">&#xE872;</i></a>
            </td>
     </tr>';
        }
        return $output;
    }
}
