<?php 

$x = 0;
$y = 0;

$direcaoX = 1;
$direcaoY = 1;

$largura = 800;
$altura = 600;

$frame = 0;

if ($frame < 1000) {
    if ($x >= $largura) {
        $direcaoX *= -1;
    } else if ($x <= 0) {
        $direcaoX *= 1;
    }
}

if ($y >= $altura) {
    $direcaoY *= -1;
} else if ($y <= 0) {
    $direcaoY *= 1;
}

$x += $direcaoX;
$y += $direcaoY;

desenha($x, $y) {
    echo "$x $y";
}

?>