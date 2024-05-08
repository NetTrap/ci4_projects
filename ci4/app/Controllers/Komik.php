<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
  protected $komikModel;

  public function __construct()
  {
    $this->komikModel = new KomikModel();
  }

  public function index()
  {
    //$komik = $this->komikModel->findAll();

    $data = [
      'title' => 'Daftar Komik',
      'komik' => $this->komikModel->getKomik()
    ];


    // konek db tanpa model
    //$db = \Config\Database::connect();
    //$komik = $db->query("SELECT * FROM komik");
    //foreach ($komik->getResultArray() as $row) {
    //  d($row);
    //}

    //$komikModel = new\App\Models\KomikModels();
    //$komikModel = new KomikModel();

    return view('komik/index', $data);
  }

  public function detail($slug)
  {
    $komik = $this->komikModel->getKomik($slug);
    $data = [
      'title' => 'Detail Komik',
      'komik' => $this->komikModel->getKomik($slug)
    ];

    // jika komik tidak ada di tabel
    if (empty($data['komik'])) {
      throw new \Codeigniter\Exceptions\PageNotFoundException('Judul komik ' . $slug . ' tidak ditemukan.');
    }
    return view('komik/detail', $data);
  }

  public function create()
  {
    $data = [
      'title' => 'Form Tambah Data Buku'
    ];

    return view('komik/create');
  }

  public function save()
  {
    // dd($this->request->getVar());
    $slug = url_title($this->request->getVar('judul'), '-', true);
    $this->komikModel->save([
      'judul' => $this->request->getVar('judul'),
      'slug' => $slug,
      'penulis' => $this->request->getVar('penulis'),
      'penerbit' => $this->request->getVar('penerbit'),
      'sampul' > $this->request->getVar('sampul')
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

    return redirect()->to('/komik');

  }
}