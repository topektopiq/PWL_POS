<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Http\Requests\StorePostRequest;
use App\Models\KategoriModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    // public function index(){
    //     // $data = [
    //     //     'kategori_kode' => 'SNK',
    //     //     'kategori_nama' => 'Snack/Makanan Ringan',
    //     //     'created_at' => now(),
    //     // ];
    //     // DB::table('m_kategori')->insert($data);
    //     // return 'Insert data baru berhasil';

    //     // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
    //     // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

    //     // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    //     // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

    //     $data = DB::table('m_kategori')->get();
    //     return view('kategori', ['data' => $data]);

    // }

    public function index(KategoriDataTable $dataTable){
        return $dataTable->render('kategori.index');
    }

    public function create(){
        return view('kategori.create');
    }

    public function store(StorePostRequest $request): RedirectResponse {
        $validate = $request->validate();

        $validate = $request->safe()->only(['kategori_kode', 'kategori_nama']);
        $validate = $request->safe()->except(['kategori_kode', 'kategori_nama']);

        return redirect('/kategori');
    }
    
    public function edit($id){
        $category = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $category]);
        // return redirect('/kategori');
    }

    public function edit_save($id, Request $request){
        $category = KategoriModel::find($id);

        $category->kategori_nama = $request->namaKategori;

        $category->save();
        return redirect('/kategori');
    }

    public function delete($id){
        $category = KategoriModel::find($id);
        $category->delete();
        return redirect('/kategori');
    }



}
