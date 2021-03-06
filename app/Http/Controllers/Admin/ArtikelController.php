<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ArtikelController extends Controller
{
    public function index(){
        $artikel = artikel::all();
        

       return view('admin.artikel.artikel' , compact ('artikel'));
    } 
    public function create(Request $request){ 

        $filetype  = '|file|image|mimes:jpeg,png,jpg|max:2048';
        $filename  = $request->file('gambar');
        $nama_file = time()."".$filename->getClientOriginalName();
        $fileloc   = '../public/uploads/image/artikel/';
        $filename->move($fileloc,$nama_file);

        artikel::create([
            'judul'    => $request->judul,
            'artikel'  => $request->artikel,
            'gambar'   => $nama_file,
        ]);
        Alert::success('Success', 'Success');
        return redirect()->back();
    }

    public function delete($id){
        $file = artikel::where('id', $id)->first();
        File::delete(public_path('/uploads/image/artikel/').$file->gambar);
    
        artikel::where('id', $id)->delete();

      Alert::warning('Warning', 'Apakah anda ingin menghapus file?');
        return redirect()->back();
    }
    public function update($id){
        $artikel['artikel'] = artikel::find($id);

        return view('admin.artikel.update', $artikel);
    }
    public function aksi_update(Request $request, $id){
        $file = artikel::select('gambar')->where('id', $id)->first();
        File::delete(public_path('/uploads/image/artikel/').$file->gambar);

        $filetype = '|file|image|mimes:jpeg,png,jpg|max:2048';
        $filename = $request->file('gambar');
        $nama_file = time()."".$filename->getClientOriginalName();
        $fileloc   = '../public/uploads/image/artikel/';
        $filename->move($fileloc,$nama_file);

        DB::table('article')->where('id', $id)->update([
            'judul'       => $request->judul,
            'artikel'     => $request->artikel,
            'gambar'      => $nama_file
            ]);

        Alert::success('Success', 'Artikel sudah di update');

            return redirect()->route('artikel');
        }
    }