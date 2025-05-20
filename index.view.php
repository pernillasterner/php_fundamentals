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
    /* height: 100vh; */
    margin: 0;
    font-family: sans-serif;
  }
</style>
<body>

  <ul>
    <?php foreach ($filtredBooks as $book) : ?>
      <li>
        <?= $book['title'] ?> (<?= $book['releaseYear'] ?>)
      </li>
    <?php endforeach; ?>
  </ul>

</body>
</html>