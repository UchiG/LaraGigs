<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'House in the woods'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'House in the city'
            ],
        ]
    ]);
});

// Route::get('/posts', function () {
//     return response('<h1>Hello World<h1>')
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function($id) {
//     dd($id);
//     return response('Post '. $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     return response($request->name . ' ' . $request->God);
// });

// return 