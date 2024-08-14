<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i = 3;
    $kalle = "kock";
        if ($i > 2){
            echo $i . " är större eller likamed 2 <br>";
        }
    
    
        if ($kalle == "kock"){
            echo "<br>Kalle är än " . $kalle;
        }
        elseif ($kalle == "svetsare"){
            echo "<br>kalle är inte en svetsare";
        }
        elseif ($kalle == "kodare"){
            echo "<br>kalle är inte en kodare";
        }
        else {
            echo "<p>kalle är inte vad du skrev han är en $kalle <p/>";
        }
        
        switch ($kalle) {
            case "kock":
                echo "<br>Kalle är än " . $kalle;
            break;
            case "svetsare":
                echo "<br>kalle är inte en svetsare";
            break;
            case "kodare":
                echo "<br>kalle är inte en kodare";
            break;
            default:
            echo "<br><p>kalle är inte vad du skrev han är en $kalle <p/>";
  }
        $x = 7;

        if ($x > 2 && $x < 10){
            echo "<br> waa x är mindre än 10 men större än 2";
        }

        echo "<br>" . date('D');
        
        $day = date('D');
        if ($day == "Wed"){
            echo "<br> ida är det onsdag";
        }
        elseif ($day == "Thu"){
            echo "<br> ida är det torsdag";
        }
        elseif ($day == "Fri"){
            echo "<br> ida är det fredag";
        }
        elseif ($day == "Sat"){
            echo "<br> ida är det lördag";
        }
        #etc etc
    ?>
</body>
</html>