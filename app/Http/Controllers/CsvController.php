<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function index(Request $request) {
        return view('csv.index');
    }

    public function download(Request $request) {
        return response()->streamDownload(
            function() {
                // 出力バッファ
                // 文字コードの変換
                // ヘッダー
                // データ


            }
        );
    }
}
