<?php
use App\Http\Controllers\MyController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PhotoControllerNew;
use Illuminate\Support\Facades\Route;


// Route::get('/',function(){
//     return view('HomePage');
// });

// Route::get('/about',function(){
//     return view('AboutPage');
// });


// Route::get('/',[SiteController :: class,'Home']);
// Route::get('/about',[SiteController :: class,'About']);

// Route::get('/name/{firstName}/{middleName}/{lastName}', [DemoController :: class,'myName']);
// Route::get('/',MyController::class);
Route::resource('photos', PhotoControllerNew::class);
Route::get("/myself",[MyController:: class,'mySelf']);
Route::get("/yourself",[MyController:: class,'yourSelf']);
