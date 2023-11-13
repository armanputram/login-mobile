<?php

namespace App\Http\Controllers;

use App\Models\Bibliografikategori;
use Illuminate\Http\Request;

class BibliografikategoriController extends Controller
{
    public function index()
    {
        $bks = Bibliografikategori::latest()->paginate(5);

        return view('admin.bibliografi_kategori.index',compact('bks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.bibliografi_kategori.create');
    }
    public function store(Request $request)
    {
        
        $request->validate([
            'deskripsi' => 'required|max:100',
        ]);

        Bibliografikategori::create($request->all());

        return redirect()->route('bibliografikat.index')
            ->with('success','Kategori '.$request->deskripsi.' telah tersimpan.');
    }
    public function show($id)
    {
        $bk = Bibliografikategori::find($id);
        return view('admin.bibliografi_kategori.show',compact('bk'));
    }
    public function edit($id)
    {
        $bk= Bibliografikategori::find($id);
        return view('admin.bibliografi_kategori.edit',compact('bk'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'deskripsi' => 'required|max:100',
        ]);

        $bk = Bibliografikategori::find($id);
        $bk->update($request->all());

        return redirect()->route('bibliografikat.index')
            ->with('success','Kategori Bibliografi telah diperbaharui');
    }
    public function destroy($id)
    {
        $bk = Bibliografikategori::find($id);
        $bk->delete();

        return redirect()->route('bibliografikat.index')
            ->with('success','Kategori Bibliografi telah dihapus');
    }
}
