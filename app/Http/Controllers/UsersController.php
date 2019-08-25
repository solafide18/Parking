<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Carbon\Carbon;

class UsersController extends Controller
{
    //
    public function get($id)
    {
        $data = DB::table('tbl_m_user')->get()->where('kode_petugas',$id)->first();
        return response()->json([
            'status_code' => '200',
            'status_desc' => 'Success',
            'data' => $data
        ]);
    }
    public function post(Request $request)
    {
        $user = $request->user;
        DB::table('tbl_m_user')->insert(
            [
                'id_petugas'=>Uuid::uuid4()->toString(),
                'kode_petugas'=>$user['kode_petugas'],
                'nama_petugas'=>$user['nama_petugas'],
                'phone_number'=>$user['phone_number'],
                'email'=>$user['email'],
                'password'=>$user['password'],
                'address'=>$user['address'],
                'created_by'=>$user['created_by'],
                'created_date'=>Carbon::now()->toDateTimeString(),
                'active'=>true,
            ]
        );

        $data = DB::table('tbl_m_user')->get()->where('kode_petugas',$user['kode_petugas'])->first();
        return response()->json([
            'status_code' => '200', 
            'status_desc' => 'Success',
            'data' => $data
        ]);
    }
    public function put()
    {
        $data = DB::table('tbl_m_user')->get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function delete()
    {
        $data = DB::table('tbl_m_user')->get();
        return response()->json([
            'data' => $data
        ]);
    }
}
