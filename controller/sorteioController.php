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
        $html .="<h4>Número sorteado</h4>";
        $html .= $cad_result;
        $html .= "<hr>";
        $html .="<h4>Número sorteado ordenado</h4>";
        sort($resultado);
        $html .= implode(',',$resultado);
        $html .= "<hr>";
        $html .="<h4>Acertos por apostador</h4>";
        $html .= $sorteio->getHTMLAcertos();
        return $html; 
    }
}   