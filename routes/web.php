<?php

use App\Livewire\LoginCreate;
use App\Livewire\LoginIndex;
use App\Livewire\ProdutoCreate;
use Illuminate\Support\Facades\Route;


Route::get('/login', LoginCreate::class);
Route::get('/cadastro', ProdutoCreate::class);
Route::get('/inicio', LoginIndex::class);