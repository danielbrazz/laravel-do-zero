<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdutoController;

// Todas as rotas terão prefixo /produto
Route::prefix('produto')->group(function() {
    Route::resource('produtos', ProdutoController::class);
});
