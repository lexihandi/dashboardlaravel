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

    public function detail($id_gejala)
    {
        if (!$this->GejalaModel->detail($id_gejala)) {
            abort(404);
        }
        $data =
            [
                'gejala' => $this->GejalaModel->detail($id_gejala),
            ];
        return $data;
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

        $data =
            [
                'nama_gejala' => Request()->nama_gejala,
            ];

        $this->GejalaModel->addData($data);
        return redirect()->route('gejala')->with('pesan', 'Data gejala berhasil disimpan');
    }

    public function edit($id_gejala)
    {
        if (!$this->GejalaModel->detail($id_gejala)) {
            abort(404);
        };
        $data = [
            'gejala' => $this->GejalaModel->detail($id_gejala),
        ];
        return view('v_editgejala', $data);
    }

    public function update($id_gejala)
    {
        Request()->validate(
            [
                'nama_gejala' => 'required|min:4'
            ],
            [
                'nama_gejala.required' => 'Nama Gejala wajib diisi',
                // 'nama_gejala.unique' => 'Nama gejala sudah ada (duplikat)',
                'nama_gejala.min' => 'Nama gejala kurang dari 4 huruf'
            ]
        );

        $data =
            [
                'nama_gejala' => Request()->nama_gejala,
            ];

        $this->GejalaModel->editData($id_gejala, $data);
        return redirect()->route('gejala')->with('pesan', 'Data gejala berhasil diperbaharui');
    }

    public function delete($id_gejala)
    {
        $this->GejalaModel->deleteData($id_gejala);
        return redirect()->route('gejala')->with('pesan', 'Data gejala berhasil dihapus');
    }
}
