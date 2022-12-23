<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grocery;
use App\Models\Category;
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
        $categories = Category::all();
        return view('groceries.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Grocery $grocery, Category $category)
    {
        
        $attributes = request()->validate([
            'name' => ['required', 'min:2', 'max:255'],
            'category_id' => ['required'],
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
    public function edit(Grocery $grocery, Category $category)
    {
        $categories = Category::all();
        return view('groceries.edit', ['grocery' => $grocery], ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grocery $grocery, Category $category)
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:2', 'max:255'],
            'category' => ['required'],
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
    public function destroy(Grocery $grocery)
    {
        $grocery->delete();
        return back()->with('succes', 'Boodschap verwijderd');
    }
}
