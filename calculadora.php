<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora M/M/1</title>
</head>
<body>
    <?php
    $tipo_servico = $_GET['bt-servico'];

    switch ($tipo_servico) {
        case "intensidade":
            require_once('tipo_servico/intensidade.php');
            break;
        case "tamanho_fila":
            require_once('tipo_servico/tamanho_fila.php');
            break;
        case "media_clientes_sistema":
            require_once('tipo_servico/media_clientes_sistema.php');
            break;
        case "tempo_medio_sistema":
            require_once('tipo_servico/tempo_medio_sistema.php');
            break;
        case "tempo_medio_fila":
            require_once('tipo_servico/tempo_medio_fila.php');
            break;
        case "probabilidade_fila":
            require_once('tipo_servico/probabilidade_fila.php');
            break;
        default:
            echo "Tipo de serviço não encontrado.";
    }
    ?>
</body>
</html>
