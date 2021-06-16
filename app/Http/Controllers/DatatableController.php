<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatatableController extends Controller
{
    public function getBasic()
    {
        return view('datatable');
    }

    public function getBasicData()
    {
        $users = User::select('id','name','first_name','last_name','email','created_at','updated_at');

        return DataTables::of($users)
            ->editColumn('created_at', Carbon::parse()->toDateTimeString())
            ->editColumn('updated_at', Carbon::parse()->toDateTimeString())
            ->make();
    }

}

