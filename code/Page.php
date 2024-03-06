<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "faqs page";
    }

    public function tos()
    {
        echo "Halaman Term of Services";
    }
    public function biodata()
    {

        echo "Nama: Maulana Arif Muzaqi<br>";
        echo "Umur: 19 th<br>";
        echo "Alamat: Godong Gudo Jombang<br>";
    }
}