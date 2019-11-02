<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\EstimatedMaterial;
class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // dd(Material::find(1)->estimated_materials());
        $data = [
            'size' => Material::SIZE,
            'unit_type' => Material::UNIT_TYPE,
            'price_type' => Material::PRICE_TYPE,
            'materials' => Material::all(), 
        ];
        // $data['size'] = Material::SIZE;
        // $data['unit_type'] = Material::UNIT_TYPE;
        // $data['price_type'] = Material::PRICE_TYPE;
        // $data['materials'] = Material::all();
        return view('pages.materials.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Material::create(
        //     [
        //         'name' => 'Testing', 
        //         'price' => 45.30, 
        //         'price_type' => 'Testing' 
        //     ]
        // );
        // $data['materials'] = Material::all();
        $data = [
            'size' => Material::SIZE,
            'unit_type' => Material::UNIT_TYPE,
            'price_type' => Material::PRICE_TYPE
        ];

        return view('pages.materials.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            Material::create(
                [
                    'name' => $request->input('name'), 
                    'price' => $request->input('price'), 
                    'size' => ($request->input('size') != 0 ? $request->input('size'): null),
                    'unit_type' => $request->input('unit_type'),
                    'price_type' => $request->input('price_type'),
                    'length' => $request->input('length'), 
                    'width' => $request->input('width'), 
                    'height' => $request->input('height'), 
                    'weight' => $request->input('weight')
                ]
            );
        }catch(Exception $e){
            return $e->getMessage();
        }
        return redirect()->route('materials.index');
        // $data['materials'] = Material::all();
        // dd($request->input('price'));
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
