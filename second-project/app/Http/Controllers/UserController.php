<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysql_xdevapi\Result;

class UserController extends Controller
{
    protected $fullName;

    public function fullname(Request $request)
    {
        $this->fullName = $request->first_name.' '. $request->last_name;
        return view('test', ['result'=>$this->fullName]);
    }
}
