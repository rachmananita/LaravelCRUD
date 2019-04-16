<?php

namespace App\Http\Controllers;
use App\Buku;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
    	$buku = Buku::all();
    	return view('home', ['buku' => $buku]);
    }

    public function add(Request $request)
    {
      $this->validate($request, [
        'judul' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required',
        'pengarang' => 'required'

      ]);
      $buku = new Buku;
      $buku->judul=$request->input('judul');
      $buku->penerbit=$request->input('penerbit');
      $buku->tahun_terbit=$request->input('tahun_terbit');
      $buku->pengarang=$request->input('pengarang');
      $buku->save();
      return redirect('')->with('info', 'Buku Baru Telah Ditambahkan');
    }

    public function update($id)
    {
    	$buku = Buku::find($id);
    	return view('update', ['buku' => $buku]);
    }

    public function edit(Request $request, $id)
    {
    	$this->validate($request, [
    	'judul' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required',
        'pengarang' => 'required'
    	]);

    	$data = array(
    		'judul' =>$request->input('judul'),
    		'penerbit' =>$request->input('penerbit'),
    		'tahun_terbit' =>$request->input('tahun_terbit'),
    		'pengarang' =>$request->input('pengarang')
    	);

    	Buku::where('id', $id)
    	->update($data);
    	return redirect('/')->with('info', 'Buku Sukses Diupdate!');
    }

    public function view($id)
    {
    	$buku = Buku::find($id);
    	return view('view', ['buku' => $buku]);
    }

    public function delete($id)
    {
    	Buku::where('id', $id)
    	->delete();
    	return redirect('/')->with('info', 'Buku Sukses Dihapus!');
    }
}
