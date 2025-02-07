<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [GeneralController::class, 'getHome'])->name('index');
Route::get('/about', [GeneralController::class, 'getAbout'])->name('about');
Route::get('/contact', [GeneralController::class, 'getContact'])->name('contact');
Route::get('/payment', [GeneralController::class, 'getPayment'])->name('payment');
Route::get('/subscription', [GeneralController::class, 'getSubscription'])->name('subscription');
Route::get('/catalogue', [GeneralController::class, 'getCatalogue'])->name('catalogue');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('paypal', [PaymentController::class, 'pay'])->name('paypal');
Route::get('success', [PaymentController::class, 'success']);
Route::get('error', [PaymentController::class, 'error']);


Route::get('/language/{locale}', function ($locale) {
    // List of supported locales
    $supportedLocales = ['en', 'es', 'fr'];

    if (in_array($locale, $supportedLocales)) {
        app()->setLocale($locale); // Set the locale for the current request
        session(['locale' => $locale]); // Store the selected locale in session
    } else {
        app()->setLocale('fr'); // Default to French if locale is not supported
    }

    return redirect()->back(); // Redirect back to the previous page
});






