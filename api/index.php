<?php
//DEIXE ISSO SIMPLES
//nsse inicial usarei o request direto mas em outras aplicações usar  psr4 
//implementar um santinize 
//get data

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Max-Age: 86400');
header('Content-Type: application/json');

$json = file_get_contents('php://input');
$post_data = json_decode($json);

require_once('./item.php');
$data = null;    
if($post_data->titulo != ''){
      $objItem = new Item();
         //preparar variaveis
         $data['item'] = $post_data->titulo;
         $data['quantidade'] = $post_data->quantidade;
         $data['descricao'] = $post_data->descricao;
         $data['status'] = $post_data->status;
         //carregar item
         $objItem->carregar($data);
         
         echo json_encode(array('retorno do objeto '.$objItem->getItem()));
}

