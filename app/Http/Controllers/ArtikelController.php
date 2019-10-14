<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
	public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listArtikel=Artikel::all(); //select*from artikel

    //blade
    return view('artikel.index', compact('listArtikel'));
    //return view(view: 'artikel.index')->with('data',$listArtikel);
	}
	public function show($id){

		//$Artikel=Artikel::where('id',$id)->first();
		$listArtikel=Artikel::find($id);

		return view ('artikel.show', compact('listArtikel'));
	}

	public function create(){

		$KategoriArtikel= KategoriArtikel::pluck('nama','id');
	
		return view('artikel.create',compact('KategoriArtikel'));
	}

	public function store(Request $request){
		$input=$request->all();

		Artikel::create($input);

		return redirect(route('artikel.index'));
	}

	public function edit($id){
		$listArtikel=Artikel::find($id);

		if(empty($listArtikel)){
			return redirect(route('artikel.index'));
		}
		$KategoriArtikel= KategoriArtikel::pluck('nama','id');
		return view('artikel.edit',compact('listArtikel','KategoriArtikel'));
	}

	public function update($id, Request $request){
		$listArtikel=Artikel::find($id);
		$input= $request->all();

		if(empty($listArtikel)){
			return redirect(route('artikel.index'));
		}

		$listArtikel->update($input);

		return redirect(route('artikel.index'));
	}

	public function destroy($id){
		$listArtikel=Artikel::find($id);

		if(empty($listArtikel)){
			return redirect(route('artikel.index'));
		}

		$listArtikel->delete();
		return redirect(route('artikel.index'));
	}
}