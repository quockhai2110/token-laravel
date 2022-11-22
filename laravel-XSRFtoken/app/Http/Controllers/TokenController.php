<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokenController extends Controller
{
    //
    public function tokenform(Request $request)
    {
        return view('token_form');
    }

    public function send_data(Request $request)
    {
        $table_name = $request->input('table_name');
        $detail = DB::table($table_name)->first();
        dd($detail);
    }
}
