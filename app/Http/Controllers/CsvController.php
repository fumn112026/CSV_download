<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function index(Request $request) {
        return view('csv.index');
    }
}
