<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grocery;

class GroceriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('groceries.index', ['groceriesFromDatabase' => Grocery::all()]); 
        //dd($groceries = Grocery::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('groceries.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Grocery::create(request()->validate([
            'name' => ['required', 'min:2'],
            'amount' => ['required', 'integer', 'min:1'],
            'price' => ['required', 'numeric', 'gt:0'],

        ]));

        return redirect()->route('groceries.index');

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
    public function edit(Grocery $grocery)
    {
        //
        return view('groceries.edit', ['grocery' => $grocery]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grocery $grocery)
    {
        //
        $grocery->update(request()->validate([
            'name' => ['required', 'min:2'],
            'amount' => ['required', 'integer', 'min:1'],
            'price' => ['required', 'numeric', 'gt:0'],

        ]));

        return redirect()->route('groceries.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grocery $grocery)
    {
        //
        //dd($grocery);
        $grocery->delete();
        return redirect()->route('groceries.index');

    }
}
