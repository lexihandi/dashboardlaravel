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
}
