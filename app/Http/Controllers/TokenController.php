<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    //
    public function auth()
    {
        $data = DB::table('tbl_m_user')->get();
        return response()->json([
            'data' => $data
        ]);
    }
}
