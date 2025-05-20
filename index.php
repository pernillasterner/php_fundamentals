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

  <h1>Recommended Books</h1>

  <?php
  $books = [
    [
      'title' =>  "Book 1",
      'category' => 'Fantasy',
      'releaseYear' => 2011,
    ],
    [
      'title' =>  "Book 2",
      'category' => 'Comedy',
      'releaseYear' => 1989,
    ]
  ];


  function filter(array $items, string $key, string $value) {
    $filtredItems = [];

    foreach($items as $item) :
      if($item[$key] === $value) :
        $filtredItems[] = $item;
      endif;
    endforeach;

    return $filtredItems;
  };
  
  $filtredBooks = filter($books, 'title', 'Book 1');
  ?>

  <ul>
    <?php foreach ($filtredBooks as $book) : ?>
      <li>
        <?= $book['title'] ?> (<?= $book['releaseYear'] ?>)
      </li>
    <?php endforeach; ?>
  </ul>

</body>
</html>