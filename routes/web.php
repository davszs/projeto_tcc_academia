<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal']);


route::get('/login', function() {
    echo "login";
});

route::get('/rec_senha', function() {
    echo "recuperar senha";
});

route::get('/painel_controle', function() {
    echo "painel de controle";
});

route::get('/funcionarios', function() {
    echo "funcionarios";
});

route::get('/planejamento_aulas', function() {
    echo "planejamento de aulas";
});

route::get('/config_geral', function() {
    echo "configurações gerais";
});