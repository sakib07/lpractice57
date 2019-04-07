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

       //category routes
Route::prefix ('category')->group(function(){

	    
	Route::get('/save','CategoryController@index');
	Route::post('/save','CategoryController@save');
	Route::get('/manage','CategoryController@manage');
	Route::get('/edit/{id}','CategoryController@edit');
	Route::post('/edit','CategoryController@update');
	Route::get('/delete/{id}','CategoryController@delete');

});




