<?php

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

Route::get('/sobre', function () {
    return view('pages.sobre');
});

Route::get('/responsabilidade-social', function () {
    return view('pages.responsabilidade');
});

Route::get('/suporte', function () {
    return view('pages.suporte');
});

Route::get('/consultoria', function () {
    return view('pages.consultoria');
});

Route::get('/contactos', function () {
    return view('pages.contactos');
});

Route::get('/privacidade', function () {
    return view('pages.privacidade');
});

Route::get('/termos-condicoes', function () {
    return view('pages.termos-condicoes');
});

Route::get('/familia', function () {
    return view('pages.familia');
});

Route::get('/blog', function () {
    return view('blog.blog-empresarial');
});

Route::get('/blog/post', function () {
    return view('blog.post');
});


//PARCEIROS IT Angola

Route::get('/cacimbo', function () {
    return view('parceiros.cacimbo');
});

Route::get('/phc', function () {
    return view('parceiros.phc');
});

Route::get('/logicpulse', function () {
    return view('parceiros.logicpulse');
});

Route::get('/bird_tab', function () {
    return view('parceiros.bird_tab');
});

Route::get('/kelio', function () {
    return view('parceiros.kelio');
});

Route::get('/desenvolvimento', function () {
    return view('solucoes.desenvolvimento');
});

Route::get('/software', function () {
    return view('solucoes.software');
});

