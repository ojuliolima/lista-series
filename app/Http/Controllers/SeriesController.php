<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()->orderBy('name')->get();
        
        $successMessage = $request->session()->get('success.message');
        $request->session()->forget('success.message');

        return view('series.index')->with('series', $series)->with('successMessage', $successMessage);
    }

    public function create() {

        return view('series.create');
    }

    public function store(Request $resquest) {
        Serie::create($resquest->all());

        return to_route('series.index')->get();
    }

    public function destroy(Request $request) {

        Serie::destroy($request->series);

        $request->session()->put('success.message', 'Série removida com sucesso');

        return to_route('series.index');
    }
}
