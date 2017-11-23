<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;


class messagesController extends Controller
{
    public function store(Request $request){
        $request['ip_address']=$request->ip();
        Message::create($request->all());
        return View('profile.index');
    }
}
