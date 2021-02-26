<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GejalaModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_gejala')->get();
    }

    public function detail($id_gejala)
    {
        return DB::table('tbl_gejala')->where('id_gejala', $id_gejala)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_gejala')->insert($data);
    }

    public function editData($id_gejala, $data)
    {
        DB::table('tbl_gejala')->where('id_gejala', $id_gejala)->update($data);
    }

    public function deleteData($id_gejala)
    {
        DB::table('tbl_gejala')->where('id_gejala', $id_gejala)->delete();
    }
}
