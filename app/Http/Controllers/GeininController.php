<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\Geinin;
use App\Video;

class GeininController extends Controller
{
    public function index(Request $request) {
        $orderby = empty($request->orderby) ? 'name' : $request->orderby;
        $geinins = Geinin::orderBy($orderby)->get();
        return view('geinin.index', ['geinins' => $geinins]);
    }

    public function show(Request $request, $id) {
        $geinin = Geinin::find($id);
        $videos = Video::where('geinin_id', $id)->get();

        $members = array();
        array_push($members,$geinin->member_1);
        array_push($members,$geinin->member_2);
        array_push($members,$geinin->member_3);
        array_push($members,$geinin->member_4);
        array_push($members,$geinin->member_5);

        $youtubes = array();
        if(!empty($videos)){
            foreach ($videos as $video) {
                //叩きたいAPIを持ってくる
                $base_url = "https://www.googleapis.com/youtube/v3/videos?id=" . $video->youtube_id . "&key=AIzaSyCi73Clf3nXaxoocsBAp3d9ewlgGGjXuW4&fields=items(id,snippet(channelTitle,title,thumbnails),statistics)&part=snippet,contentDetails,statistics";

                $ch = curl_init();

                // オプションを設定
                curl_setopt($ch, CURLOPT_URL, $base_url); // 取得するURLを指定
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 実行結果を文字列で返す
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // サーバー証明書の検証を行わない

                // URLの情報を取得
                $response =  curl_exec($ch);

                // 取得結果を表示
                $result = json_decode($response, true);

                // セッションを終了
                curl_close($ch);

                array_push($youtubes,$result);
            }
        }
        return view('geinin.show', ['geinin' => $geinin,'youtubes' => $youtubes]);
    }

    public function create() {
        return view('geinin.create');
    }

    public function store(Request $request) {
        $geinin = new Geinin;
        $geinin->name = $request->name;
        $geinin->member_1 = empty($request->member_1) ? NULL : $request->member_1;
        $geinin->member_2 = empty($request->member_2) ? NULL : $request->member_2;
        $geinin->member_3 = empty($request->member_3) ? NULL : $request->member_3;
        $geinin->member_4 = empty($request->member_4) ? NULL : $request->member_4;
        $geinin->member_5 = empty($request->member_5) ? NULL : $request->member_5;
        $geinin->office = $request->office;
        $geinin->formed_year = $request->formed_year;
        $geinin->save();

        return view('geinin.store');
    }
}
