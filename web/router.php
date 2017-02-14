<?php

$path = $_SERVER['REQUEST_URI'];

if($path === '/') {
  require 'api/index.php';
} else if($path === '/books') {
  require 'api/books.php';
} else if($path === '/authors') {
  require 'api/authors.php';
} else if(substr($path, 0, 9) === "/authors/") {
  require 'api/author.php';
} else {
  echo "Not found";
}
