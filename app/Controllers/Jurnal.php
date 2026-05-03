<?php

namespace App\Controllers;

use App\Models\JurnalModel;

class Jurnal extends BaseController
{
    protected $jurnalModel;

    public function __construct()
    {
        $this->jurnalModel = new JurnalModel();
    }

    // read
    public function index()
    {
        $data = [
            'title' => 'Daftar Jurnal Skripsi',
            'jurnal' => $this->jurnalModel->findAll()
        ];

        return view('jurnal/index', $data);
    }

    // create
    public function create()
    {
        $data = [
            'title' => 'Tambah Referensi Jurnal'
        ];
        return view('jurnal/create', $data);
    }

    // save data ke database
    public function save()
    {
        $this->jurnalModel->save([
            'judul_jurnal'   => $this->request->getVar('judul_jurnal'),
            'penulis'        => $this->request->getVar('penulis'),
            'tahun_terbit'   => $this->request->getVar('tahun_terbit'),
            'link_referensi' => $this->request->getVar('link_referensi'),
            'status_baca'    => $this->request->getVar('status_baca')
        ]);

        return redirect()->to('/jurnal');
    }

    // delete
    public function delete($id)
    {
        $this->jurnalModel->delete($id);
        return redirect()->to('/jurnal');
    }

    // edit
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Referensi Jurnal',
            'jurnal' => $this->jurnalModel->find($id)
        ];

        return view('jurnal/edit', $data);
    }

    // update
    public function update($id)
    {
        $this->jurnalModel->save([
            'id'             => $id,
            'judul_jurnal'   => $this->request->getVar('judul_jurnal'),
            'penulis'        => $this->request->getVar('penulis'),
            'tahun_terbit'   => $this->request->getVar('tahun_terbit'),
            'link_referensi' => $this->request->getVar('link_referensi'),
            'status_baca'    => $this->request->getVar('status_baca')
        ]);

        return redirect()->to('/jurnal');
    }
}
