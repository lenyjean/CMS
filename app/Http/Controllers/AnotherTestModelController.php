<?php

namespace App\Http\Controllers;

use App\Models\AnotherTestModel;
use App\Http\Requests\StoreAnotherTestModelRequest;
use App\Http\Requests\UpdateAnotherTestModelRequest;

use Illuminate\Http\Request;

class AnotherTestModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return AnotherTestModel::all();
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
     * @param  \App\Http\Requests\StoreAnotherTestModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnotherTestModelRequest $request)
    {
        //
        // $anotherTestModel = new AnotherTestModel();

        // $anotherTestModel->name=$request->input('name');
        // $anotherTestModel->name=$request->input('description');

        // $anotherTestModel->save();

        AnotherTestModel::create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnotherTestModel  $anotherTestModel
     * @return \Illuminate\Http\Response
     */
    public function show($anotherTestModel)
    {
        //

        return AnotherTestModel::find($anotherTestModel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnotherTestModel  $anotherTestModel
     * @return \Illuminate\Http\Response
     */
    public function edit(AnotherTestModel $anotherTestModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnotherTestModelRequest  $request
     * @param  \App\Models\AnotherTestModel  $anotherTestModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        AnotherTestModel::where('id', $id)
        ->update(['name' => $request->input('name'), 'description' => $request->input('description')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnotherTestModel  $anotherTestModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        AnotherTestModel::find($id)->delete();
    }
}
