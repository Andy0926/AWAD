<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProperty;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('property.index', ['property' => Property::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProperty $request)
    {
        $validatedData = $request->validated();

        //dd($validatedData);

        $property = Property::create($validatedData);
        // $property -> name = $request -> input('name');
        // $property -> type = $request -> input('type');
        // $property -> location = $request -> input('location');
        // $property -> agent = $request -> input('agent');
        // $property -> price = $request -> input('price');
        // $property -> bed = $request -> input('bed');
        // $property -> bath = $request -> input('bath');
        // $property -> garage = $request -> input('garage');
        // $property -> area = $request -> input('area');
        // $property -> summary = $request -> input('summary');
        // $property -> description = $request -> input('description');
        //$property -> save();

        $request->session()->flash('status', 'Property was created');

        return redirect()->route('property.show', ['property' => $property->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        //
        $request->session()->reflash();
        return view('property.show', ['property' => Property::findOrFail($id)]);

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
        $property = Property::findOrFail($id);
        return view('property.edit', ['property' => $property]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProperty $request, $id)
    {
        //
        $property = Property::findOrFail($id);
        $validatedData = $request->validated();

        $property->fill($validatedData);
        $property->save();

        $request->session()->flash('status', 'Property was Updated');

        return redirect()->route('property.show', ['property' => $property->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property -> delete();

        $request->session()->flash('status', 'Property was Deleted');

        return redirect()->route('property.index');
    }
}
