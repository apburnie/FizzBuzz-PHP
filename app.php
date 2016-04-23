<!DOCTYPE html>
<html>
<head>
  <title>Fizzbuzz</title>
</head>

<body>
  <h1>FizzBuzz</h1>
  <form action="app.php" method="post">
    Give an Integer (e.g. 1, 2, ...):  <input type="text" name="input" /><br />
    <input type="submit" name="submit" value="Play Game!" />
  </form>

<p id="Result">
  <?php
  include 'FizzBuzz.php';
  $input = $_POST["input"];
  $game = new FizzBuzz;
  echo "".$game->play($input);
?>
</p>
</body>


</html>
