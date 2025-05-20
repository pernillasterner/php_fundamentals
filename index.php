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

function filter($items, $fn) {

  $filtredItems = [];

  foreach($items as $item) {
      if($fn($item)) {
        $filtredItems[] = $item;
      } 
  }
  return $filtredItems;
}

$filtredBooks = array_filter($books, function($book) {
  return $book['title'] === 'Book 1';
});

// load the html
require "index.view.php";