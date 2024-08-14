<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<form action="ovn2.php" method="post">
    Name: <input type="text" name="name"><br>
    <input type="submit">
    <?php
    #form 1
    if (isset($_POST["name"])){
        $name = $_POST["name"];
        if ($name != 0){
            echo "<br>Your name is: " . $name;
        }}
    ?>
</form>
<form action="ovn2.php" method="POST">
Name: <input type="text" name="name2"><br>
Age: <input type="text" name="age"><br>
<input type="submit">
<?php
#form 2
    if (isset($_POST["name2"])&& isset($_POST["age"])){
        $name2 = $_POST["name2"];
        if ($name2 != 0){
            echo "<br>Your name is " . $name2;
        }
        $age = $_POST["age"];
        if ($age != 0){
            echo "<br>your age is " . $age;
    }}
    ?>
</form>

    <?php
    #how many letters in string
        $text = "<br>tomosarts future crypto site";
        echo strlen($text);
        #string replace words
        $text = str_replace ("future", "past",$text);
        echo $text;

        #is the same checker
        $str1 = "Future";
        $str2 = "future";
            if ($str1 == $str2){
                echo "de är likadanna";
            }
            else {
                echo "de är inte likedanna";
            }
            
            #day task picker
            $day = "Monday";
            switch ($day) {
                case "Monday":
                    echo "<br>idag är det $day som betyder att du ska simma";
                break;
                case "Tisdag":
                    echo "<br>idag är det $day som betyder att du ska dyka";
                break;
                case "Onsdag":
                    echo "<br>idag är det $day som betyder att du ska cykla";
                break;
                case "Torsdag":
                    echo "<br>idag är det $day som betyder att du ska balja";
                break;
                case "Fredag":
                    echo "<br>idag är det $day som betyder att du ska drick dig stupfull";
                break;
                case "Lördag":
                    echo "<br>idag är det $day som betyder att du ska sova";
                break;
                case "Söndag":
                    echo "<br>idag är det $day som betyder att du ska ta det lungt";
                break;
                default:
                echo "<br>idag är det inte en dag";
      }
      #sorting array
      $num = array(4,2,8,1,9);
        sort($num);
        echo "<br>";
        for ($i=0; $i < 5;){
            echo $num[$i];
            $i++;
        }



        #10 pages lorem ipsum
            $file = fopen("tomosarts.txt", "r");

            while(! feof($file)) {
                $line = fgets($file);
                echo $line. "<br>";
              }

    ?>
    <form action="ovn2.php" method="post">
        <input type="number" name="1">
        <input type="number" name="2">
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="submit">
        <?php
        $num1 = $_POST["1"];
        $num2 = $_POST["2"];
        $chosenOperator = $_POST["operator"];

        switch ($chosenOperator){
            case "add";
            echo "<br>" .$num1 + $num2;
            break;
            case "subtract";
            echo "<br>" .$num1 - $num2;
            break;
            case "multiply";
            echo "<br>" .$num1 * $num2;
            break;
            case "divide";
            echo "<br>" .$num1 / $num2;
            break;
            default;
            echo "error";
            break;
        }
        ?>
    </form>


</body>
</html>