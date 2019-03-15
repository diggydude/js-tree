<?php

  // Save tree data to this file
  $filename = $_SERVER['DOCUMENT_ROOT'] . "/tree_store.dat";

  if ($_POST && isset($_POST['tree-store'])) {
    file_put_contents($filename, $_POST['tree-store']);
    header('HTTP/1.1 200 OK');
    exit(0);
  }
  header('HTTP/1.1 500 Expected POST field "tree-store" is missing.');
  exit(1);

?>