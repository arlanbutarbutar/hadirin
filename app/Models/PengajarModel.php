<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PengajarModel extends Model
{
    use HasFactory;
    
    public function insertClass($data){
        DB::table('classes')->insert($data);
    }
    public function editClass($idClass, $data){
        DB::table('classes')->where('id_class', $idClass)->update($data);
    }
    public function deleteClass($idClass){
        DB::table('classes')->where('id_class', $idClass)->delete();
    }
}
