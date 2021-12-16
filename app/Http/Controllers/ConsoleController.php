<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->AdminModel = new AdminModel();
    }
    public function index()
    {
        $data = [
            'users' => $this->AdminModel->allData(),
            'role' => DB::table('users_roles')->get(),
            'class_types' => DB::table('class_types')->get(),
            'classes' => DB::table('classes')
                ->join('class_types','class_types.id_class_type', '=', 'classes.id_class_type')
                ->where('id_user', auth()->user()->id)
                ->get(),
            'absen' => DB::table('absen')
                ->join('classes','classes.id_class', '=', 'absen.id_class_absen')
                ->join('status_absen','status_absen.id_status_absen', '=', 'absen.id_status_absen')
                ->join('users','users.id', '=', 'absen.id_user')
                ->where('classes.id_user', auth()->user()->id)
                ->get(),
        ];
        return view('console.dash', $data);
    }
    public function editUser($idUser)
    {
        Request()->validate([
            'id_role' => 'required',
        ]);
        $data = [
            'id_role' => Request()->id_role,
        ];
        $this->AdminModel->editUser($idUser, $data);
        return redirect()->route('console')->with('message-success','Data pengguna berhasil diubah.');
    }
    public function deleteUser($idUser){
        $this->AdminModel->deleteUser($idUser);
        return redirect()->route('console')->with('message-success','Data pengguna berhasil dihapus.');
    }
}
