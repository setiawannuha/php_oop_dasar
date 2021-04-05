<?php
class Users{
  //property
  public $nama = "Heru";
  public $email;
  // function yang di panggil pertama kali
  public function __construct($mail, $other){
    $this->email = $mail." ".$other;
  }

  public function getEmail(){
    return $this->email;
  }
  //method
  public function getNama(){
    echo "Nama = ".$this->nama;
    echo "<br/>";
    echo "Email = ".$this->getEmail();
  }
}
// object
$users = new Users("herufirmansyah@mail.com", "123");
echo $users->nama;
echo "<br/>";
$users->getNama();
echo "<hr/>";
echo "Static property & method<br/>";
class Laptop{
  //property
  public static $merk = "Asus";
  // method
  public static function getNama(){
    echo "Nama = ".Laptop::$merk;
  }
}
echo Laptop::$merk;
echo "<br/>";
Laptop::getNama();