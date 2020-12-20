<?php

namespace App\Http\Controllers;

use App\Model\M_Jumlah_Kupon;
use App\Model\M_Kupon;
use App\Model\M_Pelanggan;
use Illuminate\Http\Request;

class C_Kupon extends Controller
{
    public function index()
    {
        $kupon = M_Jumlah_Kupon::orderBy('jumlah', 'desc')->get();

        $index = 1;

        return view('index', compact('kupon', 'index'));
    }

    public function add()
    {
        return view('add');
    }

    public function tukar_view($id)
    {
        $id_game = $id;
        return view('tukar', compact('id_game'));
    }

    public function store(Request $request)
    {

        $check_pelanggan = M_Pelanggan::where('id_game', $request->game)->first();

        if (empty($check_pelanggan->id_game)) {
            //new pelanggan
            $pelanggan =  new M_Pelanggan;
            $pelanggan->id_game = $request->game;
            $pelanggan->save();

            //new add to kupon
            $kupon = new M_Kupon;
            $kupon->game = $request->game;
            $kupon->jumlah_kupon    =   $request->jumlah_kupon;
            $kupon->tipe = 'tambah';
            $kupon->save();

            $jumlah = new M_Jumlah_Kupon;
            $jumlah->id_game = $request->game;
            $jumlah->jumlah = $jumlah->jumlah + $request->jumlah_kupon;
            $jumlah->save();
        } else {
            //new add to kupon
            $kupon = new M_Kupon;
            $kupon->game = $request->game;
            $kupon->jumlah_kupon    =   $request->jumlah_kupon;
            $kupon->tipe = 'tambah';
            $kupon->save();

            $jumlah = M_Jumlah_Kupon::where('id_game', $request->game)->first();
            $jumlah->jumlah = $jumlah->jumlah + $request->jumlah_kupon;
            $jumlah->save();
        }

        return redirect('/');
    }


    public function tukar_kupon(Request $request)
    {
        //new add to kupon
        $kupon = new M_Kupon;
        $kupon->game = $request->game;
        $kupon->jumlah_kupon    =   $request->jumlah_kupon;
        $kupon->tipe = 'tukar';
        $kupon->save();

        $jumlah = M_Jumlah_Kupon::where('id_game', $request->game)->first();
        $jumlah->jumlah = $jumlah->jumlah - $request->jumlah_kupon;
        $jumlah->save();

        return redirect('/');
    }
}
