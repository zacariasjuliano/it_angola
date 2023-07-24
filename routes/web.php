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

Route::get('/starter', function () {
    return view('starter.home');
});

Route::get('/starter-plus', function () {
    return view('starter.plus');
});

Route::get('/primavera/starter', function () {
    return view('primavera.starter');
});

Route::get('/primavera/starter-easy', function () {
    return view('primavera.starter-easy');
});

Route::get('/primavera/pro-lite', function () {
    return view('primavera.pro-lite');
});

Route::get('/primavera/pro-plus', function () {
    return view('primavera.pro-plus');
});

Route::get('/primavera/proficional', function () {
    return view('primavera.proficional');
});

Route::get('/primavera/executive', function () {
    return view('primavera.executive');
});

Route::get('/solucoes/tlim', function () {
    return view('solucoes.tlim');
});

Route::get('/solucoes/pssst', function () {
    return view('solucoes.pssst');
});

Route::get('/solucoes/manufacturing', function () {
    return view('solucoes.manufacturing');
});

Route::get('/academy', function () {
    return view('academy.academy');
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

Route::get('/era-digital', function () {
    return view('pages.digital');
});

Route::get('/contactos', function () {
    return view('pages.contactos');
});

Route::get('/accountant-suite', function () {
    return view('pages.accountant');
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
    return view('pages.blog-empresarial');
});