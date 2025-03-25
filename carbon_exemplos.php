<?php
# carbon_exemplos.php

// Carregar o carregador do Composer
require_once('vendor/autoload.php');

//Muda para o horário brasileiro
date_default_timezone_set('America/Sao_Paulo');

use Carbon\Carbon;

// Agora

echo Carbon::now() . '<br>';
// Adiciona um dia 
echo Carbon::now()->addDay() . '<br>';

//Subtrair uma semana 
echo Carbon::now()->subWeek() . '<br>';

//Adiciona quatro anos
echo 'Próximas olimpíadas: ' . 
        Carbon::createFromDate(2024)->addYears(4)->year .
        '<br>';

// Idade de alguém
echo 'Sua idade é: ' . 
        Carbon::createFromDate(2005, 10, 14)->age .
        '<br>';

// Final de Semana?
if (Carbon::now()->isWeekend()) {
    echo 'Festa!';
}
else{
    echo 'Depresion';
}
echo '<br>';

// Calcular diferença entre datas 
$nascimento = Carbon::certaeFormDate(2006, 1, 15);
echo 'Diferença de data: ' . 
        Carbon::now()->diff($nascimento);
