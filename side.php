<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="side.php" method="get">
    <label for="Num1">Number1</label>
    <input type="Number" name="Num1">
    <br><br>
    <label for="Num2">Number2</label>
    <input type="Number" name="Num2">
    <br><br>
    <input type="submit">

   </form>
   <?php
    // $_GET ["Num1"];
     $firstNumber = $_GET["Num1"];
     $secondNumber = $_GET["Num2"];
     $answer = $firstNumber * $secondNumber;
     echo "<h1>The multiplication of $firstNumber and $secondNumber is $answer</h1>";

     $firstNumber = $_GET["Num1"];
     $secondNumber = $_GET["Num2"];
     $answer = $firstNumber / $secondNumber;
     echo "<h1>The Division of $firstNumber and $secondNumber is $answer</h1>";
     ?>
</body>
</html> 