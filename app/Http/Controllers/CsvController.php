<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function index(Request $request) {
        return view('csv.index');
    }

    public function download() {
        return view('csv.index');
    }
}
