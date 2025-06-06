<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';

spl_autoload_register(function ($class) {
  // dd($class);
  require base_path($class . '.php');
});

// require base_path('Database.php');
// require base_path('Response.php');
require base_path('router.php');


