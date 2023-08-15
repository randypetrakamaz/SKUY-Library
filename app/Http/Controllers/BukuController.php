<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Session;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
        $Buku = Buku::all();

        return view('user.pinjam', compact('Buku'));
    }

    //USER

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function pinjam()
    {
        $Buku = Buku::all();

        return view('user.pinjam', compact('Buku'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function kembali()
    {
        return view('user.kembali');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function carapinjam()
    {
        return view('user.carapinjam');
    }

    public function cara()
    {
        return view('user.carapinjam');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function cari()
    {
        $Buku = Buku::all();

        return view('user.cari', compact('Buku'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function cari2()
    {
        $Buku = Buku::all();

        return view('carii', compact('Buku'));
    }

    //ADMIN

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function buku()
    {
        $Buku = Buku::all();

        return view('admin.buku', compact('Buku'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function addbuku()
    {
        return view('admin.addbuku');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function editbuku($id)
    {
        $Buku = Buku::find($id);
        return view('admin.editbuku', compact('Buku'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_process(Request $buku, $id)
    {
        $Buku_lama = Buku::find($id);
        $id = $buku->id;
        $judul = $buku -> judul;
        $jumlah = $buku -> jumlah;
        $bahasa = $buku -> bahasa;
        $jenis = $buku -> jenis;
        $terbit = $buku -> terbit;
        $halaman = $buku -> halaman;
        $sinopsis1 = $buku -> sinopsis1;
        $sinopsis2 = $buku -> sinopsis2;
        if($buku->file('gambar')) {
            if($Buku_lama->gambar){
                Storage::delete($Buku_lama->gambar);
            }
            $gambar = $buku->file('gambar')->store('gambar_buku');
        } else {
            $gambar = $Buku_lama->gambar;
        }
        

        DB::table('buku')->where('id', $id)
                            ->update(['judul' => $judul, 'jumlah' => $jumlah,'bahasa' => $bahasa,'jenis' => $jenis, 'terbit' =>
                             $terbit,'halaman' => $halaman,'sinopsis1' => $sinopsis1,'sinopsis2' => $sinopsis2, 'gambar' => $gambar,]);
        Session::flash('success', 'Artikel berhasil diedit');
        return redirect('/dashboard/buku');
    }

    public function delete($id)
    {
        // //menghapus buku dengan ID sesuai pada URL
        // DB::table('buku')->where('id', $id)
        //                     ->delete();
 
        // //membuat pesan yang akan ditampilkan ketika data berhasil dihapus
        // Session::flash('success', 'Artikel berhasil dihapus');
        // return redirect('/buku');

        //Menghapus data berita
        $Buku = Buku::find($id);
        if($Buku -> gambar){
            Storage::delete($Buku -> gambar);
        }
        $Buku->delete();
        return redirect('/dashboard/buku')->with('success', 'Data berhasil dihapus!');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('gambar')->store('gambar_buku');

        $store = new Buku;
        $store->judul = $request -> judul;
        $store->jumlah = $request -> jumlah;
        $store->bahasa = $request -> bahasa;
        $store->jenis = $request -> jenis;
        $store->terbit = $request -> terbit;
        $store->halaman = $request -> halaman;
        $store->sinopsis1 = $request -> sinopsis1;
        $store->sinopsis2 = $request -> sinopsis2;
        $store->gambar = $request->file('gambar')->store('gambar_buku');
        $store->save();
        return redirect('/dashboard/buku')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Buku::find($id);

        return view('user.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $store = Buku::find($id);
        if ($store->jumlah > 0) {
            $sisa = $store->jumlah - 1;
            $store->jumlah = $sisa;
            $store->save();
        }

        
        return redirect()->route('buku.show',$id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $buku
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $buku, $id)
    {
        $Buku_lama = Buku::find($id);
        $id = $buku->id;
        $judul = $buku -> judul;
        $jumlah = $buku -> jumlah;
        $bahasa = $buku -> bahasa;
        $jenis = $buku -> jenis;
        $terbit = $buku -> terbit;
        $halaman = $buku -> halaman;
        $sinopsis1 = $buku -> sinopsis1;
        $sinopsis2 = $buku -> sinopsis2;
        if($buku->file('gambar')) {
            if($Buku_lama->gambar){
                Storage::delete($Buku_lama->gambar);
            }
            $gambar = $buku->file('gambar')->store('gambar_buku');
        } else {
            $gambar = $Buku_lama->gambar;
        }
        

        DB::table('buku')->where('id', $id)
                            ->update(['judul' => $judul, 'jumlah' => $jumlah,'bahasa' => $bahasa,'jenis' => $jenis, 'terbit' =>
                             $terbit,'halaman' => $halaman,'sinopsis1' => $sinopsis1,'sinopsis2' => $sinopsis2, 'gambar' => $gambar,]);
        Session::flash('success', 'Artikel berhasil diedit');
        return redirect('/dashboard/buku')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dat = Buku::find($id);

        return view('carii', compact('dat'));
    }


}
