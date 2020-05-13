<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GameController extends Controller
{
     public function index()
    {
    	return view('tambah_game');
    }

    public function insert(Request $request)
    {

        $upload = "N";
        if ($request->hasFile('game') && $request->hasFile('gambar')) {

             $destination = "temp";
             $filename = $request->file('game');
             $filename2 = $request->file('gambar');
             $filename->move($destination, $filename->getClientOriginalName());
             $filename2->move($destination, $filename2->getClientOriginalName());
             $upload = "Y";
        }

        if ($upload == "Y") {
            $upload = new Game;
            $upload->nama = $request->nama;
            $upload->game = $filename->getClientOriginalName();
            $upload->gambar = $filename2->getClientOriginalName();
            $upload->save();


        }

    	return redirect('/game');
    }






    public function cari(Request $request)
    {
        // menangkap data pencarian
        // $cari = $request->cari;
        $input = $request->all();
        $cari = $input['search'];

        // mengambil data dari table pegawai sesuai pencarian data
        $game = \DB::table('t_game')
        ->where('nama','like',"%".$cari."%")
        ->paginate(20);
     
            // mengirim data pegawai ke view index
        return view('game',['game' => $game]);
 
    }
}
