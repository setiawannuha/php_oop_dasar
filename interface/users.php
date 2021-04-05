<?php
include_once __DIR__.'/model.php';

class Users implements Model{
  public function get(){
    echo "GET";
  }
}

$users = new Users;
$users->get();