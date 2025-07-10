<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use Illuminate\Http\Request;

use Laravel\Cashier\Cashier;

use Illuminate\Support\Str;

use App\Http\Controllers\InvokeController;

Route::get('/', function () {
    return view('otro_box');
})->name('home');

/* Route::get('/box', function () {
    return view('boxes');
})->name('boxes');

Route::get('/otro', function () {
    return view('otro_box');
})->name('otro'); */

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

// RUTAS PARA STRIPE...

Route::get('/product', function () {

    return view('stripe.product');

})->middleware(['auth'])
  ->name('product');

Route::get('/suscription', function () {

    return view('stripe.suscription');

})->middleware(['auth'])
  ->name('suscription');


Route::get('/checkout', function (Request $request) {
    
     $stripePriceId = 'price_1Riz3ZFJdRqJ187Pn8wFvbXf';
 
     $quantity = 8;
 
    return $request->user()->checkout(
        [$stripePriceId => $quantity], 
        [
        'success_url' => route('checkout-success').'?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => route('checkout-cancel'),
        'metadata' => ['order_id' => 'Alexis123'],
        ]
);

})->middleware(['auth'])
  ->name('checkout');

  
  Route::get('/checkout/success', function(Request $request){

    $session_id = $request->get('session_id');

    if($session_id == null){
        return;
    }

    $session = Cashier::stripe()->checkout->sessions->retrieve($session_id);

    if($session->payment_status != 'paid'){
        return;
    }
    
    $order_id = $session['metadata']['order_id'] ?? null;

    dd($session);


    return view('stripe.checkout-success');

  })->name('checkout-success');

  Route::view('/checkout/cancel', 'stripe.checkout-cancel')->name('checkout-cancel');






  /* Route::view('/contact','contact-form' )->name('formulario');

  Route::post('/contact',InvokeController::class);
 */

require __DIR__.'/auth.php';
