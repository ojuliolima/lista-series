<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index() {
        $series = Serie::query()->orderBy('name')->get();

        return view('series.index')->with('series', $series);
    }

    public function create() {

        return view('series.create');
    }

    public function store(Request $resquest) {
        Serie::create($resquest->all());

        return to_route('serie.index');
    }
}
