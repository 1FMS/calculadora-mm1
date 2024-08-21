<h1>Intensidade de tráfego (ρ)</h1>

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

?>
        <div class="resultado">

            <h2>Valor de ρ: <?php echo $rho?> por minuto</h2>
            <p>Se ρ < 1, o sistema é estável e a fila não cresce indefinidamente. Se ρ ≥ 1, o sistema está instável e a fila tende ao infinito</p>


        </div>


        
<?php
    }
?>
