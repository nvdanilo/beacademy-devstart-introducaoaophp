<select>
    <option selected> -- Selecione o Ano -- </option>
    <?php
        $ano = 2022;

        while ($ano >= 1900) {
            echo "<option>{$ano}</option>";
            $ano--;
        }
    ?>
</select>

<select>
    <option selected> -- Selecione o Mês -- </option>
    <?php 
        for ($mes = 1; $mes <= 12; $mes++) {
            echo "<option>{$mes}</option>";
        }   
    ?>
</select>

<select>
    <option selected> -- Selecione o Dia -- </option>
    <?php
        for ($dia = 1; $dia <= 31; $dia++) {
            echo "<option>{$dia}</option>";
    }   
    ?>
</select>