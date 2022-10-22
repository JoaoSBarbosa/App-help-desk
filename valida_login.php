
<?php
// inicialização
session_start();


// variavel que verifica se a autentificação foi realizada
$usuario_autentificado = false;

$usuarios_app = array(
    array(
        'email' => 'adm@teste.com.br',
        'senha' => 123456
    ),
    array(
        'email' => 'user@teste.com.br',
        'senha' => 'abcd'
    ),
);

foreach($usuarios_app as $user){

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autentificado = true;
    }
}
// função de enviar verificar autenticação e retornar o status
if($usuario_autentificado){
    echo 'Usuario autentificado';
    $_SESSION['autenticado'] = 'SIM';
}else {
    header('Location:index.php?login=erro');
    $_SESSION['autenticado'] = 'NAO';
    
}

?>