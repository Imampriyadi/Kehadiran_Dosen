<?php

namespace App\Controllers;

use App\Models\DosenModel;
use CodeIgniter\Controller;

class Dosen extends Controller
{
    public function index()
    {
        $dosenModel = new DosenModel();
        $data['DataDosen'] = $dosenModel->findAll();

        echo view('tampilan', $data);
    }

    public function createForm()
    {
        return view('tambah_dosen');
    }

    public function store()
    {
        $model = new DosenModel();

        $data = [
            'kode_dosen' => $this->request->getPost('kode_dosen'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'nama_matkul' => $this->request->getPost('nama_matkul'),
        ];

        if ($model->addDosen($data)) {
            return redirect()->to('/dosen')->with('message', 'Data dosen berhasil ditambahkan');
        } else {
            return redirect()->back()->with('message', 'Gagal menambahkan data dosen');
        }
    }
}
