<?php

namespace App\Http\Controllers;

use App\GejalaModel;
use Illuminate\Http\Request;

class GejalaModelController extends Controller
{
    public function index()
    {
        return response()->json(GejalaModel::all(), 200);
    }

    public function addData(request $request)
    {
        $gejalaModel = new GejalaModel;
        $gejalaModel->nama_gejala = $request->nama_gejala;

        $gejalaModel->save();
        return "Data gejala berhasil masuk";
    }

    public function editData(request $request, $id_gejala)
    {
        $nama_gejala = $request->nama_gejala;

        $gejalaModel = GejalaModel::find($id_gejala);
        $gejalaModel->nama_gejala = $nama_gejala;

        $gejalaModel->save();
        return "Data gejala berhasil diupdate";
    }

    public function deleteData($id_gejala)
    {
        $gejalaModel = GejalaModel::find($id_gejala);

        $gejalaModel->delete();
        return "Data gejala berhasil dihapus";
    }
}
