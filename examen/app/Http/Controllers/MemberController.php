<?php

namespace App\Http\Controllers;

use App\Member;



class MemberController extends Controller
{

    public function list()
    {
        $Members = Member::all();

        dd($Members);
    }
}
