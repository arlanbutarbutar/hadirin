<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PelajarModel extends Model
{
    use HasFactory;
    
    public function absenNow($data){
        DB::table('absen')->insert($data);
    }
}
