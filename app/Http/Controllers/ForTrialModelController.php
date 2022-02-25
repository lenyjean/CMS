<?php

namespace App\Http\Controllers;

use App\Models\ForTrialModel;
use App\Http\Requests\StoreForTrialModelRequest;
use App\Http\Requests\UpdateForTrialModelRequest;
use App\Policies\ForTrialModelPolicy;
use Illuminate\Http\Request;

class ForTrialModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ForTrialModel::all();
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
     * @param  \App\Http\Requests\StoreForTrialModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreForTrialModelRequest $request)
    {
        
        // Ito for specific targetting ng posted data or ibang pangalan ng posted data compared sa table column name
        // example 'name_user' ang posted data sa table mo 'name' lang.
        // $forTrialModel = new ForTrialModel();
        // $forTrialModel->name = $request->input('name');
        // $forTrialModel->description = $request->input('description');

        $mode = $request->query('hub_mode');
        $token = $request->query('hub_verify_token');
        $challenge = $request->query('hub_challenge');
        // echo $mode;
        // echo $token;
        echo $challenge;

        // $forTrialModel->save();

        

        // Gamitin lang ito kapag ang value na pinapasa mo or input data ay kapareho ng mga table column mo.
        // Example: ang pinasa mong data ay may 'name' dapat yung sa table mo 'name' din ang column
        // ForTrialModel::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForTrialModel  $forTrialModel
     * @return \Illuminate\Http\Response
     */
    public function show($forTrialModel)
    {
        //
        return ForTrialModel::find($forTrialModel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForTrialModel  $forTrialModel
     * @return \Illuminate\Http\Response
     */
    public function edit( $forTrialModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateForTrialModelRequest  $request
     * @param  \App\Models\ForTrialModel  $forTrialModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        ForTrialModel::where('id', $id)
                ->update(['name' => $request->input('name'), 'description' => $request->input('description')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForTrialModel  $forTrialModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = ForTrialModel::find($id);
        $test->delete();
    }
}
