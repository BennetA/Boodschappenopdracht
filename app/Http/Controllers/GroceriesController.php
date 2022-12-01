<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grocery;
use resources\views\groceries;

class GroceriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groceriesData = Grocery::all();

        return view('groceries.index', ['groceries' => $groceriesData]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        
        $attributes = request()->validate([
            'name' => ['required', 'min:2', 'max:255'],
            'price'  => ['required', 'numeric'],
            'quantity' => ['required', 'integer', 'gt:0'],
        ]);

        Grocery::create($attributes);
        return redirect('/'); 
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
        $attributes = request()->validate([
            'name' => ['required', 'min:2', 'max:255'],
            'price'  => ['required', 'numeric'],
            'quantity' => ['required', 'integer', 'gt:0'],
        ]);

        $grocery->update($attributes);
        return redirect('/')->with('succes', 'Boodschap bijgewerkt');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($grocery)
    {
        $grocery->delete();
        return back()->with('succes', 'Boodschap verwijderd');
    }
}
