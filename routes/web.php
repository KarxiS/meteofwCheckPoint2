<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StanicaController;

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', [StanicaController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/devices', function () {
    return view('devices');
});


Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [ContactController::class, 'store']);


Route::get('/contacts', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contacts/{id}/updateStatus', [ContactController::class, 'updateStatus']);
Route::put('/contacts/{contact}/update', [ContactController::class, 'update'])->name('contact.update');
Route::delete('/contacts/{contact}/delete', [ContactController::class, 'delete'])->name('contact.delete');


Route::get('/stations/{station}/data', [StanicaController::class, 'showData'])->name('station.data');
Route::get('/stations', [StanicaController::class, 'index'])->name('station.index');
Route::get('/stations/create', [StanicaController::class, 'create'])->name('station.create');
Route::post('/stations', [StanicaController::class, 'store'])->name('station.store');
Route::get('/stations/{station}/edit', [StanicaController::class, 'edit'])->name('station.edit');
Route::put('/stations/{station}/update', [StanicaController::class, 'update'])->name('station.update');
Route::delete('/stations/{station}/delete', [StanicaController::class, 'delete'])->name('station.delete');



#TODO
Route::get('/get_mail', [MailController::class, 'mailform']);
Route::post('/send_mail', [MailController::class, 'maildata'])->name('send_mail');

