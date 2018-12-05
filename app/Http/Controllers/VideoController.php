<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Video;
use App\Geinin;

class VideoController extends Controller
{
    public function create() {
        $geinins = DB::table('geinins')->pluck('id','name');
        return view('video.create', ['geinins' => $geinins]);
    }

    public function store(Request $request) {
        $video = new Video;
        $video->geinin_id = $request->geinin_id;
        $video->youtube_id = $request->youtube_id;
        $video->save();

        Geinin::where('id', $request->geinin_id)->update(['image' => $video->youtube_id]);

        return view('video.store');
    }
}
