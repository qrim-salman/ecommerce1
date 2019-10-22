<?php

namespace App\Http\Controllers\Backend\UserManagement;

use App\User;
use App\Models\Admins;
use Illuminate\Http\Request;
use App\Http\Controllers\BackendController;
use DataTables;

class UserManagementController extends BackendController
{
    public function __construct()
    {
    	parent::__construct();
    	$this->view .= "manajemen-user.";
    }

    public function getIndex()
    {
    	return $this->makeView("index");
    }

    public function getAdmin(Request $request)
    {
    	if ($request->ajax()) {
    		$dataAdmin = Admins::latest()->get();
    		return DataTables::of($dataAdmin)
    				->addIndexColumn()
    				->addColumn('action', function($row) {
    					$btnActivation = '';
                        if ($row->is_active) {
                            $btnActivation = '<a href="'.route('admin.deactivate', $row->id).'" class="deactivate btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="Nonaktifkan"><i class="mdi mdi-close"></i></a>';
                        } else {
                            $btnActivation = '<a href="'.route('admin.activate', $row->id).'" class="activate btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Aktifkan"><i class="mdi mdi-check"></i></a>';
                        }

                        $btnEdit = '&nbsp;<a href="'.route('admin.edit', $row->id).'" class="edit btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Ubah"><i class="mdi mdi-pencil"></i></a>';

                        $btnDelete = '<a href="" data-id="'.$row->id.'" class="delete btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="mdi mdi-delete"></i></a>';

    					return $btnActivation."&nbsp;".$btnEdit."&nbsp;".$btnDelete;
    				})
    				->rawColumns(['action'])
    				->make(true);
    	}

    	return $this->makeView("index");
    }

    public function getCustomer(Request $request)
    {
    	if ($request->ajax()) {
    		$dataCustomer = User::latest()->get();
    		return DataTables::of($dataCustomer)
    				->addIndexColumn()
    				->addColumn('action', function($row) {
    					$btnDetail = '<a href="" class="edit btn btn-info btn-sm" data-toggle="tooltip" data-placement="bottom" title="Detail"><i class="mdi mdi-account-card-details"></i></a>';

                        $btnActivation = '';
                        if ($row->is_active) {
                            $btnActivation = '<a href="" class="deactivate btn btn-warning btn-sm" data-toggle="tooltip" data-placement="bottom" title="Nonaktifkan"><i class="mdi mdi-close"></i></a>';
                        } else {
                            $btnActivation = '<a href="" class="activate btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="Aktifkan"><i class="mdi mdi-check"></i></a>';
                        }

    					return $btnDetail."&nbsp;".$btnActivation;
    				})
    				->rawColumns(['action'])
    				->make(true);
    	}

    	return $this->makeView("index");
    }
}
