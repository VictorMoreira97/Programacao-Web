<?php
$contador = 0;
$nomes = array("Tony", "Steve", "Natasha", "Wattchla", "Wanda", "Stephen");
$images = array(
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCQPUXVx7CDif8xCzTIsh8a3leB9u5ui8NuU6Jp_evAbF0sVb7_a7J0ZeuY_KoO6E6_K8&usqp=CAU",
    "https://www.armytimes.com/resizer/3GhR6ErTutQ7tz7s6mqbnKs0JOM=/1024x0/filters:format(jpg):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/archetype/NWLWOVE7JZBZRGEGIM2D6EHB5Q.jpg",
    "https://s2-glamour.glbimg.com/ajB2WaLUOufRSNaMUSOKn2h8B-Y=/0x0:600x900/1000x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_ba3db981e6d14e54bb84be31c923b00c/internal_photos/bs/2021/B/S/EQ1mnET6CN7MhwU9za2g/2021-07-07-viuva-negra-cate-shortland-entrevista-1.jpg",
    "https://upload.wikimedia.org/wikipedia/en/1/1a/Chadwick_Boseman_as_T%27Challa.jpg",
    "https://upload.wikimedia.org/wikipedia/pt/7/72/Elizabeth_Olsen_como_Wanda_Maximoff.jpg",
    "https://stylecaster.com/wp-content/uploads/2022/05/Doctor-Strange-in-the-Multiverse-of-Madness-6.jpg?w=960&h=540&crop=1"
);

echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avengers</title>
</head>
<body>
    
</body>
</html>';

while($contador < count($nomes)) {
    echo "<p style'margin: 20px;'>Olá <strong>". $nomes[$contador]. "</strong>, como vai?<p>";
    echo '<img src="'. $images[$contador]. '" alt="">';
    $contador++;
}
echo "</body>
</html>";

?>