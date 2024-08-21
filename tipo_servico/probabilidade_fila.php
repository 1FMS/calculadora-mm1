<style>
    body{
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-items: center;

            margin-top: 20px;

            background-color: #f5f5f5;
        }
        .form-area{
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            align-items: center;

            margin-bottom: 10px;

            background-color: white;
            padding: 15px;
            border: 2px solid black;
            border-radius: 5px;
        }
        .input{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            align-items: center;
            justify-content: flex-start;
        }
        .bt-final{
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: space-evenly;
            align-items: center;
        }
        a{
            text-decoration: none; 
            color: black
        }
        .resultado{
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            align-items: center;

            text-align: center;
        }
</style>

<h1>Probabilidade de haver n clientes no sistema (Pn)</h1>

<div class="form-area">
    <form action="" method="post">
        <div class="input">
            <p>λ(taxa média de chegada de clientes): </p><input type="text" name="lambda" id="lambda">
            <p>Por:</p>
            <select name="unidade_lambda" id="">
                <option value="hora">Hora</option>
                <option value="minuto">Minuto</option>
            </select>
        </div>
        <div class="input">
            <p>μ(taxa de atendimento):</p><input type="text" name="mi" id="mi">
            <p>Por:</p>
            <select name="unidade_mi" id="">
                <option value="hora">Hora</option>
                <option value="minuto">Minuto</option>
            </select>
        </div>
        <div class="input">
            <p>N(número de cliente):</p><input type="text" name="valor_n" id="mi">
        </div>
        <div class="bt-final">
            <button type="submit" name="calcular">Calcular</button>
            <button><a href="index.php">Voltar</a></button>
        </div>
        
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
        $valor_n = $_POST['valor_n'];

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

        

        $pn = (1 - $rho) * (pow($rho, $valor_n))

?>
        <div class="resultado">

            <h2>A probabilidade de haver <?php echo $valor_n ?> clientes no sistema (Pn): <?php echo ($pn * 100)?> %</h2>
            
        </div>


        
<?php
    }
?>
