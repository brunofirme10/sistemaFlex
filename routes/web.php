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
Route::group(['middleware' => 'web'], function (){
       Auth::routes(); 
       Route::get('/', 'HomeController@index');       
       Route::get('/home', 'HomeController@index')->name('home'); 
       Route::get('mail/send', 'MailController@send');  

       Route::prefix('manage')->group(function (){
              Route::prefix('users')->group(function(){
                     Route::get('/', 'UserController@index');
                     Route::get('/novo', 'UserController@novo');
                     Route::get('/lista', 'UserController@lista'); 
                     Route::post('/salvar','UserController@salvar');
                     Route::get('/userCad','UserController@userCad');
                     Route::get('/{usersId}/apiNome','UserController@apiNome');
                     Route::get('/visualizar', 'UserController@visualizar');  
                     Route::patch('/{usersId}', 'UserController@atualizar');
                     Route::get('/{usersId}/editar', 'UserController@editar');
                     Route::post('/{usersId}/deletar', 'UserController@deletar');                       
                });
              Route::prefix('permissions')->group(function(){
                     Route::get('/', 'PermissionsController@index');
                     Route::get('/novo', 'PermissionsController@novo');
                     Route::get('/lista', 'PermissionsController@lsta');
                     Route::post('/salvar','PermissionsController@salvar');
                     Route::patch('/{usersId}', 'PermissionsController@atualizar');
                     Route::get('/visualizar', 'PermissionsController@visualizar');
                     Route::get('{permissionsId}/apiNome','PermissionsController@apiNome');
                     Route::get('/{permissionsId}/editar', 'PermissionsController@editar');
                     Route::post('/{permissionsId}/deletar', 'PermissionsController@deletar');                      
                    });      
    });
    Route::prefix('encomendas')->group(function (){
           Route::get('/','EncomendasController@index');
           Route::get('/novo','EncomendasController@novo');
           Route::get('/lista','EncomendasController@lista');
           Route::post('/salvar','EncomendasController@salvar');           
           Route::patch('/{encomendaId}','EncomendasController@atualizar');
           Route::get('/{encomendaId}/editar','EncomendasController@editar');
           Route::get('/{encomendaId}/apiNome','EncomendasController@apiNome');
           Route::post('/{encomendaId}/deletar','EncomendasController@deletar'); 
           Route::get('/{encomendaId}/visualizar','EncomendasController@visualizar'); 
    });    
});
