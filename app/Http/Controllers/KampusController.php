<?php

namespace App\Http\Controllers;

use App\Core\Application\Usecases\GetAllProvinsi;
use App\Core\Application\Usecases\ViewFakultasJurusan;
use App\Models\Fakultas;
use App\Models\Jurusan;
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
        $data['provinsis'] = (new GetAllProvinsi)->execute();
        return view('pendataan.kampus.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['provinsis'] = (new GetAllProvinsi)->execute();
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
        $kampus = Kampus::where('id', $id)->first();
        $fakultas = (new ViewFakultasJurusan)->execute($kampus->id);
        return view('pendataan.kampus.show', compact('kampus', 'fakultas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kampus $kampus)
    {
        $data['provinsis'] = (new GetAllProvinsi)->execute();
        return view('pendataan.kampus.edit', compact('kampus'), $data);
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
            'nama_kampus' => 'required',
            'jenis_kampus' => 'required',
            'id_kota' => 'required',
        ]);
        Kampus::find($id)->update($data);
        return redirect("pendataan/kampus/index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kampus $kampus)
    {
        $id_kampus = $kampus->id;
        $fakultas = Fakultas::where('id_kampus', $id_kampus)->get();

        foreach($fakultas as $f) {
            Jurusan::where('id_fakultas', $f->id)->delete();
            $f->delete();
        }
        $kampus->delete();
        return redirect("pendataan/kampus/index");
    }
}
