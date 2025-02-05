<?php

namespace App\Controllers;
use App\Models\DataPendonorModel;

class Home extends BaseController
{
    public $DataPendonorModel;

    public function __construct()
    {
        $this->DataPendonorModel = new DataPendonorModel();
    }

    public function index(): string
    {
        return view('beranda');
    }

    public function kebutuhan(){
        return view('kebutuhan');
    }

    public function apresiasi(){

        $data = [
            'data_pendonor' => $this->DataPendonorModel->findAll()
        ];
        return view('apresiasi', $data);
    }

    public function daftar()
    {
        $data = [
            'tanggal' => date("l, d M Y"),
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'berat_badan' => $this->request->getVar('berat_badan'),
            'golongan_darah' => $this->request->getVar('golongan_darah')
        ];

        // dd($data);

        $this->DataPendonorModel->insert($data); // Insert data dari $data ke database

        return redirect()->to('/kebutuhan'); // kembalikan ke routes /kebutuhan
    }
}
