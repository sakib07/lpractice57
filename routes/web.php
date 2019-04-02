<?php




Route::get('/', function () {
    return view('welcome');
});

// Route::get('/sakib', function () {
//     return "Ratin";
// });


// Route::get('/sakib/rahman', function () {
//     return "Ratin Rahman";
// });

// Route::get('/ano', function () {
//     return view('test');
// });

// Route::get('/anonna', function () {
//     return view('inc.ad');
// });

// Route::get('/faisal', 'testcontroller@mou');


Route::get('/', 'frontcontroller@index');
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
