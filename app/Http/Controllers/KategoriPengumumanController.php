<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{

	public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listKategoriPengumuman=KategoriPengumuman::all(); //select*from kategori_pengumuman

    //blade
    return view('kategori_pengumuman.index', compact('listKategoriPengumuman'));
    //return view(view: 'kategori_pengumuman.index')->with('data',$listKategoriPengumuman);
	}
	public function show($id){

		//$KategoriPengumuman=KategoriPengumuman::where('id',$id)->first();
		$listKategoriPengumuman=KategoriPengumuman::find($id);

		return view ('kategori_pengumuman.show', compact('listKategoriPengumuman'));
	}

	public function create(){
		return view('kategori_pengumuman.create');
	}

	public function store(Request $request){
		$input= $request->all();
		
		KategoriPengumuman::create($input);

		return redirect(route('kategori_pengumuman.index'));
	}

	public function edit($id){
		$listKategoriPengumuman=KategoriPengumuman::find($id);

		if(empty($listKategoriPengumuman)){
			return redirect(route('kategori_pengumuman.index'));
		}

		return view('kategori_pengumuman.edit',compact('listKategoriPengumuman'));
	}

	public function update($id, Request $request){
		$listKategoriPengumuman=KategoriPengumuman::find($id);
		$input= $request->all();

		if(empty($listKategoriPengumuman)){
			return redirect(route('kategori_pengumuman.index'));
		}

		$listKategoriPengumuman->update($input);

		return redirect(route('kategori_pengumuman.index'));
	}

	public function destroy($id){
		$listKategoriPengumuman=KategoriPengumuman::find($id);

		if(empty($listKategoriPengumuman)){
			return redirect(route('kategori_pengumuman.index'));
		}

		$listKategoriPengumuman->delete();
		return redirect(route('kategori_pengumuman.index'));
	}

}
