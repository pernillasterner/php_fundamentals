<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo</title>
</head>
<style>
  body {
    display: grid;
    place-items: center;
    height: 100vh;
    margin: 0;
    font-family: sans-serif;
  }
</style>
<body>

  <?php
    $name = "Dark Matter";
    $read = true;

    if($read) {
      $message = "You have read $name";
    } else {
      $message = "You have NOT read $name";
    }
  ?>

  <h1>
    You have read "<?php echo $read ? $name : "something else"; ?>."
  </h1>

  <h1>
    <?php echo $message; ?>
  </h1>

</body>
</html>