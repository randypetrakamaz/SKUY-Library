<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Buku;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Tampilkan berita ke Beranda
        $beritas = Berita::all();
        return view('user.beranda', compact('beritas'));
    }

    public function showAll()
    {
        //Tampilkan semua list berita ke Berita
        $beritas = Berita::all();
        return view('user.berita', compact('beritas'));
    }

    public function showSingle($id)
    {
        //Tampilkan berita dipilih ke detail_berita
        $beritas = Berita::find($id);
        return view('user.detail_berita', compact('beritas'));
    }

    public function showToAdminBerita()
    {
        //Tampilkan list berita dipilih ke dashboard Berita
        $beritas = Berita::all();
        return view('admin.adminberita', compact('beritas'));
    }

    public function showToDashboard()
    {
        //Tampilkan list berita dipilih ke dashboard Berita
        $beritas = Berita::all();
        $Buku = Buku::all();
        return view('admin.dashboard', compact('beritas', 'Buku'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addberita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Menyimpan data berita dari inputan user
        $validasiData = $request->validate([
            'title' => 'required|max:35',
            'image' => 'required|image',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validasiData['image'] = $request->file('image')->store('img-berita');
        }

        Berita::create($validasiData);
        // return redirect()->route('news.showToAdminBerita');
        return redirect('/dashboard/berita')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Menuju halaman edit berita
        $berita = Berita::find($id);
        return view('admin.editberita', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Mengubah data berita
        $validasiData = $request->validate([
            'title' => 'required|max:35',
            'image' => 'required|image',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validasiData['image'] = $request->file('image')->store('img-berita');
        }

        Berita::where('id', $id)->update($validasiData);
        // return redirect()->route('news.showToAdminBerita');
        return redirect('/dashboard/berita')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Menghapus data berita
        $berita = Berita::find($id);
        if ($berita->image) {
            Storage::delete($berita->image);
        }
        $berita->delete();
        return redirect('/dashboard/berita')->with('success', 'Data berhasil dihapus!');
    }
}