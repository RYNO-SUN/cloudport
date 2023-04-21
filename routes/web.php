<?php

use Illuminate\Support\Facades\Route;
use App\Models\customers;
use App\Models\paperwork_files;
use App\Models\Ports;
use App\Http\Controllers\paperwork;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sidebar' , function(){

    return view('layouts.sidebar');

});

Route::get('/customers' , function(){

return view('customers');
});

Route::get('/customers', [App\Http\Controllers\customerController::class, 'index'])->name('customers');
Route::get('/porting', [App\Http\Controllers\customerController::class, 'porting'])->name('porting');

Route::get('/addcustomer' , function(){


    return view('addcustomer');
});
Route::get('/addport' , function(){


    return view('addport');
});

Route::post('/addcustomer', function () {
    
    $addcustomer = new customers();
    $addcustomer->ported_in = request('ported_in');
    $addcustomer->Name = request('Name');
    $addcustomer->number = request('number');
    $addcustomer->porting_date = request('porting_date');
    $addcustomer->portingProvider = request('portingProvider');
    

    $addcustomer->save();
    
    return redirect('/customers');
    
    
    });



    Route::post('/addport', function () {
    
        $addport = new Ports();
        $addport->Name = request('Name');
        $addport->Surname = request('Surname');
        $addport->Adress = request('Adress');
        $addport->ID_number = request('ID_number');
        $addport->email = request('email');
        $addport->paperwork = request('paperwork');
        
    
        $addport->save();
        
        return redirect('/porting');
        
        
        });
    
    //Uploads Paperwork
  Route::get('paperwork', [paperwork::class, 'index']);
  Route::post('/submitformpaperwork',[App\Http\Controllers\paperwork::class,'submitformgallery'])->name('submitformgallery');

  //sendemail
  Route::get('/contact', [App\Http\Controllers\ContactController::class , 'show'])->name('contact.show');
  Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');
  
