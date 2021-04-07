<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\data_pengantin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class pengantinController extends Controller
{
    public function index()
    {
        $datapengantin=data_pengantin::all();

        return view('admin.pengantin.pengantin',compact('datapengantin') );
    }
   
    public function create(Request $request)
    { 

        data_pengantin::create([
            'nama'    => $request->nama,
            'alamat'  => $request->alamat,
            'Email'   => $request->Email,
            'nohp'    => $request->nohp,
            'tanggal'  => $request->tanggal,
        ]);
        Alert::success('Success', 'Success');
        return redirect()->back();
}

    public function delete($id)
    {

        data_pengantin::where('id', $id)->delete();

        Alert::warning('Warning', 'Apakah anda ingin menghapus file?');

    return redirect()->back();
}

    public function update($id){
        $data_pengantin['data_pengantin'] = data_pengantin::find($id);

        return view('admin.pengantin.update', $data_pengantin);

} 
    public function aksi_update(Request $request, $id){

        DB::table('data_pengantin')->where('id', $id)->update([
                'nama'    => $request->nama,
                'alamat'  => $request->alamat,
                'Email'   => $request->Email,
                'nohp'    => $request->nohp,
                'tanggal'  => $request->tanggal,
            ]);

        Alert::success('Success', 'Data pengantin sudah di update');

        return redirect()->route('data_pengantin');
    }
}
