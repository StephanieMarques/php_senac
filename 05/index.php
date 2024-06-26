<?php

//ESTRUTURAS DE REPETIÇÃO EM PHP

//EXEMPLO 1: FOR
echo "Exemplo 1: FOR <br>";
for ($i = 1 ; $i <= 5 ; $i = $i + 2) {
    echo "Número $i <br>";
}
 
echo "<br>";

//EXEMPLO 2: WHILE
echo "Exemplo 2: WHILE <br>";

$contador = 1;

while($contador <= 5)  {
    echo "Número $contador <br>";
    $contador++;
}

//EXEMPLO 3: DO-WHILE
echo "Exemplo 2: DO-WHILE <br>";

$cont_do = 1

do {
    echo "Numero $cont_do <br>";
    $cont_do++;
} while (cont_do <= 0);
?>