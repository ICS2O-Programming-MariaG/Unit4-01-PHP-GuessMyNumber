<!DOCTYPE html>
<html>
<!-- Added html tags to fix Super Linter error -->
<?php
  define(MIN, 1);
  define(MAX, 6);
  $correctNumber = intval(rand(MIN, MAX));
  $guessedNumber = intval($_POST["user-guess"]);
  //if/then statement: if correctNumber is equal to guessedNumber
  if ($correctNumber == $guessedNumber) {
    echo "Congratulations! You are correct!";
  }
  //else: if user guessed wrong
  else {
    echo "You are wrong! The correct number is $correctNumber.";
  }
?>
</html>
