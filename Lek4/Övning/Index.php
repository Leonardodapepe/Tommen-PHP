<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Beräkna Area</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <h1>Beräkna Arean av en Rektangel eller Kvadrat</h1>
    <form method="post" action="">
        <label for="length">Längd (cm):</label>
        <input type="text" id="length" name="length" required>
        <br><br>
        <label for="width">Bredd (cm):</label>
        <input type="text" id="width" name="width" required>
        <br><br>
        <input type="submit" value="Beräkna Area">
    </form>

    <?php
    #1 ^^ html stuff included
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        function beräknaArea($length, $width) {
            if (!is_numeric($length) || !is_numeric($width)) {
                return "Fel: Värdena måste vara numeriska.";
            }
            if ($length <= 0 || $width <= 0) {
                return "Fel: Värdena måste vara positiva.";
            }

            $area = $length * $width;
            return round($area, 2); # Round to 2 decimals
        }

        
        $length = $_POST["length"];
        $width = $_POST["width"];

        # Call func or give error
        $resultat = beräknaArea($length, $width);

        echo "<h2>Resultat:</h2>";
        if (is_numeric($resultat)) {
            echo "<p>Arean är: $resultat cm²</p>";
        } else {
            echo "<p>$resultat</p>"; # give error
        }
    }
    
    ?>


<?php
    #2
    $num = "3,25,30,88,11";

    #function
    function räknaMedeltal($numString) {
        #split string into array
        $numArray = explode(",", $numString);

        # Convert to digits that are not x.something
        $numArray = array_map('intval', $numArray);

        #sum of 
        $sum = array_sum($numArray);
        $antal = count($numArray);

        # average
        $avNum = $sum / $antal;

        # avearge num
        return round($avNum, 2);
    }

    #call func
    $avNum = räknaMedeltal($num);

    # echo func
    echo "<p>Input är: $num </P>";
    echo "<p>Medeltalet är: $avNum</p>";
    ?>

<?php
    #3
    #func
    function add2($tal1, $tal2) {
        #checks what sum is
        $summa = $tal1 + $tal2;
        #echo sum
        echo "<p>Summan av $tal1 och $tal2 är: $summa</p>";
    }

    # calling func with diff numbers
    add2(5, 10);  
    add2(7, 3);
    ?>


    <!-- 4 -->
        <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center">Enkel Kalkylator</h1>
                <form method="post" action="" class="p-4 border rounded bg-light">
                    <div class="mb-3">
                        <label for="num1" class="form-label">Nummer 1:</label>
                        <input type="number" step="any" id="num1" name="num1" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="num2" class="form-label">Nummer 2:</label>
                        <input type="number" step="any" id="num2" name="num2" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="operation" class="form-label">Välj Operation:</label>
                        <select id="operation" name="operation" class="form-select" required>
                            <option value="add">Addition</option>
                            <option value="subtract">Subtraktion</option>
                            <option value="multiply">Multiplikation</option>
                            <option value="divide">Division</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Beräkna</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    #check what todo
                    function add($a, $b) {
                        return $a + $b;
                    }

                    function subtract($a, $b) {
                        return $a - $b;
                    }

                    function multiply($a, $b) {
                        return $a * $b;
                    }

                    function divide($a, $b) {
                        if ($b == 0) {
                            return "Division med noll är inte tillåtet.";
                        }
                        return $a / $b;
                    }

                    #get formula answer
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $operation = $_POST["operation"];

                    #do chosen operation
                    switch ($operation) {
                        case "add":
                            $result = add($num1, $num2);
                            break;
                        case "subtract":
                            $result = subtract($num1, $num2);
                            break;
                        case "multiply":
                            $result = multiply($num1, $num2);
                            break;
                        case "divide":
                            $result = divide($num1, $num2);
                            break;
                        default:
                            $result = "Ogiltig operation.";
                    }

                    #print result
                    echo "<div class='mt-4 p-3 bg-light border rounded'>";
                    echo "<h4>Resultat: $result</h4>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>

