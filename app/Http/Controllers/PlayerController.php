<?php

namespace App\Http\Controllers;


use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PlayerController extends Controller
{

    public function player()
    {
        return view('player');
    }

    public function teamadd()
    {
        $team =  Team::all();
//        dd($team);
        return view('player', ['team' => $team]);
    }

    public function playinfo(Request $request)
    {

//        dd($request->all());
//        $request->validate([
//            'player_name' => 'required',
//            'birth_place' => 'required',
//            'birth_day' => 'required',
//            'player_role' => 'required',
//            'batting_style' => 'required',
//            'bolling_style' => 'required',
//            'team_name' => 'required',
//        ]);

        $player = new Player();
        $player->player_name = $request->input('player_name');
        $player->birth_place = $request->input('birth_place');
        $player->birth_day = $request->input('birth_day');
        $player->team_id = $request->input('team_id');
        $player->player_role = $request->input('player_role');
        $player->batting_style = $request->input('batting_style');
        $player->bolling_style = $request->input('bolling_style');

        $player->save();

        return "data saved successfully";
    }

//    public function add(){
//        return view('player');
//    }

    public function ajax(Request $request)
    {
        if ($request->ajax()) {
            $u = Player::query();

            return DataTables::of($u)
                ->addColumn('action', function ($admin) {
                    return '<a class="btn btn-danger">Delete</a>';
                })
                ->rawColumns(["action"])
                ->make(true);

        }
        return view('welcome');
    }

}
