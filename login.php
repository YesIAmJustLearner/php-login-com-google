<?php
require_once 'OAuthGoogle.php';

$idCliente = 'seu-id-cliente';
$segredoCliente = 'seu-segredo-cliente';


$clienteOAuth = new OAuthGoogle($idCliente, $segredoCliente);

if (isset($_GET['code'])) {
    $accessToken = $clienteOAuth->getAccessToken($_GET['code']);
    $infoUsuario = $clienteOAuth->getInfoUsuario($accessToken);

    $nomeUsuario = isset($infoUsuario['name']) ? $infoUsuario['name'] : '';
    $emailUsuario = isset($infoUsuario['email']) ? $infoUsuario['email'] : '';

    header('Location: inicio.php');
    exit;
}

$urlAutenticacao = $clienteOAuth->getUrlAutenticacao(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login com Google</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Login com Google</h3>
                    </div>
                    <div class="card-body text-center">
                        <p>Para continuar, faça login usando sua conta do Google.</p>
                        <a href="<?php echo $urlAutenticacao; ?>" class="btn btn-primary">Login com Google</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
