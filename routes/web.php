<?php
use App\Http\Controllers\MailController;
use Facade\FlareClient\Http\Response;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/sendemail', 'App\Http\Controllers\SendEmailController@index');
Route::post('/sendemail/send', 'App\Http\Controllers\SendEmailController@send');
Route::get('/download', function(){
    $file= public_path()."/KelvinSamuelKlutseCv.pdf";
    $headers = array(
       'Content-Type: Cv/pdf',
    );

    return Response()->download($file, "KelvinSamuelKlutseCv.pdf", $headers);
});
