<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function index(Request $request) {
        return view('csv.index');
    }

    public function download(Request $request) {
        $callback = hoge;
        $filename = sprintf('test-%s', date('Ymd'));
        $header = foo;

        return response()->streamDownload($callback, $filename, $header);
                // 出力バッファ
                // 文字コードの変換
                // ヘッダー
                // データ
    }
}
