#!/usr/bin/env php
<?php
require 'vendor/autoload.php';
//require 'src/Buscador.php';

//Teste::metodo();


use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri'=> 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador=new Buscador($client, $crawler);
$cursos = $buscador->buscar(url:'/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo exibeMensagens($curso);
    //echo $curso . PHP_EOL;
}


