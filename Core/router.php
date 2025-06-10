<?php

namespace Core;

class Router 
{
  protected $routes = [];

  public function add($uri, $controller, $method)
  {
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => $method,
      'middleware' => NULL 
    ];

    return $this;
  }

  public function get($uri, $controller)
  {
    return $this->add($uri, $controller, 'GET');
  }

  public function post($uri, $controller)
  {
    return $this->add($uri, $controller, 'POST');
  }

  public function delete($uri, $controller)
  {
    return $this->add($uri, $controller, 'DELETE');
  }

  public function patch($uri, $controller)
  {
    return $this->add($uri, $controller, 'PATCH');
  }

  public function put($uri, $controller)
  {
    return $this->add($uri, $controller, 'PUT');
  }

  public function only($key)
  {
    $this->routes[array_key_last($this->routes)]['middleware'] = $key;

    return $this;
  }

  public function route($uri, $method)
  {
    // Check if key exists in route array
    foreach($this->routes as $route) {
   
      if($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
        // check if page is for guest and user not logged in
        if($route['middleware'] === 'guest') {
          // if user is logged in then send to homepage
          if($_SESSION['user'] ?? false) {
            header('Location: /');
            exit();
          }
        }

        if($route['middleware'] === 'auth') {
          // if user is logged in then send to homepage
          if(! $_SESSION['user'] ?? false) {
            header('Location: /');
            exit();
          }
        }
        return require base_path($route['controller']);
      }
    }
    $this->abort();
  }

  protected function abort($code = 404) {
  
    http_response_code($code);
    
    require base_path("views/{$code}.php");
    
    die();
    
  }
}
