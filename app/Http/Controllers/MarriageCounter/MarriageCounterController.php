<?php

namespace App\Http\Controllers\MarriageCounter;

use App\Http\Controllers\Controller;
use App\Models\MarriageGame;
use App\Models\MarriagePlayer;
use Illuminate\Http\Request;

class MarriageCounterController extends Controller
{
    public function home(){
        return view("marriage.index");
    }
    public function start_game(){
        $date = date('Y-m-d');
        $rec = MarriageGame::create([
            'game_name' => 'game'.$date,
        ]);
        return response([
            'message' => 'New Game Created Successfully',
            'data' => $rec,
        ],200);
    }

    public function add_player(Request $request)
    {
        $rec = MarriagePlayer::create([
            'name' => $request->add_player?? "Unknown Player",
            'game_id' => $request->game_id
        ]);
        return response([
            'message' => 'New Player Created Successfully',
            'data' => $rec,
        ],200);
    }
    public function check_no_of_player(Request $request)
    {
        return MarriagePlayer::where(['game_id'=>$request->game_id])->count();        
    }

    public function update_player(Request $request)
    {
        $data = MarriagePlayer::find($request->id);
        dd($data);
        
    }

    public function delete_player(Request $request)
    {
        return MarriagePlayer::where(['game_id'=>$request->game_id])->count();        
    }
}
