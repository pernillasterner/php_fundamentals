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
      'category' => 'Horrer',
      'releaseYear' => 2011,
    ],
    [
      'title' =>  "Book 2",
      'category' => 'Comedy',
      'releaseYear' => 1989,
    ]
  ];


  function filterByAuthor(array $books) {
    $filtredBooks = [];

    foreach($books as $book) :
      if($book['title'] === 'Book 1') :
        $filtredBooks[] = $book;
      endif;
    endforeach;

    return $filtredBooks;
  }
  
  ?>

  <ul>
    <?php foreach (filterByAuthor($books) as $book) : ?>
      <li>
        <?= $book['title'] ?> (<?= $book['releaseYear'] ?>)
      </li>
    <?php endforeach; ?>
  </ul>

</body>
</html>