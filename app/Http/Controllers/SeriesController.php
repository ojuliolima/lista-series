<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = Serie::query()->orderBy('name')->get();

        $successMessage = session('success.message');

        return view('series.index')->with('series', $series)->with('successMessage', $successMessage);
    }

    public function create() {

        return view('series.create');
    }

    public function store(Request $request) {

        $series = Serie::create($request->all());

        return to_route('series.index')->with('success.message', "Série {$series->name} adicionada com sucesso");
    }

    public function destroy(Serie $series) {
        $series->delete();

        return to_route('series.index')->with('success.message', "Série {$series->name} removida com sucesso");
    }
}
