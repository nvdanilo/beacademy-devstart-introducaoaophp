<form action="" method="post">
    <input name="num1" placeholder="Número 1"> <br/>
    <input name="num2" placeholder="Número 2"> <br/>
    <button name="soma">Somar</button>
    <button name="subtracao">Subtrair</button>
    <button name="multiplicacao">Multiplicar</button>
    <button name="divisao">Dividir</button>
</form>

<?php
    if ($_POST) {

        if (isset($_POST['soma'])) {
            echo $_POST['num1'] + $_POST['num2'];
        }
        
        if (isset($_POST['subtracao'])) {
            echo $_POST['num1'] - $_POST['num2'];
        }
        
        if (isset($_POST['multiplicacao'])) {
            echo $_POST['num1'] * $_POST['num2'];
        }
        
        if (isset($_POST['divisao'])) {
            echo $_POST['num1'] / $_POST['num2'];
        }
    }
?>