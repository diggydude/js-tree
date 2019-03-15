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

  // Use these functions to covert the data between formats for
  // use with either the PHP or JavaScript version.

  function jsonToPhp($json)
  {
    $data = json_decode($json);
    return serialize($data);
  } // jsonToPhp

  function phpToJson($serialized)
  {
    $data = unserialize($serialized);
    return json_encode(array_values($data));
  } // phpToJson

?>