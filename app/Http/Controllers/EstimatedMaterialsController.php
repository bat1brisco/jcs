<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstimatedMaterial;
use App\Models\Material;

class EstimatedMaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $estimates = EstimatedMaterial::find(1);
        $data['estimated_materials'] = EstimatedMaterial::all();
        // foreach($estimates as $em){
        //     foreach($em->materials as $mat){
        //         echo $mat->name;
        //     }            
        // }

        // dd(EstimatedMaterial::all());
        // $materials = $estimates->materials->pluck("id");

        return view('pages.estimated_materials.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data["materials"] = Material::all();
        return view('pages.estimated_materials.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        EstimatedMaterial::create(
            [
                'material_id' => 2,
                'estimation_id' => 2,
                'price_estimation' => 500.00,
                'quantity' => 4
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
