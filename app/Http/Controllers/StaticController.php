<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function beasiswa() {
        $data['beasiswas'] = Beasiswa::all();

        return view('static.beasiswa', $data);
    }
}
