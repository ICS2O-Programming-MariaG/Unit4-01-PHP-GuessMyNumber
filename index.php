<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Maria's PHP Guess My Number Webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="MariaG">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Guess My Number in PHP - Maria Goemans</title>
  </head>
  <body>
    <?php echo "<h1>Guess My Number!</h1>"; ?>
    <?php echo "<p>Welcome to the Guess My Number game! Please input your guess below:</p>"; ?>
    <!-- Form for user input -->
    <form action="./check.php" method="post" target="result">
      <label for="guess">Guess a Number Between 1 and 6:</label>
      <input type="number" step="1" id="user-guess" name="user-guess" min="1" max="6" placeholder="Your Guess..."><br><br>
      <input type="submit" value="Check">
    </form>
    <iframe id="result" name="result"></iframe>
  </body>
</html>