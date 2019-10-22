<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\Models\Admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\BackendController;
use Auth;

class AdminController extends BackendController
{
    public function __construct()
    {
    	parent::__construct();
    	$this->view .= "manajemen-user.admin.";
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'is_super' => ['required'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    public function getCreate()
    {
    	return $this->makeView("create");
    }

    public function postCreate(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Admins::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'is_super' => $request['is_super'],
            'password' => Hash::make($request['password'])
        ]);

        return redirect()->route('user-management')->with('success', 'Admin baru berhasil ditambahkan');
    }

    public function getEdit($id)
    {
    	$data = Admins::findOrFail($id);
        
        if (Auth::guard('admin')->user()->id == $data->id) {
            return redirect()->route('user-management')->with('danger', 'Tidak bisa mengubah admin yang sedang aktif saat ini');
        }

    	return $this->makeView("edit", [
    		"admin" => $data,
    	]);
    }

    public function postEdit(Request $request, $id)
    {
    	$data = Admins::findOrFail($id);

    	$password;
    	if (!empty($request['password'])) {
    		$password = Hash::make($request['password']);
    	} else {
    		$password = $data->password;
    	}

    	$data->update([
    		'name' => $request['name'],
    		'email' => $request['email'],
    		'is_super' => $request['is_super'],
    		'password' => $password
    	]);

    	return redirect()->route('user-management')->with('success', 'Data Admin berhasil diubah');
    }

    public function getDelete(Request $request)
    {
    	if ($request->ajax()) {
            $data = Admins::findOrFail($request->id);
            if (Auth::guard('admin')->user()->id == $data->id) {
                return response()->json([
                    'status' => false,
                    'message' => 'Tidak bisa menghapus admin yang sedang aktif saat ini',
                ]);
            }

            $result = $data->delete();
            if ($result == 1) {
                $status = true;
                $message = 'Data berhasil dihapus';
            } else {
                $status = false;
                $message = 'Data gagal dihapus';
            }

            return response()->json([
                'status' => $status,
                'message' => $message,
            ]); 
        }
    }

    public function getActivate($id)
    {
        $data = Admins::findOrFail($id);
        if (Auth::guard("admin")->user()->id == $data->id) {
            return redirect()->back()->with('danger', 'Tidak bisa mengaktifkan admin yang sedang masuk saat ini');
        }

        $data->is_active = true;
        $data->update();

        return redirect()->route('user-management')->with('success', 'Data Admin berhasil diaktifkan');
    }

    public function getDeactivate($id)
    {
        $data = Admins::findOrFail($id);
        if (Auth::guard("admin")->user()->id == $data->id) {
            return redirect()->back()->with('danger', 'Tidak bisa menonaktifkan admin yang sedang masuk saat ini');
        }

        $data->is_active = false;
        $data->update();

        return redirect()->route('user-management')->with('success', 'Data Admin berhasil dinonaktifkan');
    }
}
