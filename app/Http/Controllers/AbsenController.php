<?php

namespace App\Http\Controllers;

use App\Models\PelajarModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->PelajarModel = new PelajarModel();
    }
    public function sd()
    {
        return view('sd');
    }
    public function smp()
    {
        return view('smp');
    }
    public function sma()
    {
        return view('sma');
    }
    public function univ()
    {
        return view('univ');
    }
    public function absenUniv(Request $request)
    {
        Request()->validate([
            'class_code' => 'required|min:6|max:6',
        ]);
        $class_codes = Request()->class_code;
        $class_code = $request->session()->get($class_codes);
        $data = [
            'classes' => DB::table('classes')->where('class_code', $class_codes)->get(),
        ];
        if($data != ""){
            return redirect('/absen');
        }else if($data == []){
            return redirect('/univ')->with('message-danger','Maaf kode kelas kamu salah atau tidak cocok dengan kode kelas manapun.');
        }
    }
    public function absen()
    {
        $data = [
            'status' => DB::table('status_absen')->get(),
        ];
        return view('console.absen', $data);
    }
    public function absenNow()
    {
        Request()->validate([
            'id_status_absen' => 'required',
        ]);
        $data = [
            'id_class_absen' => '492e35', // menggunakan value $idClass
            'id_user' => auth()->user()->id,
            'id_status_absen' => Request()->id_status_absen,
            'tgl_absen' => date('l, d M Y'),
        ];
        $this->PelajarModel->absenNow($data);
        return redirect('/class')->with('message-success','Anda berhasil mengisi kehadiran hari ini.');
    }
}
