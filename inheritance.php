<?php

class Company{
  protected $namaCompany = "PT ABC";
}

class Users extends Company{
  protected $nama = "Budi";
  protected $alamat = "Jakarta Pusat";
}

class Kasir extends Users{
  private $gaji = 2000000;
  public function getData(){
    echo $this->nama;
    echo "<br/>";
    echo $this->alamat;
    echo "<br/>";
    echo $this->gaji;
    echo "<br/>";
    echo $this->namaCompany;
  }
}

$kasir = new Kasir;
$kasir->getData();