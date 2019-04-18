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
      //product routes

 Route::get('/product/entry','ProductController@index');
 Route::post('/product/entry','ProductController@save');
 Route::get('product/manage','ProductController@manage');
 Route::get('product/view/{id}','ProductController@singleProduct');
 Route::get('product/edit/{id}','ProductController@editProduct');
 Route::post('product/edit','ProductController@updateProduct');
 Route::get('product/delete/{id}','ProductController@deleteProduct');
