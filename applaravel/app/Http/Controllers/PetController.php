<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class PetController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['pets'] = Pet::All();
        return view('pet.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //recepcionar todos los datos
        $petData = request()->except('_token');
        Pet::insert($petData);
        //return response()->json($petData);
        return redirect()->route('pet.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //recuperar los datos
        $pet=Pet::findOrFail($id);
        return view('pet.edit', compact('pet'));//pasar información a la vista
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $petData=request()->except(['_token', '_method']);
        Pet::where('id', '=', $id)->update($petData);
        return redirect('pet');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Pet::destroy($id);
        return redirect('pet');
    }
}
