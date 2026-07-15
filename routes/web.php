<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){
	return view('home');
})->name('home');


Route::get('/loginpage', function(){
	return view('loginpage');
})->name('loginpage');


Route::get('/verificationpage', function(){
	return view('verificationpage');
})->name('verificationpage');


Route::get('/mainpage', function(){
	return view('mainpage');
})->name('mainpage');


Route::get('/martyrspage', function(){
	return view('martyrspage');
})->name('martyrspage');


Route::get('/detailMartry', function(){
	return view('detailMartry');
})->name('detailMartry');

Route::get('/aiChat', function(){
	return view('aiChat');
})->name('aiChat');

Route::get('/aiChatMessage', function(){
	return view('aiChatMessage');
})->name('aiChatMessage');

Route::get('/videoPage', function(){
	return view('videoPage');
})->name('videoPage');

Route::get('/yademanPage', function(){
	return view('yademanPage');
})->name('yademanPage');

Route::get('/momMemories', function(){
	return view('momMemories');
})->name('momMemories');


Route::get('/ghoran', function(){
	return view('ghoran');
})->name('ghoran');

Route::get('/message', function(){
	return view('message');
})->name('message');

Route::get('/soorePage', function(){
	return view('soorePage');
})->name('soorePage');

Route::get('/salavatePage', function(){
	return view('salavatePage');
})->name('salavatePage');

Route::get('/profilePage', function(){
	return view('profilePage');
})->name('profilePage');


Route::get('/profileDetailPage', function(){
	return view('profileDetailPage');
})->name('profileDetailPage');

Route::get('/components', function(){
	return view('components');
})->name('components');

Route::get('/fanClubPage', function(){
	return view('fanClubPage');
})->name('fanClubPage');

Route::get('/mosabeghatPage', function(){
	return view('mosabeghatPage');
})->name('mosabeghatPage');

