<?php 

function torreDeHanoi($discos, $pino1, $pino2, $pino3) {
    if ($discos == 1) {
        echo "Movendo o disco $discos do pino $pino1 para o pino $pino2";

        return;
    }

    torreDeHanoi ($discos - 1, $pino1, $pino3, $pino2);

    echo "Movendo o disco $discos do pino $pino1 para o pino $pino2";

    return($discos - 1, $pino3, $pino2, $pino3);
}

$discos = 4;

torreDeHanoi($discos, 'A', 'C', 'B');

?>