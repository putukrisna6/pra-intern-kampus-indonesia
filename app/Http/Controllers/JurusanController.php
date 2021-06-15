<?php

namespace App\Http\Controllers;

use App\Core\Application\Usecases\GetFakultasbyKampus;
use App\Models\Fakultas;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
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
        return view('pendataan.jurusan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_kampus)
    {
        $data['fakultas'] = (new GetFakultasbyKampus)->execute($id_kampus);
        return view('pendataan.jurusan.create', $data, compact('id_kampus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_kampus = $request->id_kampus;
        $data = request()->validate([
            'nama_jurusan' => 'required',
            'id_fakultas' => 'required',
            'kuota' => 'required',
        ]);
        Jurusan::create($data);
        return redirect('pendataan/kampus/show/' . $id_kampus);
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
    public function edit(Jurusan $jurusan)
    {
        $fakultas = Fakultas::where('id', $jurusan->id_fakultas)->select('id_kampus')->first();
        $id_kampus = $fakultas->id_kampus;

        $data['fakultas'] = (new GetFakultasbyKampus)->execute($id_kampus);
        return view('pendataan.jurusan.edit', compact('jurusan', 'id_kampus'), $data);
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
        $id_kampus = $request->id_kampus;
        $data = request()->validate([
            'nama_jurusan' => 'required',
            'id_fakultas' => 'required',
            'kuota' => 'required',
        ]);
        Jurusan::find($id)->update($data);
        return redirect('pendataan/kampus/show/' . $id_kampus);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurusan $jurusan)
    {
        $fakultas = Fakultas::where('id', $jurusan->id_fakultas)->select('id_kampus')->first();
        $id_kampus = $fakultas->id_kampus;

        $jurusan->delete();

        return redirect('pendataan/kampus/show/' . $id_kampus);
    }
}
