<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;

/*
Route::get('/', [PrincipalController::class, 'home'])->name('index');

Route::get('/sobre-nos', [SobreNosController::class, 'aboutUs'])->name('about');

Route::get('/contato', [ContatoController::class, 'contact'] )->name('contact');
 */

Route::get('/', function () {
    return ('Home');
});


Route::get('/produtos', function(){
    echo 'aqui esta o arsenal';
});

Route::get('/produtos/{produto_id}/{nome}', function (
    int $produto_id,
    String $nome
    ){
    echo 'Id do produto: ' . $produto_id . ' Produto: ' . $nome ;
});

Route::get('/cadastro', function (){
    echo 'cadas';
});

Route::get('/login', function (){
 echo 'log in';
});

Route::get('/sobre', function (){
  echo 'tem nada sobre nos';
})->name('sobre');



Route::get('/admin', function (){

});

Route::get('/admin/login', function (){
  echo ' tela de login do admin';
});

Route::get('/admin/dashboard', function (){
  echo 'painel principal';
})->name('admin.dashboard');


Route::get('/admin/clientes', function (){
  echo 'lista de clientes';
});

Route::get('/admin/clientes/{cliente_id?}', function (
    int $cliente_id
){
    echo 'Visualização de um cliente específico';
});

Route::get('/admin/fornecedores', function (){
  echo 'lista de fornecedores';
});

Route::get('/admin/produtos', function (){
  echo 'lista de produtos cadastrados';
});

Route::get('/admin/produto/{slug}', function (
    String $slug 
){

})-> where('slug','[a-z0-9]+');