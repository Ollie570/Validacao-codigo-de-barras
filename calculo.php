<?php

$cdBarra = $_POST["code"];

$soma = 0;
for ($i = 0; $i < 12; $i++) {
    if ($i % 2 == 0) {
        $soma = $soma +  ($cdBarra[$i] * 1);
    } else {
        $soma +=  ($cdBarra[$i] * 3);
    }
}

if ((((floor($soma / 10) + 1) * 10) - $soma) == $cdBarra[12]) {
    ?>
    <script>
        alert('Válido')
        window.location.href = 'index.php'
    </script>
    <?php
} else {
    ?>
    <script>
        alert('Inválido')
        window.location.href = 'index.php'
    </script>

    <?php
}
