<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function allPage(){
        return view('back.skills');
    }
}
