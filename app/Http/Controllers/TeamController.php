<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team(){
        $team_names = ['No data selected', 'Bangladesh', 'Australia'];
        $selectedData = 'Australia';

        return view('team', compact('team_names', 'selectedData'));
    }

    public function cricket_team(Request $request)
    {
        $request->validate([
            'team_name' => 'required',

        ]);

        $team = new Team();
        $team->team_name = $request->input('team_name');
        $team->save();

        return "data saved successfully";
    }
}
