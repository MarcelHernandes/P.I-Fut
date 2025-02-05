<?php
    namespace PHP\Modelo;
    require_once('DAO\Conexao.php');
    require_once('DAO\Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;
?>


<form method="POST">
    <label>Código: </label>
    <input type="number" name="codigo" id="codigo"><br><br>
 
        <button type="submit">
            Consultar
        <?php
        if(isset($_POST['codigo'])){
            //Conexão com o banco
            $conexao = new Conexao();
            //Coletar o Código
            $codigo = $_POST['codigo'];
            //Chamar o consultar
            $consultar = new Consultar();
            echo $consultar->consultarIndividual($conexao,$codigo);
        }
        ?>
    </button>    
</form>