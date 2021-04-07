<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $alluser = User::all();
        return view('admin.User.User',compact('alluser'));
    }
   public function create(Request $request)
   { 

       User::create([
           'name'    => $request->name,
           'email'  => $request->email,
           'password'   => Hash::make($request->password),
           'status'    => '1',
       ]);
       Alert::success('Success', 'Success');
       return redirect()->back();
}

   public function delete($id)
   {

       User::where('id', $id)->delete();

       Alert::warning('Warning', 'Apakah anda ingin menghapus file?');

   return redirect()->back();
} 
public function update($id){
    $alluser['alluser'] = User::find($id);

    return view('admin.User.update',$alluser);

} 
public function aksi_update(Request $request, $id){

    DB::table('users')->where('id', $id)->update([
        'name'      => $request->name,
        'email'     => $request->email,
        'password'  => $request->password,
        'status'    => $request->status,
        ]);

    Alert::success('Success', 'User sudah di update');

    return redirect()->route('alluser');
}
}