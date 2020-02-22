<?php

namespace App\Controller;

use App\Model\Team;

class TeamController
{
    public function __invoke()
    {

        $teams = \App\Model\Team::all();

        return view('team', ['teams' => $teams]);
    }
}
