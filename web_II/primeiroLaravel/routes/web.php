<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'home'])->name('index');

Route::get('/sobre-nos', [SobreNosController::class, 'aboutUs'])->name('about');

Route::get('/contato', [ContatoController::class, 'contact'] )->name('contact');




/*
Route :: get('/produtos', function(){
    return 'produtos';
});

 HTTPS:
 GET
 POST
 PUT
 PATCH
 DELETE
 OPTIONS

Route::get(
    '/produtos/{produto_id}/{nome?}/{categoria?}', 
    function(
        Int $produto_id,
        String $nome, 
        String $categoria = 'Categoria nao informado'
        ){
    echo 'Id do produto: ' . $produto_id . ' Produto: ' . $nome . ' Categoria: ' . $categoria;
})->where('produto_id','[0-9]+')->where('nome','[A-Za-z]+');

//organizar || parte visivel || parte restrita 

Route::prefix('/privado')->group(function(){
    Route::get('/clientes', function(){
        echo 'pagina clientes';
    })->name('privado.clientes');
    Route::get('/fornecedores', function(){
        'pagina fornecedores';
    });
});


// redirecionamentos de rotas

Route::get('/rota1', function(){
    echo 'rota 1!';
});

Route::redirect('/rota2','/rota1');

// 2 forma

Route::get('/rota3', function(){
    return redirect('rota1');
});

// fallback

Route::fallback(function(){
    echo 'a rota usada nao existe. <a href=" ' .route('index'). ' ">clique aqui<a/> para ir para pagina inicial';
});
 */



