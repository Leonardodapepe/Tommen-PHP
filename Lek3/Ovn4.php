<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i=0;
    while ($i<6){
        echo "hej på dej <br>";
        $i++;
    }
    $x = 0;
    $output = "";
    while ($x <= 10) {
        $output.= $x;
        $x+=1;
    }
    echo $output;

    $i=0;
    for ($j=0; $j < 7; $j++){
        echo "hej på dej <br>";
        $i++;
    }

    $capital = array(
        "Finlands" => "Helsingfors",
        "Sverige" => "Stockholm",
        "Japan" => "Tokyo",
        "Tyskland" => "Berlin",
    );
    foreach ($capital as $country=>$city){
        echo $city. " är huvustaden i ". $country."<br>";
    }
    $bilar = "audi, jeep, volkswagen, ford, opel";
    
    $bilarray = explode(", ", $bilar);
    foreach ($bilarray as $bilar){
        echo $bilar."<br>";
    }
    $rad = 3;
    if ($rad==0){
        echo "värdet är noll <br>";
        $rad++;
    }
    elseif ($rad==1){
        echo "Endast en rad <br>";
        $rad++;
    }
    elseif ($rad>2 && $rad<=10){
        while ($rad>2 && $rad<=10){
        echo "detta är rad " . $rad ."<br>";
        $rad++;
    }   
    }
    else {
        echo "För mycket rader eller ogiltigt värde<br>";
    }
    $months = array (
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December"

    );
    
    $people = array(
        "Paul" => '14.03.1977',
        "Baul" => '15.04.1999',
        "Blart" => '16.05.1950',
        "Taul" => '17.06.2000',
    );
    foreach ($people as $name => $birthday){
        echo $name . 'är född i ' . $months[str_replace('0', " ", explode(".",$birthday)[1])-1] . "<br>";
    }

    
    $stader = array(
        "Helsingfors" =>(601035),
        "Esbo" =>(255121),
        "Tammerfors" =>(216586),
        "Vanda" =>(204545),
        "Åbo" =>(179529),
    );
    asort($stader);
    foreach ($stader as $city1 => $pop){
        echo $city1 . ":" . $pop . "<br>";
    }
    ?>
</body>
</html>