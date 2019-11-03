<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Models\Material;
use App\Models\EstimatedMaterial;
use Illuminate\Validation\Rule;

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
    public function store(StoreRequest $request)
    {
        // ['field' => ['required', Rule::in(Material::SIZE)]
        // ]


        // $data = $request->validate(
        //     [
        //         'size' => Rule::in(Material::SIZE),
        //         'price' => 'required',
        //         'price_type' => 'required|in_array:price_type',
        //         'unit_type' => 'required|in_array:unit_type'
        //     ]
        // );
        // try{
            $techie = Material::create(
                [
                    'name' => $request->input('name'), 
                    'price' => $request->input('price'), 
                    'size' => ($request->input('size') != "Select Size" ? $request->input('size') : null),
                    'unit_type' => $request->input('unit_type'),
                    'price_type' => $request->input('price_type'),
                    'length' => $request->input('length'), 
                    'width' => $request->input('width'), 
                    'height' => $request->input('height'), 
                    'weight' => $request->input('weight')
                ]
            );



            // echo $techie;
        // }catch(Exception $e){
        //     return $e->getMessage();
        // }
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
        $data = [
            'size' => Material::SIZE,
            'unit_type' => Material::UNIT_TYPE,
            'price_type' => Material::PRICE_TYPE,
            'material' => Material::find($id)
        ];
        
        return view('pages.materials.edit', $data);
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
        $material = Material::findOrFail($id);
        $techie = [
                'name' => $request->input('name'), 
                'price' => $request->input('price'), 
                'size' => ($request->input('size') != "Select Size" ? $request->input('size') : null),
                'unit_type' => $request->input('unit_type'),
                'price_type' => $request->input('price_type'),
                'length' => $request->input('length'), 
                'width' => $request->input('width'), 
                'height' => $request->input('height'), 
                'weight' => $request->input('weight')
        ];
        $material->update($techie);

        return redirect()->route('materials.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = Material::findOrFail($id)->delete();
        return redirect()->route('materials.index');
    }
}
