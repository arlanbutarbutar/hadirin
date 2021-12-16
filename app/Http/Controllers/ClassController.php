<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'absen' => DB::table('absen')
                ->join('classes','classes.class_code', '=', 'absen.id_class_absen')
                ->join('status_absen','status_absen.id_status_absen', '=', 'absen.id_status_absen')
                ->where('absen.id_user', auth()->user()->id)
                ->get(),
        ];
        return view('console.kelas', $data);
    }
}
