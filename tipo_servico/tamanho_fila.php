<h1>Tamanho médio da fila (Lq)</h1>

<div class="form-area">
    <form action="" method="post">
        <p>λ(taxa média de chegada de clientes): </p><input type="text" name="lambda" id="lambda">
        <p>Por:</p>
        <select name="unidade_lambda" id="">
            <option value="hora">Hora</option>
            <option value="minuto">Minuto</option>
        </select>
        <p>μ(taxa de atendimento):</p><input type="text" name="mi" id="mi">
        <p>Por:</p>
        <select name="unidade_mi" id="">
            <option value="hora">Hora</option>
            <option value="minuto">Minuto</option>
        </select>
        <button type="submit" name="calcular">Calcular</button>
        <button><a href="index.php">Voltar</a></button>
    </form>
</div>


<?php
    if(isset($_POST['calcular'])){

        if(empty($_POST['lambda']) || empty($_POST['mi'])){
            echo "Preencha os campos acima";
            die();
        }
        $valor_lambda = $_POST['lambda'];
        $unidade_lambda = $_POST['unidade_lambda'];
        $valor_mi = $_POST['mi'];
        $unidade_mi = $_POST['unidade_mi'];

        $unidade_padrao = 'minuto';

        if($unidade_lambda == 'hora') {
            $valor_lambda = $valor_lambda/60;
        }else{
            $valor_lambda = $valor_lambda;
        }
        if($unidade_mi == 'hora') {
            $valor_mi = $valor_mi /60;
        }else{
            $valor_mi = $valor_mi;
        }
        
        $rho = $valor_lambda / $valor_mi;
        if(1 - $rho == 0){
            $Lq = pow($rho, 2);
        }else{
            $Lq = pow($rho, 2) / (1 - $rho);
        }

        

?>
        <div class="resultado">

            <h2>O tamanho médio da fila (Lq) é: <?php echo $Lq?> por minuto</h2>
            <p>Quanto maior o valor de ρ, maior será o tamanho médio da fila e o número médio de clientes no sistema.</p>


        </div>


        
<?php
    }
?>
