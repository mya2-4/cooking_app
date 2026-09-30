<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    public function index() {
        $logs = Log::all();//Logモデルを使って、DBに登録されている料理のデータを全部所得する
        return view('post.mylogs',compact('logs'));
    }
}
