<?php

namespace App\Http\Controllers;

use App\Core\Application\Usecases\GetAllKotaKabupaten;
use App\Core\Application\Usecases\GetAllProvinsi;
use App\Models\Kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pendataan.kampus.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['provinsis'] = (new GetAllProvinsi)->execute();
        // $data['kotas'] = (new GetAllKotaKabupaten)->execute();
        return view('pendataan.kampus.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nama_kampus' => 'required',
            'jenis_kampus' => 'required',
            'id_kota' => 'required',
        ]);

        Kampus::create($data);

        return redirect('/pendataan/kampus/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
