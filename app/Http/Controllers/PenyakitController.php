<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenyakitModel;

class PenyakitController extends Controller
{
    public function __construct()
    {
        $this->PenyakitModel = new PenyakitModel();
    }

    public function index()
    {
        $data = [
            'penyakit' => $this->PenyakitModel->allData(),
        ];
        return view('v_penyakit', $data);
    }

    public function detail($id_penyakit)
    {
        if (!$this->PenyakitModel->detail($id_penyakit)) {
            abort(404);
        }
        $data =
            [
                'penyakit' => $this->PenyakitModel->detail($id_penyakit),
            ];
        return view('v_detailpenyakit', $data);
    }

    public function add()
    {
        return view('v_addpenyakit');
    }

    public function insert()
    {
        Request()->validate(
            [
                'nama_penyakit' => 'required|unique:tbl_penyakit,nama_penyakit|min:4',
                'deskripsi_penyakit' => 'required|unique:tbl_penyakit,deskripsi_penyakit|min:4',
                'solusi_penyakit' => 'required|unique:tbl_penyakit,solusi_penyakit|min:4'
            ],
            [
                'nama_penyakit.required' => 'Nama penyakit wajib diisi',
                'nama_penyakit.unique' => 'Nama penyakit sudah ada (duplikat)',
                'nama_penyakit.min' => 'Nama penyakit minimal 4 huruf',

                'deskripsi_penyakit.required' => 'Deskripsi penyakit wajib diisi',
                'deskripsi_penyakit.unique' => 'Deskripsi penyakit sudah ada (duplikat)',
                'deskripsi_penyakit.min' => 'Deskripsi penyakit minimal 4 huruf',

                'solusi_penyakit.required' => 'Solusi penyakit wajib diisi',
                'solusi_penyakit.unique' => 'Solusi penyakit sudah ada (duplikat)',
                'solusi_penyakit.min' => 'Solusi penyakit minimal 4 huruf'
            ]
        );

        $data =
            [
                'nama_penyakit' => Request()->nama_penyakit,
                'deskripsi_penyakit' => Request()->deskripsi_penyakit,
                'solusi_penyakit' => Request()->solusi_penyakit,
            ];

        $this->PenyakitModel->addData($data);
        return redirect()->route('penyakit')->with('pesan', 'Data penyakit berhasil disimpan');
    }

    public function edit($id_penyakit)
    {
        if (!$this->PenyakitModel->detail($id_penyakit)) {
            abort(404);
        };
        $data = [
            'penyakit' => $this->PenyakitModel->detail($id_penyakit),
        ];
        return view('v_editpenyakit', $data);
    }

    public function update($id_penyakit)
    {
        Request()->validate(
            [
                'nama_penyakit' => 'required|min:4',
                'deskripsi_penyakit' => 'required|min:4',
                'solusi_penyakit' => 'required|min:4'
            ],
            [
                'nama_penyakit.required' => 'Nama penyakit wajib diisi',
                // 'nama_penyakit.unique' => 'Nama penyakit sudah ada (duplikat)',
                'nama_penyakit.min' => 'Nama penyakit minimal 4 huruf',

                'deskripsi_penyakit.required' => 'Deskripsi penyakit wajib diisi',
                // 'deskripsi_penyakit.unique' => 'Deskripsi penyakit sudah ada (duplikat)',
                'deskripsi_penyakit.min' => 'Deskripsi penyakit minimal 4 huruf',

                'solusi_penyakit.required' => 'Solusi penyakit wajib diisi',
                // 'solusi_penyakit.unique' => 'Solusi penyakit sudah ada (duplikat)',
                'solusi_penyakit.min' => 'Solusi penyakit minimal 4 huruf'
            ]
        );

        $data =
            [
                'nama_penyakit' => Request()->nama_penyakit,
                'deskripsi_penyakit' => Request()->deskripsi_penyakit,
                'solusi_penyakit' => Request()->solusi_penyakit,
            ];

        $this->PenyakitModel->editData($id_penyakit, $data);
        return redirect()->route('penyakit')->with('pesan', 'Data penyakit berhasil diperbaharui');
    }
}
