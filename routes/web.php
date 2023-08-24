<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/trivia', function () {
    return view('trivia', [
        "title" => "Trivia"
    ]);
});

Route::get('/dad-jokes', function () {
    return view('games/dadJokes', [
        "title" => "Dad Jokes"
    ]);
});

Route::get('/hover-neon', function () {
    return view('games/hoverNeon', [
        "title" => "Hover Neon"
    ]);
});

Route::get('/seminar', function () {
    return view('event', [
        "title" => "Seminar"
    ]);
});

Route::get('/sraya', function () {
    return view('event', [
        "title" => "Sraya Exhibition"
    ]);
});

Route::get('/ITfest', function () {
    return view('event', [
        "title" => "IT Festival"
    ]);
});

Route::get('/cp', function () {
    return view('competition', [
        "title" => "Competitive Programming",
        "overview" => "COMPETITIVE PROGRAMMING (CP)",
        "desc" => "Competitive Programming is a competition that tests the ability to think logically to solve problems using a computer program written using the C, C++, or Java language within specified time and memory constraints."
    ]);
});

Route::get('/ctf', function () {
    return view('competition', [
        "title" => "Capture The Flag",
        "overview" => "CAPTURE THE FLAG (CTF)",
        "desc" => "Capture the Flag (CTF) is a network/information security competition that tests each participant's ability to think structurally and creatively in finding hidden valuable information called flags from various problems divided into several categories namely cryptography, digital forensics, binary exploitation, reverse engineering, web exploitation, and Open Source Intelligence (OSINT)."
    ]);
});

Route::get('/uiux', function () {
    return view('competition', [
        "title" => "UI/UX",
        "overview" => "UI/UX COMPETITION",
        "desc" => 'UI/UX Competition is a design competition for a product in the form of a mobile application, which is one of the branches of COMPSPHERE 2023. This competition focuses on several aspects of startups, including achieving user experience goals and usability goals. The theme of this year`s UI/UX Competition is "Technology for Better Tomorrow".'
    ]);
});

Route::get('/erp', function () {
    return view('competition', [
        "title" => "Enterprising Resource Planning",
        "overview" => "ENTERPRISING RESOURcE PLANNING (ERP)",
        "desc" => "ERP competition</b> is the rivalry among vendors offering software solutions that integrate various business processes into a single system."
    ]);
});

Route::get('/error', function () {
    return view('error', [
        "title" => "ERROR",
    ]);
});

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/register', [registerController::class, 'index'])->middleware('guest');
Route::post('/register', [registerController::class, 'store']);

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth');
