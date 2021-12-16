<?php

namespace App\Http\Controllers;

use App\Models\PengajarModel;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->PengajarModel = new PengajarModel();
    }
    public function insertClass()
    {
        Request()->validate([
            'name_class' => 'required|min:2|max:150',
            'id_class_type' => 'required',
        ]);
        $codes = Request()->name_class;
        $code = md5($codes);
        $num = 6;
        $endCode = substr($code, 0, $num);
        $data = [
            'name_class' => Request()->name_class,
            'id_class_type' => Request()->id_class_type,
            'id_user' => auth()->user()->id,
            'class_code' => $endCode,
            'date_created' => date('l, d M Y'),
        ];
        $this->PengajarModel->insertClass($data);
        return redirect()->route('console')->with('message-success','kelas baru berhasil ditambahkan.');
    }
    public function editClass($idClass)
    {
        Request()->validate([
            'name_class' => 'required|min:2|max:150',
            'id_class_type' => 'required',
        ]);
        $data = [
            'name_class' => Request()->name_class,
            'id_class_type' => Request()->id_class_type,
        ];
        $this->PengajarModel->editClass($idClass, $data);
        return redirect()->route('console')->with('message-success','Data kelas berhasil diubah.');
    }
    public function deleteClass($idClass)
    {
        $this->PengajarModel->deleteClass($idClass);
        return redirect()->route('console')->with('message-success','Data kelas berhasil dihapus.');
    }
}
