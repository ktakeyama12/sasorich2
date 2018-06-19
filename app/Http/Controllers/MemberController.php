<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Event;

class MemberController extends Controller
{
    public function sanka($event_id){
        //var_dump($event_id);exit;
        $user_id = \Auth::user()->id;
        $a = Event::find($event_id);
        $a->users()->attach($user_id);
        return redirect('/');
    }
    
    public function unsanka($event_id){
        exit;
        $user_id = \Auth::user()->id;
        $a = Event::find($event_id);
        $a->users()->dettach($user_id);
        return redirect('/');
    }
}