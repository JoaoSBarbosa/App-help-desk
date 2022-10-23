<?php 

session_start();
// trabalhando na montagem do texto
$titulo = str_replace('#','-',$_POST['titulo']);
$categoria = str_replace('#','-',$_POST['categoria']);
$descricao = str_replace('#','-',$_POST['descricao']);

$texto = $_SESSION['id']. '#' . $titulo .' # '. $categoria .' # '. $descricao. PHP_EOL;

// abrindo o arquivo txt
$arquivo = fopen('arquivo.txt','a');
// escrevendo o tetxo
fwrite($arquivo, $texto);
// fechando o arquivo
fclose($arquivo);
header('Location: abrir_chamado.php');


?>