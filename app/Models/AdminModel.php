<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    use HasFactory;

    public function allData(){
        return DB::table('users')
            ->leftJoin('users_roles','users_roles.id_role', '=', 'users.id_role')
            ->where('id', '!=', auth()->user()->id)
            ->get();
    }
    public function detailUser($idUser){
        return DB::table('users')->where('id', $idUser)->first();
    }
    public function editUser($idUser, $data){
        DB::table('users')->where('id', $idUser)->update($data);
    }
    public function deleteUser($idUser){
        DB::table('users')->where('id', $idUser)->delete();
    }
}
