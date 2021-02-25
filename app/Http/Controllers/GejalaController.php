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
}
