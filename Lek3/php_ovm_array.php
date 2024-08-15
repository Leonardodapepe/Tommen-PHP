<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cool.css">
</head>
<body>
    <?php
    $code = array ("Python", "C#", "C", "C++");
    for ($i=0; $i < 4; $i++){
        echo   $code[$i] . "<br>";
        }


        $mat = array (
            array("bulla", 1.50, 10),
            array("kaka", 5.00, 4),
            array("pirog", 2.50, 12),
        );

        foreach ($mat as $item){
            echo $item[0] . " " . $item[1] . " " . $item[2] . "<br>";
        }

        echo "<br>" . $mat[0][1];
        echo "<br>" . $mat[2][2];

        echo "<br>" . count($mat[2]) . "<br>";

        $totalmat = 0;
        for ($i=0; $i < count($mat); $i++){
            $totalmat += $mat[$i][2];
        }
        echo $totalmat
    ?>
</body>
</html>