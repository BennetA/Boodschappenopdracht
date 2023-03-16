<?php

use App\Models\Grocery;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\GroceriesController;       // TODO: imports altijd bovenaan script zetten (dus onder regel 5 in dit geval)
Route::get('/groceries', [GroceriesController::class, 'index'])->name('groceries.index');       // TODO: je routes zien er goed uit, maar je kunt overwegen een resource-route te gebruiken
// (zie documentatie), dat scheelt je 6 regels code :)
Route::get('/groceries/create', [GroceriesController::class, 'create'])->name('groceries.create'); 
Route::post('/groceries', [GroceriesController::class, 'store'])->name('groceries.store'); 
Route::get('/groceries/{grocery}/edit', [GroceriesController::class, 'edit'])->name('groceries.edit'); 
Route::patch('/groceries/{grocery}', [GroceriesController::class, 'update'])->name('groceries.update');
Route::delete('/groceries/{grocery}', [GroceriesController::class, 'destroy'])->name('groceries.destroy');
Route::redirect('/', '/groceries');

// TODO: ongebruikte / uitgecommentariseerde code verwijderen voor betere leesbaarheid

// Route::get('/', function () {
//     return view('categories', [
//         'categories' => Category::all()
//     ]);
// });

