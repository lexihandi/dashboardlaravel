<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PenyakitModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_penyakit')->get();
    }

    public function detail($id_penyakit)
    {
        return DB::table('tbl_penyakit')->where('id_penyakit', $id_penyakit)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_penyakit')->insert($data);
    }

    public function editData($id_penyakit, $data)
    {
        DB::table('tbl_penyakit')->where('id_penyakit', $id_penyakit)->update($data);
    }

    public function deleteData($id_penyakit)
    {
        DB::table('tbl_penyakit')->where('id_penyakit', $id_penyakit)->delete();
    }
}
