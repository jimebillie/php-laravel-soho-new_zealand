<?php
use Illuminate\Support\Facades\Route;

/**
 * @desc Route View
 */
Route::view('/','front.home')->name('home');
Route::view('/contact_us','front.contact')->name('contact_us');
Route::view('/about_us','front.about')->name('about_us');
Route::view('/select_menu','front.select_menu')->name('select_menu');
Route::view('/book_a_function','front.book_a_function')->name('book_a_function');
Route::view('/all_day_menu',"front.all_day_menu")->name('all_day_menu');
Route::view('/cocktail_menu',"front.cocktail_menu")->name('cocktail_menu');
Route::view('/book_a_function/set_a',"front.book_a_function.set_a")->name('book_a_function.set_a');
Route::view('/book_a_function/set_b',"front.book_a_function.set_b")->name('book_a_function.set_b');
Route::view('/book_a_function/set_65',"front.book_a_function.set_65")->name('book_a_function.set_65');
Route::view('/careers',"front.careers.careers_page")->name('careers.careers_page');
Route::view('/catering',"front.catering.catering_page")->name('catering.catering_page');
Route::view('/gift_vouchers',"front.gift_vouchers.gift_vouchers_page")->name('gift_vouchers.gift_vouchers_page');
Route::view('/function',"front.function")->name('function_page');




/**
 * @desc Route Get
 */




/**
 * @desc Route Post
 */




/**
 * @desc Route fallback
 */
Route::fallback(function () {
    return view('front.home');
});
