<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\data_busana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class busanaController extends Controller
{
    public function index()
    {
        $data_busana=data_busana::all();
        return view('admin.busana.databusana',compact('data_busana'));
    }
    public function create(Request $request)
    { 
        $filetype  = '|file|image|mimes:jpeg,png,jpg|max:2048';
        $filename  = $request->file('paket_busana');
        $paket_busana = time()."".$filename->getClientOriginalName();
        $fileloc   = '../public/uploads/image/paket_busana/';
        $filename->move($fileloc,$paket_busana);
        
        data_busana::create([
            'paket_busana' => $paket_busana,
            'keterangan'   => $request->keterangan,
        ]);
        Alert::success('Success', 'Success');
        return redirect()->back();
}
public function delete($id)
{

    data_busana::where('id', $id)->delete();

    Alert::warning('Warning', 'Apakah anda ingin menghapus file?');

return redirect()->back();
}

public function update($id){
    $data_busana['data_busana'] = data_busanan::find($id);

    return view('admin.busana.update', $data_busana);
} public function aksi_update(Request $request, $id){

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
