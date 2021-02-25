<?php

namespace App\Http\Controllers;

use App\Models\GejalaModel;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function __construct()
    {
        $this->GejalaModel = new GejalaModel();
    }

    public function index()
    {
        $data = [
            'gejala' => $this->GejalaModel->allData(),
        ];
        return view('v_gejala', $data);
    }

    public function add()
    {
        return view('v_addgejala');
    }

    public function insert()
    {
        Request()->validate(
            [
                'nama_gejala' => 'required|unique:tbl_gejala,nama_gejala|min:4'
            ],
            [
                'nama_gejala.required' => 'Nama Gejala wajib diisi',
                'nama_gejala.unique' => 'Nama gejala sudah ada (duplikat)',
                'nama_gejala.min' => 'Nama gejala kurang dari 4 huruf'
            ]
        );
    }
}
