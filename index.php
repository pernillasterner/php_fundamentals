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

  <h1>Recommended Books</h1>

  <?php
  
  $books = [
    "Book 1",
    "Book 2",
    "Book 3",
  ]

  ?>

  <ul>
    <?php foreach ($books as $book) : ?>
      <li><?= $book ?></li>
    <?php endforeach ?>
  </ul>

</body>
</html>