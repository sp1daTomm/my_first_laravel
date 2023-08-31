<?php

namespace App\Http\Controllers;
use App\models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MsController extends Controller
{
    public function ms()
    {
        // $news = DB::table('news')->get();
        $news = News::where('title', '=', '隆重推出新版Bing')->get();

        //找出最新三筆
        $q1 = News::take(3)->get();
        //找出最舊三筆
        $q2 = News::orderBy('id','desc')->take(4)->get();
        //找出隨機三筆
        $q3 = News::inRandomOrder()->take(4)->get();


        //dump and die
        //寫法一 "," 後面物件 "name" 表key值 在blade頁面上用$name 顯示"James"
        //return view('ms.ms',['news' => $news]);

        //寫法二 "," 後面物件 "name"表key值 在blade頁面上用$name 顯示 "James"
        return view('ms.ms', ['name' => 'James']);

    }
}
