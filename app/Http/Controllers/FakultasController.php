<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_kampus)
    {
        return view('pendataan.fakultas.create', compact('id_kampus'));
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
            'nama_fakultas' => 'required',
            'id_kampus' => 'required',
        ]);

        Fakultas::create($data);
        return redirect('pendataan/kampus/show/' . $data['id_kampus']);
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
    public function edit(Fakultas $fakultas)
    {
        return view('pendataan.fakultas.edit', compact('fakultas'));
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
        $data = request()->validate([
            'nama_fakultas' => 'required',
            'id_kampus' => 'required',
        ]);
        Fakultas::find($id)->update($data);
        return redirect('pendataan/kampus/show/' . $data['id_kampus']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fakultas $fakultas)
    {
        $id_kampus = $fakultas->id_kampus;
        Jurusan::where('id_fakultas', $fakultas->id)->delete();
        $fakultas->delete();
        return redirect('pendataan/kampus/show/' . $id_kampus);
    }
}
