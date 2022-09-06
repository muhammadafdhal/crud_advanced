<?php

namespace App\Http\Controllers;

use App\DataBarang;
use Illuminate\Http\Request;
use DB;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barang = DB::table('data_barang')->paginate(10);
        return view('barang.index',['barang'=>$barang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::table('data_barang')->insert([
            ['kode_barang' => $request->kode_barang, 'nama_barang' => $request->nama_barang],
        ]);

        return redirect()->route('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function show(DataBarang $dataBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(DataBarang $dataBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataBarang $dataBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataBarang  $dataBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        DB::table('data_barang')->where('id',$id)->delete();

        return redirect()->back();
    }
}
