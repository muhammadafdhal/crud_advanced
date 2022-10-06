<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\data_user;

class DataUserController extends Controller
{
    //

    public function index()
    {
        $data = data_user::get();
        if(request()->ajax())
        {
            return datatables()->of($data)->make(true);
        }
        return view('users.index');
    }
}
