<?php

include_once __DIR__.'/class.php';

class Users extends Model{
  public function get(){
    echo "Get";
  }
  public function insert(){
    echo "Insert";
  }
  public function update(){
    echo "Update";
  }
  public function delete(){
    echo "Delete";
  }
}

$users = new Users;
$users->get();