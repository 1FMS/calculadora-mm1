<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora M/M/1</title>

    <style>
        body{
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-items: center;

            margin-top: 20px;

            background-color: #f5f5f5;
        }
        #logo {
            width: 360px;
            height: auto;
        }
        h1 ,h2 {
            font-size: 25px;
            color: #8A997A;
        }
        button{
            width: 350px;
            height: auto;
            margin-bottom: 10px;
            padding: 3px;

            
            border-radius: 5px;

            background-color: #9DAF89;

            color: white;
            font-size: 17px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <h1>Calculadora M/M/1</h1>
    <h2>Selecione seu serviço:</h2>
    <div class="bt-area">
        <div class="bt-servico">
            <form action="calculadora.php" method="get">
                <input type="hidden" name="bt-servico" value="intensidade">
                <button type="submit">Intensidade de tráfego (ρ)</button>
            </form>
        </div>
        <div class="bt-servico"></div>
            <form action="calculadora.php" method="get">
                <input type="hidden" name="bt-servico" value="tamanho_fila">
                <button type="submit">Tamanho médio da fila (Lq)</button>
            </form>
        <div class="bt-servico">
            <form action="calculadora.php" method="get">
                <input type="hidden" name="bt-servico" value="media_clientes_sistema">
                <button type="submit">Número médio de clientes no sistema (L)</button>
            </form>
        </div>

        <div class="bt-servico">
            <form action="calculadora.php" method="get">
                <input type="hidden" name="bt-servico" value="tempo_medio_sistema">
                <button type="submit">Tempo médio no sistema (W)</button>
            </form>
        </div>

        <div class="bt-servico">
            <form action="calculadora.php" method="get">
                <input type="hidden" name="bt-servico" value="tempo_medio_fila">
                <button type="submit">Tempo médio na fila (Wq)</button>
            </form>
        </div>
        <div class="bt-servico">
            <form action="calculadora.php" method="get">
                <input type="hidden" name="bt-servico" value="probabilidade_fila">
                <button type="submit">Probabilidade de haver n clientes no sistema (Pn)</button>
            </form>
        </div>

    </div>

</body>
</html>