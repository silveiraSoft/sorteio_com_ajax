<?php
//include_once(__DIR__ . "/../model/sorteioModel.php");
include_once(__DIR__ ."/../class/sorteio.php");
class SorteioController
{
    public function __construct()
    {
    }

    public function mostrarResultado($nome_lot, $data_sorteio, $num_inicial, $num_fim)
    {
        $sorteio = new Sorteio();
        $sorteio->salvar($nome_lot, $data_sorteio, $num_inicial, $num_fim);
        $sorteio->gerarNumeroSorteio();
        $resultado = $sorteio->getNumeroSorteado();
        //print_r($sorteio->getNumeroSorteado());
        $cad_result = implode(',',$resultado);
        $html = "";
        $html .= "<h1>Resultado de sorteio</h1>";
        $html .= "<hr>";
        $html .="<h3>Número sorteado</h3>";
        $html .= $cad_result;
        $html .= "<hr>";
        $html .="<h3>Número sorteado ordenado</h3>";
        sort($resultado);
        $html .= implode(',',$resultado);
        $html .= "<hr>";
        $html .="<h3>Acertos por apostador</h3>";
        $html .= $sorteio->getHTMLAcertos();
        return $html; 
    }
}   