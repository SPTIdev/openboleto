<?php

date_default_timezone_set("America/Sao_Paulo");

require '../autoloader.php';

use OpenBoleto\Banco\Unicred;
use OpenBoleto\Agente;

$sacado = new Agente('RONALDO GONCALVES', '471.503.006-34', 'AV 21 DE NOVEMBRO, 829 VILA ISABEL', '37.505-185', 'ITAJUBA', 'MG');
$cedente = new Agente('Unimed Itajubá Cooperativa de Trabalho Médico', ' 23.802.218/0001-65', 'Avenida Cesário Alvim, 382 Centro', '37.501-059', 'Itajubá', 'Minas Gerais');

$boleto = new Unicred(array(
    // Parâmetros obrigatórios
    'dataVencimento' => new DateTime('2013-07-20'),
    'valor' => 1093.79,
    'sacado' => $sacado,
    'cedente' => $cedente,
    'agencia' => 3302, // Até 4 dígitos
    'carteira' => 51, // 11, 21, 31, 41 ou 51
    'conta' => 2259, // Até 10 dígitos
    'sequencial' => '13951', // Até 10 dígitos
'teste' => 'jasdfiafsjas',
    // Parâmetros recomendáveis
    //'logoPath' => 'http://empresa.com.br/logo.jpg', // Logo da sua empresa
    // 'contaDv' => 2,
    // 'agenciaDv' => 1,
    'descricaoDemonstrativo' => array( // Até 5
        'Compra de materiais cosméticos',
        'Compra de alicate',
    ),
    'instrucoes' => array( // Até 8
        'Após o dia 30/11 cobrar 2% de mora e 1% de juros ao dia.',
        'Não receber após o vencimento.',
    ),

    // Parâmetros opcionais
    //'resourcePath' => '../resources',
    // 'moeda' => Unicred::MOEDA_REAL,
    //'dataDocumento' => new DateTime(),
    //'dataProcessamento' => new DateTime(),
    //'contraApresentacao' => true,
    //'pagamentoMinimo' => 23.00,
    //'aceite' => 'N',
    //'especieDoc' => 'ABC',
    //'numeroDocumento' => '123.456.789',
    //'usoBanco' => 'Uso banco',
    // 'layout' => 'layout.phtml',
    //'logoPath' => 'http://boletophp.com.br/img/opensource-55x48-t.png',
    //'sacadorAvalista' => new Agente('Antônio da Silva', '02.123.123/0001-11'),
    //'descontosAbatimentos' => 123.12,
    //'moraMulta' => 123.12,
    //'outrasDeducoes' => 123.12,
    //'outrosAcrescimos' => 123.12,
    //'valorCobrado' => 123.12,
    //'valorUnitario' => 123.12,
    //'quantidade' => 1,
));

echo $boleto->getOutput();
