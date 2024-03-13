<?php
namespace App\Controllers;

class Page extends BaseController{
  
  public function about(){
    echo "About Page";
  }
  
  public function contact(){
    echo "Contact Page";
  }
  
  public function faqs(){
    echo "Faqs Page";
  }
  
  public function tos(){
    echo "Halaman Term of Service";
  }

  public function biodata()
      {
        echo "Nama: Maulana Arif Muzaqi<br>";
        echo "Umur: 19 th<br>";
        echo "Alamat: Godong Gudo Jombang<br>";
      }
}